<?php

declare(strict_types=1);

namespace App\Validators;

use InvalidArgumentException;

class Validator
{
    public static function validate(mixed $id): void
    {
        if (!filter_var($id, FILTER_VALIDATE_INT) || $id <= 0) {
            throw new InvalidArgumentException('Invalid person ID');
        }
    }
}