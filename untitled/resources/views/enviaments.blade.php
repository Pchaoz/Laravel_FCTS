<html>
<head>
    <meta charset="UTF-8">
    <title>Enviaments</title>
</head>
<body>
@extends('layouts.app')
@section("content")
    @if($user->coordinador)
        <div class="container">
            <h1>Tots els enviaments</h1>
            <ul>
                @foreach($enviaments as $enviament)
                    <li>ID Enviament: {{$enviament->idEnviaments}} || Estat: {{$enviament->estat}} || Alumne: {{$enviament->idAlumne}} || Oferta: {{$enviament->idOferta}}}}
                    <a href="/" class="btn btn-danger">Editar</a></li>
                @endforeach
            </ul>
        </div>
    @else
        <div class="container">
            <h1>Els teus enviaments</h1>
            <ul>
                @foreach($enviaments as $enviament)
                    @if($enviament->creatPer == $user->idUser)
                    <li>ID Enviament: {{$enviament->idEnviaments}} || Estat: {{$enviament->estat}} || Alumne: {{$enviament->idAlumne}} || Oferta: {{$enviament->idOferta}}}}
                        <a href="/" class="btn btn-danger">Editar</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endif
@endsection
</body>
</html>
