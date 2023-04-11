<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{"$person->surname $person->name $person->patronymic"}} оставил следующие ответы на свадебную анкету:
<br/>
@php
$lastQuestionAnswerId = null
@endphp
@foreach($answerGroup->answers as $questionAnswer)
    @if($lastQuestionAnswerId === $questionAnswer->question->id)
        , "{{$questionAnswer->answer->name}}"
    @else
        @if($lastQuestionAnswerId).<br/>@endif
    На вопрос "{{$questionAnswer->question->name}}" получен ответ "{{$questionAnswer->answer->name}}"
    @endif
    @php
    $lastQuestionAnswerId = $questionAnswer->question->id
    @endphp
@endforeach.
@if($answerGroup->comment)
    Также оставлен следующий комментарий: <br/>
    {{$answerGroup->comment}}
@endif
<br/>
<br/>
Данные приглашенного:
<br/>
Номер телефона: {{$person->phone}}
<br/>
@if($person->email)Email: {{$person->email}}@endif
</body>
</html>
