<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument as Instrument;

class NavController extends Controller
{

    public function show()
    {
      $instruments = Instrument::all();
      return view('items',['instruments'=>$instruments]);
    }

    public function insertInstrument()
     {
          return view('insertInstrument');
      }
}
