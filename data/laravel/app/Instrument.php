<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Instrument;

class Instrument extends Model

{
  static public function getInstruments()
  {
    $instruments = Instrument::all();
    return $instruments;
  }
}
