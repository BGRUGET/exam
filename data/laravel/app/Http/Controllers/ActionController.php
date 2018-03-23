<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument as Instrument;

class ActionController extends Controller
{
    public function insertInstrumentAction(request $request)
    {
    Instrument::createInstrument($request);
    return redirect('/items');
    }
}
