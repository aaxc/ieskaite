<?php

declare(strict_types=1);

namespace App\Validators;

use InvalidArgumentException;

/**
 * Validācijas klase.
 *
 * @author Dainis Abols
 */
readonly class Validator
{
    public static function validate(mixed $id): void
    {
        // Pārbaudām, vai ID ir derīgs pozitīvs vesels skaitlis
        if (!filter_var($id, FILTER_VALIDATE_INT) || $id <= 0) {
            throw new InvalidArgumentException('Invalid person ID');
        }
    }
}
