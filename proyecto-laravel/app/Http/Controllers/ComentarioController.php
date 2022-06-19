<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;


class ComentarioController extends Controller
{
    protected $comentarios;
   
   

    public function __construct(Comentario $comentarios){
        $this->comentarios = $comentarios;       
    }

    public function index(){
        $comentarios = $this->comentarios->obtenerComentarios();
        return view('mostrarComentariosView', ['comentarios' => $comentarios]);
    }

    public function show($idIncidencia)
    {
        $comentarios = $this->comentarios->obtenerComentariosId($idIncidencia);
        return view('comentariosIdView', ['comentario' => $comentarios]);
    }

    public function edit($idIncidencia)
    {
        $comentario = $this->comentarios->obtenerUncomentario($idIncidencia);
        return view('editarcomentarioView', ['comentario' => $comentario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $isbn)
    {
        $libro = Comentario::find($isbn);
        $libro->fill($request->all());
        $libro->save();
        return redirect()->action([LibroController::class, 'index']);
    }

    public function destroy($idComentario)
    {
        $Comentario = Comentario::find($idComentario);
        $Comentario->delete();
        return redirect()->action([ComentarioController::class, 'index']);
    }

}


