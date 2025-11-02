<?php

declare(strict_types=1);

namespace App;

use App\Controllers\IndexController;
use App\Core\Env;

/**
 * Galvenā lietotnes klase.
 *
 * @author Dainis Abols
 */
final class Index
{
    public function __construct()
    {
        // Priekšielāde klasēm
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
        // Ielādē vides mainīgos no .env faila
        new Env(__DIR__ . '/../.env')->load();

        // Izsauc galveno kontrolieri
        $controller = new IndexController();
        $controller->index();
    }
}
