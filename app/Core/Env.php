<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Vides mainīgo ielādes klase no .env faila.
 *
 * @author Dainis Abols
 */
readonly class Env
{
    public function __construct(
        private string $path,
    ) {
    }

    public function load(): void
    {
        // Pārbaudām, vai fails eksistē
        if (!file_exists($this->path)) {
            return;
        }

        // Nolasām faila saturu pa rindai un iestatām vides mainīgos
        $lines = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            [$name, $value] = array_map('trim', explode('=', $line, 2));

            $_ENV[$name] = $value;
            putenv("$name=$value");
        }
    }
}
