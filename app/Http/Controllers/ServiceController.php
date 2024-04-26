<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User_has_Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service:: all();
        return view('Services.index', compact('services'));
    }

    public function services_menu()
    {
        return view('services.menu');
    }
    public function services_cita()
    {
        return view('services.cita');
    }

    public function services_informacion()
    {
        return view('services.informacion');
    }

    //funcion que crea turno para informacio general
    public function store(Request $request)
    {
        // Obtener el último registro de la base de datos
        $lastEntry = User_has_Service::where('turn', 'like', 'IG%')->orderBy('id', 'desc')->first();

        // Obtener el turno del último registro y extraer el número de turno
        $lastTurn = $lastEntry ? intval(substr($lastEntry->turn, 2)) : 0;

        // Incrementar el número de turno en uno para calcular el siguiente turno
        $nextTurnNumber = $lastTurn + 1;

        // Concatenar "IG" con el número de turno incrementado para obtener el siguiente turno
        $nextTurnWithIG = 'IG' . $nextTurnNumber;


        $informacion = User_has_Service:: create([
            'id' => $request->id,
            'service_idservice' => 4,
            'date' => Carbon::now(),
            'module' => random_int(min: 1, max: 5),
            'turn' => $nextTurnWithIG,
        ]);
        Session::put('lastTurn', $nextTurnWithIG);

        return redirect()->route('services.index')->with('success', 'Mensaje de éxito');

    }



}
