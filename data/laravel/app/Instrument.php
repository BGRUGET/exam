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
}
