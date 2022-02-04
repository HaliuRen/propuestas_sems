<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PerfilController extends Controller
{
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
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        return view('perfiles.show', compact('perfil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        return view('perfiles.edit', compact('perfil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {

        // Validar entrada de datos
        $data = request()->validate([
            'rfc' => 'required',
            'nombre' => 'required',
            'amaterno' => 'required',
            'apaterno' => 'required',
            'sexo' => 'required'
        ]);

        // Si el usuario sube imagen
        if ($request['imagen']) {
            // obtener la ruta de la imagen
            $ruta_imagen = $request['imagen']->store('upload-perfiles','public');

            // Resize de la imagen
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(200,200);
            $img->save();

            // Crear un arreglo de imagen
            $array_imagen = ['imagen' => $ruta_imagen];
        } 

        // Guardar información
        // Asignar los datos
        auth()->user()->perfil()->update( array_merge(
            $data,
            $array_imagen ?? []
        ));

        // Redireccionar
        return redirect()->action('PerfilController@show',['perfil' => Auth::user()->id]);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        //
    }
}
