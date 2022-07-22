<?php

namespace App\Http\Controllers;

use App\Models\spoiler;
use Illuminate\Http\Request;

class SpoilerController extends Controller
{
    public function obtenerSpoiler(){
        return spoiler::all();
    }

    public function ObtenerSpoilerporID($id){
        return spoiler::find($id);
    }

    public function Insertarcom(Request $request)
    {
        return spoiler::create([
            'idautor' => $request->idautor,
            'comunidad' => $request->comunidad,
            'titulo' => $request->titulo,
            'imagen' => $request->imagen,
            'descripcion' => $request->descripcion,
            'tendencia' => $request->tendencia
        ]);        
    }

    public function Insertar(Request $request)
    {
        return spoiler::create([
            'idautor' => $request->idautor,
            'titulo' => $request->titulo,
            'imagen' => $request->imagen,
            'descripcion' => $request->descripcion,
            'tendencia' => $request->tendencia
        ]);        
    }

    public function Actualizar(Request $request){
        return spoiler::where('Idspoiler',$request->Idspoiler)->update([
            'idautor' => $request->idautor,
            'comunidad' => $request->comunidad,
            'titulo' => $request->titulo,
            'imagen' => $request->imagen,
            'descripcion' => $request->descripcion,
            'tendencia' => $request->tendencia
        ]);
    }
/*
    public function like($id){
        $spoiler = spoiler::find($id);
        return spoiler::where('Idspoiler',$id)->update([
            'tendencia' => $spoiler->tendencia + 1
        ]);
    }*/

    public function eliminar($id){
        return spoiler::where('Idspoiler',$id)->delete();
    }
}

//php -S localhost:8000 -t public