<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Instrument;

class Instrument extends Model

{
  public static function createInstrument($request)
  {
    $instrument = new Instrument;
    $instrument->family = $request ->family;
    $instrument->type = $request ->type;
    $instrument->brand = $request ->brand;
    $instrument->name = $request ->name;
    $instrument->quantity = $request ->quantity;
    $instrument->save();
  }

  public static function deleteInstrument($request)
  {
    $instrument = Instrument::findOrFail($request->id);
    if($instrument->quantity == 1)
      {
      $instrument->delete();
      }
    else
    {
    $instrument->quantity = ($instrument->quantity-1);
    $instrument->save();
    }


  }
  public static function findInstrument($request)
  {
    $instrument = Instrument::findOrFail($request->id);
    return $instrument;
  }

  public static function updateInstrument($request)
  {
    $instrument = Instrument::findOrFail($request->id);
    $instrument->family = $request ->family;
    $instrument->type = $request ->type;
    $instrument->brand = $request ->brand;
    $instrument->name = $request ->name;
    $instrument->quantity = $request ->quantity;
    $instrument->save();

  }

}
