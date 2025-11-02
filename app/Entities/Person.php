<?php

declare(strict_types=1);

namespace App\Entities;

/**
 * Persona entītijas klase.
 *
 * @author Dainis Abols
 */
readonly class Person
{
    public function __construct(
        public int $id,
        public string $name,
        public string $description,
        public bool $active = false,
    ) {
    }

    /**
     * Nokopējam esošo personu un padaram to aktīvu.
     *
     * @return \App\Entities\Person
     */
    public function makeActive(): Person
    {
        return new Person(
            id: $this->id,
            name: $this->name,
            description: $this->description,
            active: true,
        );
    }

    /**
     * Izveidojam personas objektu no datubāzes rindas.
     *
     * @param array $row
     *
     * @return \App\Entities\Person
     */
    public static function fromRow(array $row): Person
    {
        return new Person(
            id: (int) $row['id'],
            name: (string) $row['vards'],
            description: (string) $row['apraksts'],
        );
    }
}
