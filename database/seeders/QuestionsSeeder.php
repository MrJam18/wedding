<?php

namespace Database\Seeders;

use App\Models\Questionnaires\Question;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $question = new Question();
        $question->name = 'Будет ли вам необходим трансфер?';
        $question = $this->saveAndCreate($question);
        $question->name = 'Будете ли вы с детьми?';
        $question = $this->saveAndCreate($question);
        $question->name = 'Предпочтения по алкоголю';
        $question = $this->saveAndCreate($question);
        $question->name = 'Будете ли вы участвовать в конкурсах?';
        $question = $this->saveAndCreate($question);
        $question->name = 'Будете ли вы фотографироваться с молодожёнами?';
        $question->save();
    }
    private function saveAndCreate(Question $question): Question
    {
        $question->save();
        return new Question();
    }
}
