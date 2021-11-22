<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactos;

class AgendaController extends Controller
{
    public function index(){
        $data['contactos'] = Contactos::all();
        return view('agenda',$data);
    }

    public function guardar(Request $request){
        $method = $request->method();

        if($method == 'POST'){
            if(isset($request->id)){
                $contacto = Contactos::find($request->id);
            }else{
                $contacto = new Contactos();
            }


            $contacto->nombre = $request->nombre;
            $contacto->telefono = $request->telefono;
            $contacto->direccion = $request->direccion;

            $contacto->save();

            return redirect('agenda');
        }else{
            return view('guardar');
        }

    }
}
