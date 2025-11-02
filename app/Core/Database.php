<?php

declare(strict_types=1);

namespace App\Core;

use mysqli;
use RuntimeException;

readonly class Database
{
    private mysqli $connection;

    public function __construct()
    {
        $this->connection = new mysqli(
            hostname: getenv('DB_HOST'),
            username: getenv('DB_USER'),
            password: getenv('DB_PASS'),
            database: getenv('DB_NAME'),
        );

        if ($this->connection->connect_error) {
            throw new RuntimeException('Database connection failed: ' . $this->connection->connect_error);
        }
    }

    public function getConnection(): mysqli
    {
        return $this->connection;
    }
}
