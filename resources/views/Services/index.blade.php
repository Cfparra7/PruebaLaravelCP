@extends('layouts.app')
@section('content')
    <div class="col">
        <div class="animate__animated animate__zoomInUp">
            <a class=" " style="width: 60rem; " href="services.menu">
                <h2 class="">Solicitud de citas, Facturacion, Autorizaciones <i class="fa fa-users f-right"></i>
                </h2>
            </a>
        </div>
    </div>

    <div class="col">
        <div class="animate__animated animate__zoomInUp">
            <a class=" " href="services.informacion">
                <h2>Informacion general <i class="fa fa-users f-right"></i></h2>
            </a>
        </div>
    </div>



    <script>
        // Esperar a que el documento esté listo
        document.addEventListener("DOMContentLoaded", function () {
            // Obtener el valor de la variable de sesión
            var lastTurn = "{{ Session::get('lastTurn') }}";

            // Mostrar la alerta si el valor de lastTurn no está vacío
            if (lastTurn) {
                // Mostrar la alerta

                Swal.fire({
                    title: "Se ha generado su turno " + lastTurn,
                    icon: "isConfirmed"
                });
                // alert(' ' + lastTurn);
            }
        });
    </script>

@endsection
