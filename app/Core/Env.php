<?php

declare(strict_types=1);

namespace App\Core;

readonly class Env
{
    public function __construct(
        private string $path,
    ) {
    }

    public function load(): void
    {
        if (!file_exists($this->path)) {
            return;
        }

        $lines = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (str_starts_with(trim($line), '#') || !str_contains($line, '=')) {
                continue;
            }

            [$name, $value] = array_map('trim', explode('=', $line, 2));
            $_ENV[$name] = $value;
            putenv("$name=$value");
        }
    }
}
