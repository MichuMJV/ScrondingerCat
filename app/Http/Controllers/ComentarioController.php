<?php

namespace App\Http\Controllers;

use App\Models\comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function obtenercomentario(){
        return comentario::all();
    }

    public function ObtenercomentarioporID($id){
        return comentario::find($id);//encontrar la manera de obtenerlo por id de spoiler
    }

    public function Insertar(Request $request)
    {
        return comentario::create([
            'autor' => $request->autor,
            'idspoilerfk' => $request->idspoilerfk,
            'texto' => $request->texto
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
        return comentario::where('Id',$id)->delete();
    }
}

//php -S localhost:8000 -t public