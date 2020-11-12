@extends('layouts.master')
@section('title', 'Login')
@section('header')

    <h2>Ingresa tus datos
        <img class="logo" src="/images/LogoToledo.png" alt="Logo" height="100px" style="float: right; height: 70px">
    </h2>




@stop

@section('content')
    <main id="form">
        <form action="{{action('PaintController@validar')}}" method="post">
            {{csrf_field()}}
            <label for="user">Usuario</label>
            <input type="text" name = "user">
            <br>
            <label for="pass">Contraseña</label>
            <input type="text" name = "pass">
            <br>
            <input type="submit" value="Entrar">
        </form>
    </main>

@stop
@section('footer')
    <div id="login">
        <h5 id="derechos">Derechos reservados - Emiliano Loya Flores 5°E - {{date('Y')}}</h5>
    </div>

@stop