@extends('layouts.master')
@section('title','John')

@section('header')
    <h1>John William Waterhouse
        <img class="logo" src="/images/LogoToledo.png" alt="Logo" height="100px" style="float: right; height: 70px">
    </h1>

@stop

@section('content')
    <ul class="list-group">
        <li class="list-group-item" style="height:auto" id="john">
            <h3>BIOGRAFIA</h3>
            <p>
                Nacido en París, el 14 de noviembre de 1840, pasa su infancia en Normandía, en la ciudad de El Havre, donde se instala junto a su familia con tan sólo cinco años. Poco a poco, el joven Monet logra desarrollar su pasión,
                empezando por la caricatura y, en 1859, estudiando pintura en la Academia Suiza de París, con el apoyo de su padre. Su marcha a Argelia al servicio militar en 1861 interrumpe sus estudios, sin embargo, continúa
                experimentando diferentes efectos artísticos. A su vuelta a París en 1862 tras una enfermedad que contrae (pleuresía), conoce al pintor suizo Charles Gleyre y trabaja junto a Alfred Sisley, Auguste Renoir y Frédéric Bazille,
                que se convertirán en buenos amigos. Claude Monet se enfrentará a dificultades económicas, ya que ningún Salón quiere exponer sus lienzos, a pesar del éxito de La Femme en robe verte, que representa a Camille Doncieux,
                la mujer que se convertirá en su esposa en 1870. En 1883, se traslada definitivamente a Giverny con su amiga Alice Hoschedé, los seis hijos que ella tuvo con Ernest Hoschedé y sus dos hijos propios; su último hijo no llegará a conocer a su madre,
                muerta en el parto en 1879. finalmente será en 1890 cuando decidirá comprar la casa en la que vivía en Giverny, y cuyos jardines le inspirarán para crear obras tan famosas hoy en día como la serie de los Nenúfares. El 5 de diciembre de 1926,
                Monet fallece en su casa de Giverny rodeado por su familia.
            </p>
        </li>
    </ul> <br>
    <main>
        <h3>Obras de John William Waterhouse</h3>
    </main>

    <table style="text-align: center;">
        <tr>
            <!-- La dama de shalott -->
            <td>
                <div class="card" style="width: 25rem;">
                    <img src="images/john/shalott.jpg" class="card-img-top" alt="La Noche Estrellada" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">LA DAMA DE SHALOTT</h5>
                    </div>
                </div>
            </td>
            <!-- The soul of the rose -->
            <td>
                <div class="card" style="width: 25rem;">
                    <img src="images/john/soul_rose.jpg" class="card-img-top" alt="Autorretrato" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">THE SOUL OF THE ROSE</h5>
                    </div>
                </div>
            </td>
            <!-- Boreas -->
            <td>
                <div class="card" style="width: 25rem;">
                    <img src="images/john/boreas.jpg" class="card-img-top" alt="El café de noche" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">BÓREAS</h5>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <!-- Miranda -->
            <td>
                <div class="card" style="width: 25rem;">
                    <img src="images/john/miranda.jpg" class="card-img-top" alt="Almendra en flor" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">MIRANDA</h5>
                    </div>
                </div>
            </td>
            <!-- Hilas y la ninfas -->
            <td>
                <div class="card" style="width: 25rem;">
                    <img src="images/john/hilas.jpg" class="card-img-top" alt="El sembrador" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">HILAS Y LAS NINFAS</h5>
                    </div>
                </div>
            </td>
        </tr>
    </table>

@stop

@section('footer')
    <div class="footer">
        <h5 id="derechos">Derechos reservados - Emiliano Loya Flores 5°E - {{date('Y')}}</h5>
    </div>
@stop