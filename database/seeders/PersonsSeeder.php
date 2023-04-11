<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $person = new Person();
        $person->name = 'test';
        $person->surname = 'testov';
        $person->patronymic = 'testovich';
        $person->phone = '89999999999';
        $person->email = 'kianga2@mail.ru';
        $person->save();
    }
}
