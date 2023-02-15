@extends('layouts.app')
@section("content")
    <div class="container">
        <h1>Afegir Empresa</h1>

        <form method="POST" action="/empresa/add" enctype="multipart/form-data">


            <div class="form-group">
                <input type="text" name="id" class="form-control" hidden>
            </div>
            <br/>
            <div class="form-group">
                <label> Nom Empresa: </label><input type="text" name="nom" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Adreça:</label> <input type="text" name="adresa" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Telefon:</label> <input type="text" name="telefon" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Correu:</label> <input type="text" name="correu" class="form-control">
            </div>
            <br/>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar Canvis</button>
            </div>
            {{ csrf_field() }}
        </form>
    </div>
@endsection
