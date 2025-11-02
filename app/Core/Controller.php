<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Bāzes kontroliera klase.
 *
 * @author Dainis Abols
 */
abstract class Controller
{
    protected function view(string $file, array $params = []): void
    {
        // Padodam mainīgos skata failam
        extract($params, EXTR_SKIP);
        require __DIR__ . '/../Views/' . $file . '.php';
    }
}
