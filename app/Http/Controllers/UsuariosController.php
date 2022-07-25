<?php

namespace App\Http\Controllers;
use App\Models\usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function obtenerusuarios(){
        return usuario::all();
    }

    public function ObtenerUsuarioporID($id){
        return usuario::find($id);
    }

    public function Insertar(Request $request){
        $user=usuario::create([
            'ID_name' => $request->ID_name,
            'User_name' => $request->User_name,
            'correo' => $request->correo,
            'contrasena' => $request->contrasena,
            'foto' => $request->foto
        ]);
        echo response()->json($user,200);
        return response($user,200);
    }

    public function Actualizar(Request $request){
        return usuario::where('id',$request->id)->update([
            'ID_name' => $request->ID_name,
            'User_name' => $request->User_name,
            'correo' => $request->correo,
            'contrasena' => $request->contrasena,
            'foto' => $request->foto
        ]);
    }

    public function eliminar($id){
        return usuario::where('id',$id)->delete();
    }
}

//php -S localhost:8000 -t public