@extends('layouts.app')
@section("content")
    <div class="container">
        <h1>Empresa</h1>

        <form method="POST" action="/empresa/oferta/edit" enctype="multipart/form-data">

            <div class="form-group">
                <input type="text" name="id" value="{{$oferta->idOferta}}"  class="form-control" hidden>
            </div>
            <br/>
            <div class="form-group">
                <label> Descripcio: </label><input type="text" name="descripcio" value="{{$oferta->descripcio}}"  class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Vacants:</label> <input type="number" name="vacants" value="{{$oferta->vacants}}" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Curs:</label> <input type="text" name="curs" value="{{$oferta->curs}}" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Nom Contacte:</label> <input type="text" name="nomcontacte" value="{{$oferta->nomContacte}}" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Cognoms Contacte:</label> <input type="text" name="cognomscontacte" value="{{$oferta->cognomsContacte}}" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Correu Contacte:</label> <input type="text" name="correucontacte" value="{{$oferta->correuContacte}}" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Empresa:</label>
                <select class="form-select" id="empresa" name="empresa">
                    @foreach($empreses as $empresa)
                        <option
                            value="{{$empresa->idEmpresa}}">{{$empresa->nom}}</option>
                    @endforeach
                </select>
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
                <button type="submit" class="btn btn-primary">Guardar Canvis</button>
            </div>
            {{ csrf_field() }}
        </form>
    </div>
@endsection
