<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
   public function servicios () { 
      $servicios = [ 
        ['titulo' =>'servicios 01'],
        ['titulo' =>'servicios 02'],
        ['titulo' =>'servicios 03'],
        ['titulo' =>'servicios 04'],
        ['titulo' =>'servicios 05'], 
      ];
      return view('servicios' , compact('servicios'));
   }

   
}
