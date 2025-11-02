<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Core\Database;
use App\Entities\Person;
use mysqli;
use mysqli_result;

readonly class PersonRepository
{
    private mysqli $conn;

    public function __construct(
        private Database $db,
    ) {
        $this->conn = $this->db->getConnection();
    }

    public function getPersonList(int $activePersonId): array
    {
        $result = $this->runQuery("SELECT * FROM personas ORDER BY vards ASC");

        if ($result === false) {
            return [];
        }

        $persons = [];
        while ($row = $result->fetch_assoc()) {
            $person = Person::fromRow($row);
            $persons[] = $person->id === $activePersonId ? $person->makeActive() : $person;
        }

        return $persons;
    }

    public function getPersonById(int $id): ?Person
    {
        $result = $this->runQuery("SELECT * FROM personas WHERE id = $id LIMIT 1");

        if ($result === false || $result->num_rows === 0) {
            return null;
        }

        return Person::fromRow($result->fetch_assoc());
    }

    public function runQuery(string $query): bool|mysqli_result
    {
        return $this->conn->query($query);
    }
}
