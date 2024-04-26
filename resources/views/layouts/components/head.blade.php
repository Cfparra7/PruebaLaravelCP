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
            max-height: 100vh;
        }

        .j-content-between {
            justify-content: flex-start;
        }

        button, a {
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

        p {
            font-size: small;
        }


    </style>
    <!--  script para los alert lindos -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>@yield('title')</title>
</head>
