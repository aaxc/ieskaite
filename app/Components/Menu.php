<?php

declare(strict_types=1);

namespace App\Components;

use App\Core\Database;
use App\Entities\Person;
use App\Repositories\PersonRepository;
use App\Validators\Validator;

/**
 * Izvēlnes komponenta klase.
 *
 * @author Dainis Abols
 */
readonly class Menu
{
    /**
     * @var array<int, Person>
     */
    public array $persons;
    public string $title;

    public function __construct(
        private PersonRepository $repository,
        private array $request,
    ) {
        // Nolasām personu pēc ID no pieprasījuma
        $personId = $this->request['person'] ?? 1;
        Validator::validate($personId);

        // Iegūstam personu sarakstu no repozitorija
        $this->persons = $this->repository->getPersonList((int) $personId);

        // Nosakam izvēlnes nosaukumu
        $this->title = 'Darbinieku saraksts';
    }
}

/**
 * Palīgfunkcija izvēlnes komponenta izveidei.
 *
 * @param array $request
 *
 * @return \App\Components\Menu
 */
function menu(array $request): Menu
{
    return new Menu(new PersonRepository(new Database()), $request);
}
