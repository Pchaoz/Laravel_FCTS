@extends('layouts.app')
@section("content")
    <div class="container">
        <h1>Alumne</h1>

        <form method="POST" action="/fitxa" enctype="multipart/form-data">

            <div class="form-group">
                <input type="text" name="id" value="{{$user->idUser}}"  class="form-control" hidden>
            </div>
            <br/>
            <div class="form-group">
                <label> Nom Usuari: </label><input type="text" name="nom" value="{{$user->name}}"  class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Email:</label> <input type="text" name="email" value="{{$user->email}}" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Password:</label> <input type="password" name="dni" value="{{$user->password}}" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label> Cicle:</label>
                <select class="form-select" id="grup" name="grup">
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
