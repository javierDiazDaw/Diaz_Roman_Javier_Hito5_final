<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidencia;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;

class IncidenciaController extends Controller
{
    protected $incidencias;   

    public function __construct(Incidencia $incidencias)
    {
        $this->incidencias = $incidencias;       
    }
    
    public function index(Request $request)
    {
        $incidencias = $this->incidencias->obtenerIncidencias();
        return view('mostrarIncidenciasView', ['incidencias' => $incidencias]);

        $buscar= $request->get('buscarpor');

        $tipo = $request->get('tipo');

        $incidencia = Incidencia::buscarpor($tipo, $buscar)->paginate(5);
        
        return view('mostrarIncidenciasView', compact('Incidencia'));

    }

    
    public function create()
    {
        return view('crearIncidenciaView');
    }

    
    public function store(Request $request)
    {
        $incidencia = new Incidencia ($request->all());
        $incidencia->save();

        $data = [
            "titulo"=>$request->input("titulo"),
            "descripcion"=>$request->input("descripcion"),
            "aula"=>$request->input("aula"),
            "estado"=>$request->input("estado"),
            "fechaCreacion"=>$request->input("fechaCreacion"),
            "fechaModificacion"=>$request->input("fechaModificacion"),
            "fechaCierre"=>$request->input("fechaCierre"),
       ];
  
        //$data=$request->all();
        Mail::to(session()->get('usuario')['email'])->send(new NotifyMail($data));

        return redirect()->action([IncidenciaController::class, 'index']);
    }

    public function incidenciaPerfil($idUsuario)
    {
        $incidencia = $this->incidencias->obtenerIncidenciasPorUsuario($idUsuario);
        return view('incidenciaPerfilView', ['incidencia' => $incidencia]);
    }

    public function edit($idIncidencia)
    {
        $incidencia = $this->incidencias->obtenerUnaIncidencia($idIncidencia);
        return view('editarIncidenciaView', ['incidencia' => $incidencia]);
    }
    
    public function update(Request $request, $idIncidencia)
    {
        $incidencia = Incidencia::find($idIncidencia);
        $incidencia->fill($request->all());
        $incidencia->save();
        return redirect()->action([IncidenciaController::class, 'index']);
    }

    
    public function destroy($idIncidencia)
    {
        $incidencia = Incidencia::find($idIncidencia);
        $incidencia->delete();
        return redirect()->action([IncidenciaController::class, 'index']);
    }

}


 

