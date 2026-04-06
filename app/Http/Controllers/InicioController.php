<?php

namespace App\Http\Controllers;

use App\Models\Event;

class InicioController extends Controller
{
    public function index()
    {
        $proxBro = Event::where('venue', 'bro')
            ->active()
            ->upcoming()
            ->first();

        $proxAruba = Event::where('venue', 'playa_aruba')
            ->active()
            ->upcoming()
            ->first();

        return view('inicio.index', compact('proxBro', 'proxAruba'));
    }
}