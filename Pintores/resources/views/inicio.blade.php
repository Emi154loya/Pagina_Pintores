@extends('layouts.master')
@section('title', 'Login')
@section('header')
    <h1>PINTORES
        <img class="logo" src="/images/LogoToledo.png" alt="Logo" height="100px" style="float: right; height: 70px">
    </h1>
@stop

@section('content')

    <ul class="list-group" style="height: auto;" id="principal">
        <li class="list-group-item">
            <h3>Vincent Van Gogh</h3>
            <p>
                Vincent Willem van Gogh fue un pintor neerlandés, uno de los principales exponentes del postimpresionismo.
                Pintó unos 900 cuadros y realizó más de 1600 dibujos. Una figura central en su vida fue su hermano menor Theo,
                marchante de arte en París, quien le prestó apoyo financiero de manera continua y desinteresada.
            </p>
            <a href="{{route('Vincent')}}"><button type="button" class="btn btn-info">Conocer más...</button></a>
        </li>
        <li class="list-group-item">
            <h3>Leonardo da Vinci</h3>
            <p>
                Leonardo da Vinci fue un polímata florentino del Renacimiento italiano. Fue a la vez pintor, anatomista,
                arquitecto, paleontólogo,  artista, botánico, científico, escritor, escultor, filósofo, ingeniero, inventor, músico, poeta y urbanista.
            </p>
            <a href="{{route('Leonardo')}}"><button type="button" class="btn btn-info">Conocer más...</button></a>
        </li>
        <li class="list-group-item">
            <h3>Claude Monet</h3>
            <p>
                Claude Monet fue un pintor francés, uno de los creadores del impresionismo. El término impresionismo deriva del título de su obra Impresión,
                sol naciente.Sus primeras obras, hasta la mitad de la década de 1860, son de estilo realista. Monet logró exponer algunas en el Salón de París.
            </p>
            <a href="{{route('Claude')}}"><button type="button" class="btn btn-info">Conocer más...</button></a>
        </li>
        <li class="list-group-item">
            <h3>John William Waterhouse</h3>
            <p>
                John William Waterhouse fue un pintor británico. Hijo de artistas, sus comienzos como pintor estuvieron influidos por el neoclasicismo victoriano.
                En la fase siguiente, se convierte en un pintor prerrafaelita. Más tarde estuvo atraído por el plenairismo de los impresionistas franceses.
            </p>
            <a href="{{route('John')}}"><button type="button" class="btn btn-info">Conocer más...</button></a>
        </li>
    </ul>

@stop
@section('footer')
    <div class="footer">
        <h5 id="derechos">Derechos reservados - Emiliano Loya Flores 5°E - {{date('Y')}}</h5>
    </div>

@stop