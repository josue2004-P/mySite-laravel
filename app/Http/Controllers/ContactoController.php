<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactoModel;
use Carbon\Carbon;

class ContactoController extends Controller
{
    public function index(){
        return view('contacto');
    }

    public function store(Request $request)
    {
        ContactoModel::create([
            'titulo' => $request->input('titulo'),
            'correo' => $request->input('correo'),
            'mensaje' => $request->input('mensaje'),
            'created_at' => Carbon::now('America/Mexico_City'),
            'updated_at' => Carbon::now('America/Mexico_City'),
        ]);
    
        return redirect('/contacto')
                ->with('success', 'Reservación creada exitosamente.');
    }
    
}
