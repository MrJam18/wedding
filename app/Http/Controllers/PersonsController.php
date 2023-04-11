<?php
declare(strict_types=1);

namespace App\Http\Controllers;


use App\Models\Person;
use Illuminate\Http\Request;

class PersonsController
{
    function createPerson(Request $request): array
    {
        $data = $request->all();
        $person = new Person();
        $person->name = $data['name'];
        $person->surname = $data['surname'];
        $person->patronymic = $data['patronymic'];
        $person->email = $data['email'];
        $person->phone = $data['phone'];
        $person->save();
        return ['personId' => $person->id];
    }
    function getPersonData(Person $person): array
    {
        return [
            'id' => $person->id,
            'inviteAnswerId' => $person->inviteAnswer?->id,
            'questionnaireGroupId' => $person->answerGroup?->id
        ];
    }
}
