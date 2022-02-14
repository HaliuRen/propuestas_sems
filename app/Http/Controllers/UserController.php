<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Perfil;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = User::all();
        $perfil = Perfil::all();
        return view('usuarios.index', compact('perfil'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        // $perfil = Perfil::all();
        return view('usuarios.show', compact('perfil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        // $perfil = Perfil::all();
        return view('usuarios.edit', compact('perfil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Perfil  $perfil)
    {
        
        // Validar entrada de datos
        $data = request()->validate([
            'rfc' => 'required',
            'nombre' => 'required',
            'amaterno' => 'required',
            'apaterno' => 'required',
            'sexo' => 'required',
            //tabla contacto
            'email' => 'required',
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

        
        $perfil->usuario->dcontacto->email = $data['email'];
        $perfil->usuario->dcontacto->telefono = $data['telefono'];
        $perfil->usuario->dcontacto->telefono_contacto = $data['telefono_contacto'];
        $perfil->usuario->dcontacto->estado = $data['estado'];
        $perfil->usuario->dcontacto->municipio = $data['municipio'];
        $perfil->usuario->dcontacto->colonia = $data['colonia'];
        $perfil->usuario->dcontacto->calle = $data['calle'];
        $perfil->usuario->dcontacto->numero = $data['numero'];
        $perfil->usuario->dcontacto->cp = $data['cp'];
        $perfil->usuario->dcontacto->fb = $data['fb'];
        $perfil->usuario->dcontacto->twitter = $data['twitter'];
        $perfil->usuario->dcontacto->save();

        // Eliminar url y name de $data
        unset($data['email']);
        unset($data['telefono']);
        unset($data['telefono_contacto']);
        unset($data['estado']);
        unset($data['municipio']);
        unset($data['colonia']);
        unset($data['calle']);
        unset($data['numero']);
        unset($data['cp']);
        unset($data['fb']);
        unset($data['twitter']);

        $perfil->update( array_merge(
            $data,
            $array_imagen ?? []
        ));

        // Redireccionar
        return redirect()->action('UserController@show',['perfil' => $perfil->id]);
        
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
