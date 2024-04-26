<?php

namespace App\Http\Controllers;

use App\Models\User_has_Service;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class User_has_ServiceController extends Controller
{
    public function index()
    {
        $user = User_has_Service:: all();
        $service = Service:: find(1);
        $modules = User_has_Service::orderBy('id', 'desc')->take(7)->get();

        return view('welcome', compact('user', 'service', 'modules'));

    }
    //gurda solicitud de cita
    public function store(Request $request)
    {

        $lastSCEntry = User_has_Service::where('turn', 'like', 'SC%')->orderBy('id', 'desc')->first();

        $lastSCTurn= $lastSCEntry  ? intval(substr($lastSCEntry ->turn, 2)) : 0;

        $nextTurnNumber = $lastSCTurn + 1;

        $nextTurn = 'SC' . $nextTurnNumber;


        $informacion = User_has_Service::create([
            'id' => $request->id,
            'service_idservice' => 1,
            'date' => Carbon::now(),
            'module' => random_int(min: 1, max: 5),
            'turn' => $nextTurn,
        ]);

        Session::put('lastTurn', $nextTurn);


        return redirect()->route('services.index')->with('success', 'Mensaje de éxito');
    }
    //gurda facturacion
    public function saveFC(Request $request)
    {

        $lastFCEntry = User_has_Service::where('turn', 'like', 'FC%')->orderBy('id', 'desc')->first();

        $lastFCTurn= $lastFCEntry  ? intval(substr($lastFCEntry ->turn, 2)) : 0;

        $nextTurnNumber = $lastFCTurn + 1;

        $nextTurn = 'FC' . $nextTurnNumber;


        $informacion = User_has_Service::create([
            'id' => $request->id,
            'service_idservice' => 2,
            'date' => Carbon::now(),
            'module' => random_int(min: 1, max: 5),
            'turn' => $nextTurn,
        ]);

        Session::put('lastTurn', $nextTurn);


        return redirect()->route('services.index')->with('success', 'Mensaje de éxito');
    }
    //gurda Autroizaciones
    public function saveAM(Request $request)
    {

        $lastAMEntry = User_has_Service::where('turn', 'like', 'AM%')->orderBy('id', 'desc')->first();

        $lastAMTurn= $lastAMEntry  ? intval(substr($lastAMEntry ->turn, 2)) : 0;

        $nextTurnNumber = $lastAMTurn + 1;

        $nextTurn = 'AM' . $nextTurnNumber;


        $informacion = User_has_Service::create([
            'id' => $request->id,
            'user_iduser' => random_int(min: 0, max: 7),
            'service_idservice' => 3,
            'date' => Carbon::now(),
            'module' => random_int(min: 1, max: 5),
            'turn' => $nextTurn,
        ]);

        Session::put('lastTurn', $nextTurn);


        return redirect()->route('services.index')->with('success', 'Mensaje de éxito');
    }
}
