<html>
<head>
    <meta charset="UTF-8">
    <!--<title>Empreses</title>-->
</head>
<body>
@extends('layouts.app', ['activePage' => 'editarempresa', 'title' => 'Editar Empresa', 'navName' => 'Editar Empresa', 'activeButton' => 'laravel'])
@section("content")
    <div class="container">
        <h1>Llistat empreses</h1>
        <ul>
            @foreach($empreses as $empresa)
                <li>Nom: {{$empresa->nom}} | Adreça: {{$empresa->adreça}}
                    <button type="submit" class="btn btn-dark">Editar</button></li>
            @endforeach
        </ul>
    </div>
@endsection
</body>
</html>
