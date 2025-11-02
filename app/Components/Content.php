<?php

declare(strict_types=1);

namespace App\Components;

use App\Core\Database;
use App\Entities\Person;
use App\Repositories\PersonRepository;
use App\Validators\Validator;

/*
 * Satura komponenta klase.
 *
 * @author Dainis Abols
 */

readonly class Content
{
    public Person $person;

    public function __construct(
        private PersonRepository $repository,
        private array $request,
    ) {
        // Nolasām personu pēc ID no pieprasījuma
        $personId = $this->request['person'] ?? 1;
        Validator::validate($personId);

        // Iegūstam personu no repozitorija
        $this->person = $this->repository->getPersonById((int) $personId);
    }
}

/**
 * Palīgfunkcija satura komponenta izveidei.
 *
 * @param array $request
 *
 * @return \App\Components\Content
 */
function content(array $request): Content
{
    return new Content(new PersonRepository(new Database()), $request);
}
