<?php
declare(strict_types=1);

require_once __DIR__ . '/app/Core/Env.php';
require_once __DIR__ . '/app/Core/Database.php';

use App\Core\Env;
use App\Core\Database;

new Env(__DIR__ . '/.env')->load();

try {
    $db = new Database();
    echo "✅ Database connection successful.<br>";
} catch (Throwable $e) {
    echo "❌ Database connection failed: " . $e->getMessage() . "<br>";
}
