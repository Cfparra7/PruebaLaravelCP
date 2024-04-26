@extends('layouts.app')
@section('content')

        <form action="{{route('User_has_Service.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="col ">
                <div class="animate__animated animate__zoomInUp">
                    <button class="" type="submit">
                        <h2>Solicitar cita <i class="fa fa-users f-right"></i></h2>
                        <p class="">Aqui puede solicitar servicios como consultas generales, exámenes de
                            odontología,
                            pruebas de citología, y más.</p>
                    </button>
                </div>
            </div>
        </form>
        <form action="{{route('User_has_Service.saveFC')}}" method="post">
            @csrf
            @method('POST')
            <div class="col">
                <div class="animate__animated animate__zoomInUp">
                    <button class="" type="submit" style="width: 60rem;">
                        <h2>Facturacion <i class="fa fa-users f-right"></i></h2>
                        <p class="card-text">¡Gestiona tu facturación fácilmente! Solicita servicios de facturación,
                            consulta de
                            saldos, pagos pendientes y más.</p>
                    </button>
                </div>
            </div>
        </form>
        <form action="{{route('User_has_Service.saveAM')}}" method="post">
            @csrf
            @method('POST')
            <div class="col">
                <div class="animate__animated animate__zoomInUp">
                    <button class="" type="submit" style="width: 60rem;">
                        <h2>Autorizaciones <i class="fa fa-users f-right"></i></h2>
                        <p class="card-text"> Aqui gestionamos las solicitudes de autorización para que puedas acceder a
                            los
                            servicios de salud que necesitas sin contratiempos.</p>
                    </button>
                </div>
            </div>
        </form>
        <div class="col">
            <div>
                <a class="btn-goback"
                   href="{{route('services.index')}}">
                    volver
                </a>
            </div>

        </div>

@endsection
