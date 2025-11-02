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
            getenv('DB_HOST'),
            getenv('DB_USER'),
            getenv('DB_PASS'),
            getenv('DB_NAME'),
        );

        if ($this->connection->connect_error) {
            throw new RuntimeException('Database connection failed: ' . $this->connection->connect_error);
        }
    }
}
