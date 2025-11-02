<?php

declare(strict_types=1);

namespace App\Components;

use App\Core\Database;
use App\Repositories\PersonRepository;

readonly class Menu
{
    public array $items;

    public function __construct(
        private Database $db,
    ) {
        $repository = new PersonRepository($this->db);
        $this->items = $repository->getPersonList();
    }
}

function menu(): Menu
{
    return new Menu(new Database());
}
