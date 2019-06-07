<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habilidad;
class HabilidadController extends Controller
{

    public function index()
    {
        $habilidades = Habilidad::get();
            return $habilidades;
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'habilidad' => 'required'
        ]);
        Habilidad::create($request ->all());
        return;
    }


    public function edit($id)
    {
        $habilidad = Habilidad::findOrfail($id);
        return $habilidad;
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'habilidad'=>'required'
        ]);
        Habilidad::find($id)->update($request->all());
        return;
    }

    public function destroy($id)
    {
        $habilidad = Habilidad::findOrfail($id);
        $habilidad->delete();
    }
}
