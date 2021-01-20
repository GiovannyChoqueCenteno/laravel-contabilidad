<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProveedorController extends Controller
{
    //
    public  function  index(){
        return view('proveedores.lista');
    }
    public function create(Request $request){
        $this->validate($request,[
            'nombre' =>'required',
            'apellido' => 'required',
            'ci' => 'required',
            'empresa' => 'required'
        ]);
        $request['empresaId'] = Auth::user()->id;
        $request['estado'] = 0;
            Proveedor::create($request->all());
        return redirect()->back();
    }
    public  function registrar(){
        return view('proveedores.crear');
    }

    public function update(Request $request,$id){

        Proveedor::where('id',$id)->update($request->all());
        return redirect()->back();
    }
    public function delete($id){
        Proveedor::where('id',$id)->update(['estado'=>1]);
        return redirect()->back();
    }

}
