<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicioss= Servicio::all();
        $servicioss= Servicio::orderBy('id', 'asc')->paginate(10);
        return view('servicios.index')->with('servicios', $servicioss);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios= servicio::all();
        $servicios= servicio::orderBy('id', 'asc')->paginate(10);
        return view('servicios.add', compact('tiposervicios','servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|string',
            'tipo_actividad' => 'required|string',
            'descripcion' => 'required|alpha_dash',
        ]);

        $servicio = new Servicio;
        $servicio->ano =  $request->input('nombre');
        $servicio->color = $request->input('tipo_actividad');
        $servicio->placas = $request->input('descripcion');
        $servicio->user_id = $request->user()->id;
        $servicio->save();
        session()->flash('store', 'Se almacenó un servicio...!');
        return redirect()->route('servicios.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Servicio::find($id);
        return view('servicios.view')->with(['servicio'=>$servicio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicio::find($id);
        return view('servicios.edit')->with('servicio',$servicio);
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
        $servicio = Servicio::find($id);
        $servicio->delete();
        session()->flash('delete', 'Se eliminó un servicio...!');
        return redirect()->route('servicios.create');
    }
}
