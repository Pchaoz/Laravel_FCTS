@extends('layouts.app')
@section("content")
    <div class="container">
        <h1>Alumne</h1>

        <form method="POST" action="/alumne/edit" enctype="multipart/form-data">

            <div class="form-group">
                <input type="text" name="id" value="{{$alumne->idAlumne}}"  class="form-control" hidden>
            </div>
            <br/>
            <div class="form-group">
                <label> Nom Alumne: </label><input type="text" name="nom" value="{{$alumne->nomAlumne}}"  class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Cognom Alumne:</label> <input type="text" name="cognom" value="{{$alumne->CognomAlumne}}" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> DNI:</label> <input type="text" name="dni" value="{{$alumne->DNI}}" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Curs:</label> <input type="number" name="curs" value="{{$alumne->Curs}}" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Cicle:</label>
                <select class="form-select" id="cicle" name="cicle">
                    @foreach($estudis as $estudi)
                        <option
                            value="{{$estudi->idEstudi}}">{{$estudi->nom}}</option>
                    @endforeach
                </select>
            </div>
            <br/>
            <div class="form-group">
                <label> Telefon Alumne:</label> <input type="text" name="telefon" value="{{$alumne->Telefon}}" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Correu Alumne:</label> <input type="text" name="correu" value="{{$alumne->Correu}}" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> En Pràctiques? </label> <input type="text" name="practiques" value="{{$alumne->IsPractiques}}" class="form-control" disabled>
            </div>
            <br/>
            <div class="form-group">
                <label> CV: </label> <input type="file" name="cv" value="{{$alumne->IsPractiques}}" class="form-control">
            </div>
            <br/>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar Canvis</button>
            </div>
            {{ csrf_field() }}
        </form>
    </div>
@endsection
