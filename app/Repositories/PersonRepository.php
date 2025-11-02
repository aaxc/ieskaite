<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Core\Database;
use App\Entities\Person;

/**
 * Personu repozitorija klase.
 *
 * @author Dainis Abols
 */
readonly class PersonRepository
{
    public function __construct(
        private Database $db,
    ) {
    }

    public function getPersonList(int $activePersonId): array
    {
        // Iegūstam personu sarakstu no datubāzes
        $result = $this->db->connection->query("SELECT * FROM personas ORDER BY vards ASC");
        if ($result === false) {
            return [];
        }

        // Veidojam personu masīvu
        $persons = [];
        while ($row = $result->fetch_assoc()) {
            $person = Person::fromRow($row);
            $persons[] = $person->id === $activePersonId ? $person->makeActive() : $person;
        }

        return $persons;
    }

    public function getPersonById(int $id): ?Person
    {
        // Iegūstam personu pēc ID no datubāzes
        $result = $this->db->connection->query("SELECT * FROM personas WHERE id = $id LIMIT 1");
        if ($result === false || $result->num_rows === 0) {
            return null;
        }

        // Atgriežam personas objektu
        return Person::fromRow($result->fetch_assoc());
    }
}
