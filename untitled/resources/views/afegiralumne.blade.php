@extends('layouts.app')
@section("content")
    <div class="container">
        <h1>Afegir Alumne</h1>

        <form method="POST" action="/alumne/add" enctype="multipart/form-data">


            <div class="form-group">
                <input type="text" name="id" class="form-control" hidden>
            </div>
            <br/>
            <div class="form-group">
                <label> Nom Alumne: </label><input type="text" name="nom" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Cognom Alumne:</label> <input type="text" name="cognom" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> DNI:</label> <input type="text" name="dni" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Curs:</label> <input type="number" name="curs" class="form-control">
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
                <label> Telefon Alumne:</label> <input type="text" name="telefon" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Correu Alumne:</label> <input type="text" name="correu" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> En Pràctiques? </label> <input type="text" name="practiques" class="form-control" disabled>
            </div>
            <br/>
            <div class="form-group">
                <label> CV: </label> <input type="file" name="cv" class="form-control">
            </div>
            <br/>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar Canvis</button>
            </div>
            {{ csrf_field() }}
        </form>
    </div>
@endsection
