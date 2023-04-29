<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RentalRequest;
use App\Models\Rental;
use App\Models\Camera;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rents = Rental::with('camera','client')->get();
        $cameras = Camera::all();
        $clients = Client::all();
        if(count($rents) == 0) {
            return response()->json(['Mensaje' => 'No hay ninguna camara alquilada'], 404);
        }

        // return response()->json($rents);
        return response()->json([
            'rents' => $rents,
            'cameras' => $cameras,
            'clients' => $clients
        ]);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $camera = Camera::find($request->camera_id);
        
        // Comprobamos si la cámara está disponible
        //1 disponible, 0 alquilada, 2 en reparación
        if ($camera->status != 1 || $camera->status == 0 || $camera->status == 2) {
            return response()->json(['message' => 'La cámara no está disponible para alquilar'], 400);
        }
        
        // // Recuperamos el cliente
        $rental = Rental::find($request->client_id);
        
        // Comprobamos si el cliente ya tiene una cámara alquilada
        if ($rental != null) {
            return response()->json(['message' => 'El cliente ya tiene una cámara alquilada'], 400);
        }

        //estado 1 en curso, 0 retrasado
        $rent = new Rental();
        $rent->camera_id = $request->camera_id;
        $rent->client_id = $request->client_id;
        $rent->start_date = Carbon::now();
        $rent->end_Date = Carbon::now()->addDays(7);
        $rent->status = 1;
        $rent->save();

        // Actualizamos el estado de la cámara
        $camera->status = 0;
        $camera->update();

        return response()->json(['message' => 'La cámara se ha alquilado correctamente'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
