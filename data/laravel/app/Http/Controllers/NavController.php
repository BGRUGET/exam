<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument as Instrument;

class NavController extends Controller
{

    public function show() // j'aurais pu utiliser une public static function dans instrument ( ce que j'ai fait pour ajouter delete et update)
    {
      $instruments = Instrument::all();
      return view('items',['instruments'=>$instruments]);
    }

    public function insertInstrument()
     {
          return view('insertInstrument');
      }
      public function updateInstrument(request $request)
       {
            return view('updateInstrument',['instrument'=>Instrument::findInstrument($request)]);
        }
}
