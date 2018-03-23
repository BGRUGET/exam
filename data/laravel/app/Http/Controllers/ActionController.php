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

    public function deleteInstrumentAction(request $request)
    {
      Instrument::deleteInstrument($request);
      return redirect('/items');
    }

    public function updateInstrumentAction(request $request)
    {
      Instrument::updateInstrument($request);
      return redirect('/items');
    }
}
