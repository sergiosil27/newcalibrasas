<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermisosController extends Controller
{
    public function index(){
        $permisos=permission::select('id','name')->orderBy('id','asc')->get();
        return view('permisos')->with('permisos',$permisos);
        
        #return Livewire::render('Seguridad/Permisos',compact('permisos'));
    }
}
