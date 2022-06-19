<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    protected $usuarios;

    public function __construct(User $usuarios)
    {
        $this->usuarios = $usuarios;
    }
    
    public function index()
    {
        $usuarios = $this->usuarios->obtenerUsuarios();
        
        return view('mostrarUsuariosView', ['usuarios' => $usuarios]);
    }

    public function incidenciaPerfil($idUsuario)
    {
        $usuarios = $this->usuarios->obtenerIncidencias($idUsuario);
        return view('editarPerfilView', ['usuarios' => $usuarios]);
    }

    
    public function edit($idUsuario)
    {
        $usuario = $this->usuarios->obtenerUnUsuario($idUsuario);
        return view('editarPerfilView', ['usuario' => $usuario]);
    }

    
    public function update(Request $request, $idUsuario)
    {
        $usuario = User::find($idUsuario);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect()->action([IncidenciaController::class, 'index']);
    }

    public function destroy($idUsuario)
    {
        $usuario = User::find($idUsuario);
        $usuario->delete();
        return redirect()->action([UsuarioController::class, 'index']);
    }

}

