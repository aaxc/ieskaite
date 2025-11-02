<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;

final class IndexController extends Controller
{
    public function index(): void
    {
        $this->view('index', ['message' => 'Hello World']);
    }
}
