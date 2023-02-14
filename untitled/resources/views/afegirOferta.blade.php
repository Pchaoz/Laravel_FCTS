<html>
<head>
    <meta charset="UTF-8">
    <!--<title>Empreses</title>-->
</head>
<body>
@extends('layouts.app')
@section("content")
    <div class="container">
        <h1>Afegir Oferta</h1>

        <form method="POST" action="/novaOferta" enctype="multipart/form-data">


            <div class="form-group">
                <label> Descripcio: </label><input type="text" name="desc"   class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Vacants:</label> <input type="text" name="vac" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Curs:</label> <input type="text" name="curs"  class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Nom Contacte:</label> <input type="text" name="nomCont" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Cognom Contacte:</label> <input type="text" name="cogCont" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Correu contacte:</label> <input type="text" name="correuCont" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Id Empresa:</label> <input type="text" name="idEmp" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Id Cicle:</label> <input type="text" name="idCicle" class="form-control">
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
