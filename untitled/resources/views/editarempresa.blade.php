<html>
<head>
    <meta charset="UTF-8">
    <!--<title>Empreses</title>-->
</head>
<body>
@extends('layouts.app')
@section("content")
    <div class="container">
        <h1>Empresa</h1>

       <form method="POST" action="/novesDadesEmpresa" enctype="multipart/form-data">

           <div class="form-group">
               <input type="text" name="id" value="{{$empresa->idEmpresa}}"  class="form-control" hidden>
           </div>
           <br/>
            <div class="form-group">
               <label> Nom Empresa: </label><input type="text" name="nom" value="{{$empresa->nom}}"  class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Adreça Empresa:</label> <input type="text" name="adreça" value="{{$empresa->adreça}}" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Telefon Empresa:</label> <input type="text" name="telefon" value="{{$empresa->telefon}}" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Correu Empresa:</label> <input type="text" name="correu" value="{{$empresa->correu}}" class="form-control">
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
