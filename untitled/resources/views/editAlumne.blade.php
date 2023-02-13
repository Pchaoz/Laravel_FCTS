<html>
<head>
    <meta charset="UTF-8">
    <!--<title>Empreses</title>-->
</head>
<body>
@extends('layouts.app')
@section("content")
    <div class="container">
        <h1>Editar Alumne</h1>

        <form method="POST" action="/alumne/edit" enctype="multipart/form-data">

            <div class="form-group">
                <input type="text" name="id" value="3"  class="form-control" hidden>
            </div>
            <br/>
            <div class="form-group">
                <label> Nom Alumne: </label><input type="text" name="nom" value=""  class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Cognom Alumne:</label> <input type="text" name="cognom" value="" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Telefon Alumne:</label> <input type="text" name="telefon" value="" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Correu Alumne:</label> <input type="text" name="correu" value="" class="form-control">
            </div>
            <div class="form-group">
                <label>Curs Alumne:</label> <input type="number" name="curs" value="" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> DNI Alumne:</label> <input type="text" name="dni" value="" class="form-control">
            </div>

            <br/>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar Canvis</button>
            </div>
            {{ csrf_field() }}
        </form>
    </div>
@endsection
</body>
</html>
