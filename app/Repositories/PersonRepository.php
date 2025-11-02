<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Core\Database;
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

    public function getPersonList(): array
    {
        $result = $this->runQuery("SELECT id, vards FROM personas ORDER BY vards ASC");

        if ($result === false) {
            return [];
        }

        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = [
                'id' => (int) $row['id'],
                'vards' => (string) $row['vards'],
            ];
        }

        return $rows;
    }

    public function runQuery(string $query): bool|mysqli_result
    {
        return $this->conn->query($query);
    }
}
