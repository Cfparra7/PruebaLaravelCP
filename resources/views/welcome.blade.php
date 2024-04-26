<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <title>Turnos</title>
    <style>

        body {
            background: #f3f3f3;
        }

        .row {
            height: 20vh;
        }

        .btn-goback {
            display: block;
            width: 100%;
            height: 100px;
            padding: 1rem;
            text-align: center;
            text-decoration: none;
            font-size: 2.5rem;
            background-color: #d32626;
            color: #000;
            border-radius: 20px;
            max-width: 70%;
            margin: 0 auto;
            font-weight: bold;
            color: #fff;
            letter-spacing: 2pt;
        }

        .col {
            max-height: 100px;
        }

        .j-content-between {
            justify-content: space-evenly;
        }

        button {
            display: block;
            width: 100%;
            height: 120px;
            padding: 1rem;
            text-align: center;
            text-decoration: none;
            font-size: 2.5rem;
            background-color: #6165ef;
            color: #fff;
            border-radius: 20px;
            max-width: 70%;
            margin: 0 auto;
            font-weight: bold;
            letter-spacing: 2pt;
            border: solid 1px #051551;
        }

        button:hover {
            padding: 1.2rem;
        }

        .title {
            color: #2E4A71;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }


    </style>
</head>
<body>
<div class="container">

    <div class="row flex-column py-2 gap-2 ">

        <div class="col row justify-content-center">
            <h1 class=" text-center title animate__animated animate__zoomIn">Hospital de la Misericordia</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col"><h4 class="mb-0">Módulo</h4></th>
                    <th scope="col"><h4 class="mb-0">Turno</h4></th>
                    <th scope="col"><h4 class="mb-0">Paciente</h4></th>
                </tr>
                </thead>
                <tbody>
                @foreach($service->users as $user)
                    @foreach($user->services as $servi)
                        @foreach($modules as $User_has_Service)
                            <tr>
                                <td>{{ $User_has_Service->module }}</td>
                                <td>{{ $User_has_Service->turn }}</td>
                                @if($User_has_Service->User)
                                    <td> {{ $User_has_Service->User->name }}</td>
                                @else
                                    <td> No paciente </td>
                                @endif
                            </tr>
                        @endforeach
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-6">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="https://encolombia.com/wp-content/uploads/2000/10/hospital-misericordia-pediatria.jpg"
                             class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img
                            src="https://www.formulamedica.com.co/wp-content/uploads/2022/11/Fundacion-Hospital-Pediatrico-La-Misericordia-HOMI-Formula-Medica.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

<script>

    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(function () {
            location.reload(true);
        }, 20000);
    })

</script>

</body>
</html>
