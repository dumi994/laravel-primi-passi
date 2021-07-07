<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center">
    <h1>Hello world</h1>
    <div >
        @foreach($menu as $element)
            <a style="text-decoration:none" href="#">{{$element}}</a>
            @if(!$loop->last)
            -
            @endif
        @endforeach
    </div>
    <div>
        @foreach($users as $user)
            <div class="card" style="margin:15px; border:1px solid black">
                <p>Nome: {{$user['name']}}</p>
                <p>Cognome: {{$user['lastname']}}</p>
                <h2>Skill: {{$user['skills']}}</h2>
            </div>

            @if($loop->last)
            -
            @endif
        @endforeach
    </div>
        
</body>
</html>