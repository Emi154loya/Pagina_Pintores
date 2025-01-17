@extends('layouts.master')
@section('title','Leonardo')

@section('header')
    <h1>Leonardo da Vinci
        <img class="logo" src="/images/LogoToledo.png" alt="Logo" height="100px" style="float: right; height: 70px">
    </h1>
@stop

@section('content')

    <ul class="list-group">
        <li class="list-group-item" style="height:auto" id="leonardo">
            <h3>BIOGRAFIA</h3>
            <p>
                Leonardo da Vinci nació el 15 de abril de 1452. El año 1466 empieza a practicar diversas actividades en el taller de un escultor llamado Andrea del Verrocchio. Allí empieza a pintar,
                a esculpir y a diseñar. Leonardo da Vinci se convirtió en pintor, escultor, ingeniero, inventor, músico, escritor y arquitecto, y se le consideraba un gran genio. Siempre tuvo mucho interés en los estudios
                anatómicos del cuerpo humano y podía dibujar los órganos humanos con mucho detalle. Fue aceptado en el gremio de pintores de Florencia en 1472 y abrió su propio taller de pintura y escultura, así que su fama
                comenzó a crecer y le encargaban muchos trabajos diferentes y muy importantes. Durante toda su vida estuvo al servicio de varios duques que le encargaban esculturas y pinturas de sus familias para enseñarlas
                en sus salones y sus jardines, pero lo que de verdad le interesaba era inventar nuevos vehículos, armas y objetos. Aunque siempre estuvo creando y construyendo nuevas obras, las luchas que hubo mientras vivía,
                tanto las luchas y rebeliones que hubo después de su muerte, fueron las culpables de que muchas de las cosas que creó fueran destruidas, quemadas o perdidas, incluyendo sus restos que los tiraron en un lugar
                desconocido después de una guerra. Murió el 2 de mayo de 1519 en Francia.
            </p>
        </li>
    </ul> <br>
    <main>
        <h3>Obras de Leonardo da Vinci</h3>
    </main>

    <table style="text-align: center;">
        <tr>
            <!-- La gioconda -->
            <td>
                <div class="card" style="width: 25rem;">
                    <img src="images/davinci/monalisa.jfif" class="card-img-top" alt="La Noche Estrellada" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">LA GIOCONDA</h5>
                    </div>
                </div>
            </td>
            <!-- la ultima cena -->
            <td>
                <div class="card" style="width: 30rem;">
                    <img src="images/davinci/cena.jpg" class="card-img-top" alt="Autorretrato" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">LA ULTIMA CENA</h5>
                    </div>
                </div>
            </td>
            <!-- autorretrato -->
            <td>
                <div class="card" style="width: 25rem;">
                    <img src="images/davinci/autorretrato.jpg" class="card-img-top" alt="El café de noche" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">AUTORRETRATO</h5>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <!-- salvatore mundi -->
            <td>
                <div class="card" style="width: 25rem;">
                    <img src="images/davinci/salvator.jpg" class="card-img-top" alt="El sembrador" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">SALVATORE MUNDI</h5>
                    </div>
                </div>
            </td>
            <!-- anunciacion -->
            <td style="width: 50%;">
                <div class="card" style="width: 30rem;">
                    <img src="images/davinci/anunciacion.jpg" class="card-img-top" alt="Almendra en flor" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">ANUNCIACION</h5>
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