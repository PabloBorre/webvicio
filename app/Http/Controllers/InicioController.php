<?php

namespace App\Http\Controllers;

use App\Models\Event;

class InicioController extends Controller
{
    public function index()
    {
        // Coge los próximos eventos activos ordenados por fecha
        // y selecciona los dos primeros que sean de salas distintas
        $upcoming = Event::with('venue')
            ->active()
            ->upcoming()
            ->get();

        $primerEvento  = null;
        $segundoEvento = null;

        foreach ($upcoming as $event) {
            if (is_null($primerEvento)) {
                $primerEvento = $event;
                continue;
            }

            if ($event->venue_id !== $primerEvento->venue_id) {
                $segundoEvento = $event;
                break;
            }
        }

        // Compatibilidad con la vista: mantener los mismos nombres de variable
        $proxBro   = $primerEvento;
        $proxAruba = $segundoEvento;

        return view('inicio.index', compact('proxBro', 'proxAruba'));
    }
}