<?php

declare(strict_types=1);

namespace App\Core;

abstract class Controller
{
    protected function view(string $file, array $params = []): void
    {
        extract($params, EXTR_SKIP);
        require __DIR__ . '/../Views/' . $file . '.php';
    }
}
