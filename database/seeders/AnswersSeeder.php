<?php

namespace Database\Seeders;

use App\Models\Questionnaires\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createAnswerInDB('да');
        $this->createAnswerInDB('нет');
        $this->createAnswerInDB('Игристое');
        $this->createAnswerInDB('Вино');
        $this->createAnswerInDB('Крепкий алкоголь');
        $this->createAnswerInDB('Зависит от крепости напитков');
    }
    private function createAnswerInDB(string $name)
    {
        $name = ucfirst($name);
        $answer = new Answer();
        $answer->name = $name;
        $answer->save();
    }
}
