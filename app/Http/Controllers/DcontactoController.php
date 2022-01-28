<?php

namespace App\Http\Controllers;

use App\Models\Dcontacto;
use Illuminate\Http\Request;

class DcontactoController extends Controller
{
    //autenticar usuarios y poder accedera los demas metodos
    public function __construct()
    {
        //autenticacion
        // $this->middleware('auth', ['except' => 'show']);
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dcontacto  $dcontacto
     * @return \Illuminate\Http\Response
     */
    public function show(Dcontacto $dcontacto)
    {
        return view('perfiles.show', compact('dcontacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dcontacto  $dcontacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Dcontacto $dcontacto)
    {
        return view('perfiles.show', compact('dcontacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dcontacto  $dcontacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dcontacto $dcontacto)
    {
       //Validar
        $data = request()->validate([
            
            'telefono' => 'required',
            'telefono_contacto' => 'required',
            'estado' => 'required',
            'municipio' => 'required',
            'colonia' => 'required',
            'calle' => 'required',
            'numero' => 'required',
            'cp' => 'required',
            'fb' => 'required',
            'twitter' => 'required'
        ]);

        //Asignar datos
        
        auth()->user()->telefono = $data['telefono'];
        auth()->user()->telefono_contacto = $data['telefono_contacto'];
        auth()->user()->estado = $data['estado'];
        auth()->user()->colonia = $data['colonia'];
        auth()->user()->calle = $data['calle'];
        auth()->user()->numero = $data['numero'];
        auth()->user()->cp = $data['municipio'];
        auth()->user()->fb = $data['fb'];
        auth()->user()->twitter = $data['twitter'];
        auth()->user()->save();

        // Guardar informacion y asiganar contacto
        auth()->user()->dcontacto()->update(array_merge(
            $data
        ));

        return redirect()->action('PerfilController@show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dcontacto  $dcontacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dcontacto $dcontacto)
    {
        //
    }
}
