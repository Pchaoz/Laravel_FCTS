@extends('layouts.app')
@section("content")
    @if($user->coordinador)
        <div class="container">
            <h1>Tots els alumnes</h1>
            <ul>
                @foreach($alumnes as $alumne)
                    <li>ID Alumne: {{$alumne->idAlumne}} || Nom: {{$alumne->nomAlumne}} || Cognom: {{$alumne->CognomAlumne}} || DNI: {{$alumne->DNI}}
                        || Curs: {{$alumne->Curs}} || Telefon: {{$alumne->Telefon}} || Correu: {{$alumne->Correu}} || En practiques? {{$alumne->IsPractiques}}
                        || Cicle: {{$alumne->Cicle}}
                        <a href="/" class="btn btn-danger">Editar</a></li>
                @endforeach
            </ul>
        </div>
    @else
        <div class="container">
            <h1>Els teus alumnes</h1>
            <ul>
                @foreach($alumnes as $alumne)
                    @if($alumne->Cicle == $user->grup)
                        <li>ID Alumne: {{$alumne->idAlumne}} || Nom: {{$alumne->nomAlumne}} || Cognom: {{$alumne->CognomAlumne}} || DNI: {{$alumne->DNI}}
                            || Curs: {{$alumne->Curs}} || Telefon: {{$alumne->Telefon}} || Correu: {{$alumne->Correu}} || En practiques? {{$alumne->IsPractiques}}
                            || Cicle: {{$alumne->Cicle}}
                            <a href="/" class="btn btn-danger">Editar</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="container">
            <a href="/afegiralumne" class="btn btn-danger">Afegir Alumne</a>
        </div>
    @endif
@endsection
