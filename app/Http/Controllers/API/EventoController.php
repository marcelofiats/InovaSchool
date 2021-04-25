<?php

namespace App\Http\Controllers\api;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Http\Controllers\Controller;

class EventoController extends Controller
{
    public function loadEvent (){
        $event = Evento::all();
        return $event->toJson();
    }

    public function createEvent(EventRequest $request){
        $event = new Evento();
        $event->fill($request->all());
        $index = $event->save();
        if ($index) {
            return response()->json(true);
        }
    }

    public function updateEvent($id, Request $request){
        $event = Evento::find($id);
        $event->fill($request->all());
        $index = $event->save();
        if ($index) {
            return response()->json(true);
        }
    }
}
