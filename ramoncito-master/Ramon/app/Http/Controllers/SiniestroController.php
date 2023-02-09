<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SiniestroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ramon');
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
        $request->validate([
            'fecha'=>'required',
            'hora'=> 'required',
            'calle' => 'required',
            'numero' => 'required',
            'tipo_vialidad' => 'required',
            'colonia' => 'required',
            'municipio' => 'required',
            'tipo_vehiculo' => 'required',
            'tipo_siniestro' => 'required',
        ]);

        $siniestro = new User([
            'fecha'=> $request->get('fecha'),
            'hora'=> $request->get('hora'),
            'calle_numero' => $request->get('calle') . $request->get('numero'),
            'tipo_vialidad' => $request->get('tipo_vialidad'),
            'colonia' => $request->get('colonia'),
            'municipio' => $request->get('municipio'),
            'tipo_vehiculo' => $request->get('tipo_vehiculo'),
            'tipo_siniestro' => $request->get('tipo_siniestro'),
        ]);
        
        $siniestro->save();
        
        return view('ramon');
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
