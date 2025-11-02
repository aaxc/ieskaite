<?php

declare(strict_types=1);

namespace App;

use App\Controllers\IndexController;
use App\Core\Env;

final class Index
{
    public function __construct()
    {
        require_once __DIR__ . '/Core/Env.php';
        require_once __DIR__ . '/Core/Database.php';
        require_once __DIR__ . '/Core/Controller.php';
        require_once __DIR__ . '/Components/Content.php';
        require_once __DIR__ . '/Components/Menu.php';
        require_once __DIR__ . '/Entities/Person.php';
        require_once __DIR__ . '/Repositories/PersonRepository.php';
        require_once __DIR__ . '/Validators/Validator.php';
        require_once __DIR__ . '/Controllers/IndexController.php';
    }

    public function run(): void
    {
        new Env(__DIR__ . '/../.env')->load();

        $controller = new IndexController();
        $controller->index();
    }
}
