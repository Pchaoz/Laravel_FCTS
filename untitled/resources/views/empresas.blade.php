<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        @extends('layouts.app')
        @section("content")
        <div class="container">
            <h1>Llistat empreses</h1>
            <ul>
                @foreach($empreses as $empresa)
                    <li>Nom: {{$empresa->nom}} | Adreça: {{$empresa->adreça}}
                        <a href="/empresa/edit/{{$empresa->idEmpresa}}" class="btn btn-dark">Editar</a>
                    </li>

                @endforeach
            </ul>
        </div>
        @endsection
    </body>
</html>
