<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;

use function App\Components\menu;

final class IndexController extends Controller
{
    public function index(): void
    {
        $this->view('index', [
            'title' => 'PHP un DB',
            'menu' => menu(),
            'content' => 'content()',
            'footer' => '&copy; ' . date('Y') . ' Dainis Abols',
        ]);
    }
}
