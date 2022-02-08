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
        // //obteniendo las categorias con modelo
        // // // $estados = Estados::all(['id', 'nombre']);
        // return view('perfiles.edit', compact('dcontacto'));
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
    //    // Validar entrada de datos
        // $data = request()->validate([
        //     //tabla contacto
        //     'email' => 'required',
        //     'telefono' => 'required',
        //     'telefono_contacto' => 'required',
        //     'estado' => 'required',
        //     'municipio' => 'required',
        //     'colonia' => 'required',
        //     'calle' => 'required',
        //     'numero' => 'required',
        //     'cp' => 'required',
        //     'fb' => 'required',
        //     'twitter' => 'required'
        // ]);

       
        // // Guardar información
        // // Asignar los datos


        // auth()->user()->perfil()->update( 
        //     $data,
            
        // );

        // // Redireccionar
        // return redirect()->action('PerfilController@show',['perfil' => Auth::user()->id]);
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
