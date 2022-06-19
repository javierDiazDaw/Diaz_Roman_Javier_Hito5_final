<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    protected $aulas;

    public function __construct(Aula $aulas)
    {
        $this->aulas = $aulas;
    }

    public function index()
    {
        $aulas = $this->aulas->obteneraulas();
        return view('mostrarAulasView', ['aulas' => $aulas]);
    }

    public function create()
    {
        return view('crearAulaView');
    }

    
    public function store(Request $request)
    {
        $aula = new Aula ($request->all());
        $aula->save();
        return redirect()->action([AulaController::class, 'index']);
    }


    public function destroy($aula)
    {
        $aula = Aula::find($aula);
        $aula->delete();
        return redirect()->action([AulaController::class, 'index']);
    }
}
