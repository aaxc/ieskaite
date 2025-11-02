<?php

declare(strict_types=1);

namespace App\Components;

use App\Core\Database;
use App\Entities\Person;
use App\Repositories\PersonRepository;
use App\Validators\Validator;

readonly class Content
{
    private Person $person;

    public function __construct(
        private PersonRepository $repository,
        private array $request,
    ) {
        $personId = $this->request['person'] ?? 1;
        Validator::validate($personId);

        $this->person = $this->repository->getPersonById((int) $personId);
    }

    public function getPerson(): Person
    {
        return $this->person;
    }
}

function content(array $request): Content
{
    return new Content(new PersonRepository(new Database()), $request);
}
