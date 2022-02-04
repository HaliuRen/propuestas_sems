<?php

namespace App\Http\Controllers;

use App\Models\Estados;
use App\Models\Dcontacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //obteniendo las categorias con modelo
        $estados = Estados::all(['id', 'nombre']);
        return view('perfiles.edit', compact('estados', 'dcontacto'));
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
        $data = $request()->validate([
            
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
        $dcontacto->telefono = $data['telefono'];
        $dcontacto->telefono_contacto = $data['telefono_contacto'];
        $dcontacto->estado_id = $data['estado'];
        $dcontacto->municipio = $data['municipio'];
        $dcontacto->colonia = $data['colonia'];
        $dcontacto->calle = $data['calle'];
        $dcontacto->numero = $data['numero'];
        $dcontacto->cp = $data['cp'];
        $dcontacto->fb = $data['fb'];
        $dcontacto->twitter = $data['twitter'];


        // Guardar informacion y asiganar contacto
        auth()->user()->dcontacto()->update(
            $data
        );

        $dcontacto->save();

        return redirect()->action('PerfilController@show',['perfil' => Auth::user()->id]);
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
