<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- esto es para traer los estilos de animaciones css -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Asignacion Turno</title>


    <style>

        body {
            background: #f3f3f3;
        }

        .row {
            height: 100vh;
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
            max-height:100px ;
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
            color:#2E4A71;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }


    </style>
</head>
<body>
<form action="{{route('services.store')}}" method="post">
    @csrf
    @method('POST')

    <div class="container">

        <div class="row flex-column py-2 gap-2 j-content-between">


            <div class="col row justify-content-center">
                <h1 class=" text-center title animate__animated animate__zoomIn">Hospital de la Misericordia</h1>
            </div>

            <div class="col ">
                <div class="animate__animated animate__zoomInUp">
                    <button class="" type="submit" >
                        <h2>Solicitar informacion general <i class="fa fa-users f-right"></i></h2>
                    </button>
                </div>

            </div>

            <div class="col">
                <div>
                    <a class="btn-goback"
                        href="{{route('services.index')}}">
                        volver
                    </a>
                </div>

            </div>



        </div>
    </div>

</form>

</body>
</html>
