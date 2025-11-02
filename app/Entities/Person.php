<?php

declare(strict_types=1);

namespace App\Entities;

readonly class Person
{
    public function __construct(
        public int $id,
        public string $name,
        public string $description,
        public bool $active = false,
    ) {
    }

    public function makeActive(): Person
    {
        return new Person(
            id: $this->id,
            name: $this->name,
            description: $this->description,
            active: true,
        );
    }

    public static function fromRow(array $row): Person
    {
        return new Person(
            id: (int) $row['id'],
            name: (string) $row['vards'],
            description: (string) $row['apraksts'],
        );
    }
}