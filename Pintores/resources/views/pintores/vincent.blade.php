@extends('layouts.master')
@section('title','Vincent')

@section('header')
    <h1>Vincent Van Gogh
        <img class="logo" src="/images/LogoToledo.png" alt="Logo" height="100px" style="float: right; height: 70px">
    </h1>
@stop

@section('content')
    <ul class="list-group">
        <li class="list-group-item" style="height:auto" id="vangogh">
            <h3>BIOGRAFIA</h3>
            <p>
                Van Gogh nació en 1853 y creció en Holanda. Fue criado en una familia religiosa con su padre siendo un ministro. Cuando terminó sus estudios, Vincent siguió la profesión de su tío y se convirtió en un
                comerciante de arte aprendiendo el comercio en Holanda y luego trabajando en Inglaterra y Francia. Vincent tuvo éxito e inicialmente fue contento con su trabajo. Sin embargo, pronto se cansó de la empresa de arte,
                especialmente en París, y perdió interés en el comercio. Después de regresar a casa, Vincent comenzó estudiar teología. Si bien muy apasionado y entusiastico, él falló los exámenes para entrar en un par de programas.
                En 1880, a 27 años de edad, Van Gogh entró en el Académie Royale des Beaux-Arts en Bruselas, Bélgica. Al año siguiente, Vincent se trasladó a París donde su arte comenzó a tomar el estilo que le haría famoso.
                Uno de los sueños de Van Gogh como artista fue la de iniciar una colonia de artistas en Arles, en el sur de Francia. Vincent se trasladó a Arles donde fue acompañado por Gauguin. Una vez allí, Van Gogh entró en el período
                más productivo y creativo de su vida a pintar su famoso Girasoles. Sin embargo, también fue una época de gran agitación por Vincent comenzando un período de estancia en el hospital para enfermedades mentales y deterioro físico.
                Después de tan sólo diez años de pintura y producir unas 900 pinturas, Vincent van Gogh se quitó la vida en 1890.
            </p>
        </li>
    </ul> <br>
    <main>
        <h3>Obras de Vincent van Gogh</h3>
    </main>

    <table style="text-align: center;">
        <tr>
            <!-- La noche estrellada -->
            <td>
                <div class="card" style="width: 25rem;">
                    <img src="images/vangogh/noche_estrellada.jpg" class="card-img-top" alt="La Noche Estrellada" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">LA NOCHE ESTRELLADA</h5>
                    </div>
                </div>
            </td>
            <!-- Autorretrato -->
            <td>
                <div class="card" style="width: 25rem;">
                    <img src="images/vangogh/autorretrato.jpg" class="card-img-top" alt="Autorretrato" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">AUTORRETRATO</h5>
                    </div>
                </div>
            </td>
            <!-- el cafe de noche -->
            <td>
                <div class="card" style="width: 25rem;">
                    <img src="images/vangogh/cafe_noche.jpg" class="card-img-top" alt="El café de noche" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">EL CAFE DE NOCHE</h5>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <!-- almendra en flor -->
            <td>
                <div class="card" style="width: 25rem;">
                    <img src="images/vangogh/almendra.jpg" class="card-img-top" alt="Almendra en flor" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">ALMENDRA EN FLOR</h5>
                    </div>
                </div>
            </td>
            <!-- el sembrador -->
            <td>
                <div class="card" style="width: 25rem;">
                    <img src="images/vangogh/sembrador.jpg" class="card-img-top" alt="El sembrador" height="450px" width="400px">
                    <div class="card-body">
                        <h5 class="card-title">EL SEMBRADOR</h5>
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
