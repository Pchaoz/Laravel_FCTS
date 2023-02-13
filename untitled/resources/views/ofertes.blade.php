<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
@extends('layouts.app')
@section("content")
    <div class="container">
        <h1>Llistat ofertes</h1>
        <ul>
            @foreach($ofertes as $oferta)
                <li>Descripcio: {{$oferta->descripcio}} | Vacants: {{$oferta->vacants}} | Curs: {{$oferta->curs}} | Persona Contacte: {{$oferta->nomContacte}} {{$oferta->cognomsContacte}} | Correu Contacte: {{$oferta->correuContacte}} </li>
            @endforeach
        </ul>
<div class="row justify-content-center">
    <a href="/empresa/oferta/VistaAdd/" class="btn btn-success col-2 border-primary">Afegir Oferta</a>
</div>
    </div>
@endsection
</body>
</html>
