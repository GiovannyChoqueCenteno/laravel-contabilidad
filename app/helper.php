<?php
function getProveedores(){
    error_log('Aciedo');
    return \App\Proveedor::where([['empresaId',\Illuminate\Support\Facades\Auth::user()->empresaId],['estado',0]])->get();
}
