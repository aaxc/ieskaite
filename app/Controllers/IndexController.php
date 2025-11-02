<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;

use function App\Components\content;
use function App\Components\menu;

final class IndexController extends Controller
{
    public function index(): void
    {
        $this->view('index', [
            'title' => 'PHP un DB',
            'menu' => menu($_GET),
            'content' => content($_GET),
            'footer' => '&copy; ' . date('Y') . ' Dainis Abols',
        ]);
    }
}
