<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index() {
        $events = Event::where('date', '>=', Carbon::now())->get();
        return response()->json($events, 200);
    }
}
