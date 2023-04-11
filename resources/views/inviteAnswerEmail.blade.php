<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Получен ответ на свадебное приглашение</title>
</head>
<body>
    {{"$person->surname $person->name $person->patronymic"}} сообщил(а) что {{$inviteAnswer->is_accepted ? '' : 'не '}} пойдет на вашу свадьбу.
    @if($inviteAnswer->satellites_message)
        <br/>
        Вот, что он(а) сообщил о своих спутниках:
        <br/>
        {{$inviteAnswer->satellites_message}}
    @endif
    @if($inviteAnswer->message)
        <br/>
        Он(а) оставил следующее сообщение для вас:
        <br/>
        {{$inviteAnswer->message}}
    @endif
    <br/>
    Данные приглашенного:
    <br/>
    Номер телефона: {{$person->phone}}
    <br/>
    @if($person->email)Email: {{$person->email}}@endif
</body>
</html>
