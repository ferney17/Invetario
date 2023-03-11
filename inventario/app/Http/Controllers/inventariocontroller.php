<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventario;

class inventariocontroller extends Controller
{
    public function listar_inventario(){
        $inventarios = inventario::all();
        return view('user.listar_inventario', compact('inventarios'));
    }
    public function destroy($id){
        inventario::find($id)->delete();
        return redirect()->route('listar_inventario');
    }
}

