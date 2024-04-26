<!doctype html>
<html lang="en">
@include('layouts.components.head')
<body>
<div class="container">

    <div class="row flex-column py-2 gap-2 j-content-between">


        <div class="col row justify-content-center">
            <h1 class=" text-center title animate__animated animate__zoomIn">Hospital de la Misericordia</h1>
        </div>
        <!-- Contenido -->
        @yield('content')
        <!--Fin del Contenido -->

    </div>
</div>

</body>
</html>
