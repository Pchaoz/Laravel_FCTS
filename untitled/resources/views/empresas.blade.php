<html>
    <head>
        <meta charset="UTF-8">
        <!--<title>Empreses</title>-->
    </head>
    <body>
        @extends('layouts.app', ['activePage' => 'empresas', 'title' => 'Empreses', 'navName' => 'Empreses', 'activeButton' => 'laravel'])
        @section("content")
        <div class="container">
            <h1>Llistat empreses</h1>
            <ul>
                @foreach($empreses as $empresa)
                    <li>Nom: {{$empresa->nom}} | Adreça: {{$empresa->adreça}}
                    {!! Form::open(['url' => 'empresas']) !!}
                    <button type="submit" class="btn btn-danger">Editar</button></li>
                    {!! Form::submit('editarEmpresa') !!}
                @endforeach
            </ul>
        </div>
        @endsection
    </body>
</html>
