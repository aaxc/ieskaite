<?php

declare(strict_types=1);

namespace App;

use App\Core\Env;
use App\Controllers\IndexController;

final class Index
{
    public function __construct()
    {
        require_once __DIR__ . '/Core/Env.php';
        require_once __DIR__ . '/Core/Database.php';
        require_once __DIR__ . '/Core/Controller.php';
        require_once __DIR__ . '/Controllers/IndexController.php';
    }

    public function run(): void
    {
        new Env(__DIR__ . '/../.env')->load();

        $controller = new IndexController();
        $controller->index();
    }
}
