<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\QuestionnaireEmail;
use App\Models\Questionnaires\AnswerGroup;
use App\Models\Questionnaires\QuestionAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuestionnaireController
{
    function setQuestionnaireAnswers(Request $request)
    {
//        return response($request->all())->setStatusCode(500);
        if($request->input('answer_group_id')) {
            $answerGroup = AnswerGroup::find((int)$request->input('answer_group_id'));
        }
        else $answerGroup = new AnswerGroup();
        $answerGroup->person_id = $request->input('personId');
        $answerGroup->comment = $request->input('comment');
        $answerGroup->save();
        foreach ($answerGroup->answers as $answer) {
            $answer->delete();
        }
        foreach ($request->all() as $key => $value) {
            if(str_starts_with($key, 'question')) {
                $questionId = (int)substr($key, 9);
                if(is_array($value)) {
                    foreach ($value as $answer_id) {
                        $questionAnswer = new QuestionAnswer();
                        $questionAnswer->question_id = $questionId;
                        $questionAnswer->answer_id = (int)$answer_id;
                        $questionAnswer->answer_group_id = $answerGroup->id;
                        $questionAnswer->save();
                    }
                }
                else {
                    $questionAnswer = new QuestionAnswer();
                    $questionAnswer->question_id = $questionId;
                    $questionAnswer->answer_id = (int)$value;
                    $questionAnswer->answer_group_id = $answerGroup->id;
                    $questionAnswer->save();
                }
            }
        }
        $email = new QuestionnaireEmail($answerGroup->person, $answerGroup);
        Mail::to(env('CUSTOMER_EMAIL'))->queue($email);
        return ['answer_group_id' => $answerGroup->id];
    }
}
