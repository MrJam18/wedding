<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\InviteEmail;
use App\Models\InviteAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InvitingAnswersController
{
    function setInvitedAnswer(Request $request): void
    {

        $data = $request->all();
        if($request->input('answerId')) {
            $answer = InviteAnswer::find((int)$request->input('answerId'));
        }
        else $answer = new InviteAnswer();
        $answer->is_accepted = (int)$data['is_accepted'];
        $answer->message = $data['message'];
        if(isset($data['number_of_persons'])) $answer->number_of_persons = +$data['number_of_persons'];
        $answer->satellites_message = $request->input('satellites_message');
        $answer->person_id = $data['personId'];
        $answer->save();
        $email = new InviteEmail($answer->person, $answer);
        Mail::to(env('CUSTOMER_EMAIL'), 'customer')->send($email);
    }
}
