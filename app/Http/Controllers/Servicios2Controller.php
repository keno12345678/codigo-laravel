<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Servicios2Controller extends Controller
{ 
        public function index()
     { 
         $servicios = [ 
          ['titulo' =>'servicios 01'],
          ['titulo' =>'servicios 02'],
          ['titulo' =>'servicios 03'],
          ['titulo' =>'servicios 04'],
          ['titulo' =>'servicios 05'], 
          ];
        return view('servicios' , compact('servicios'));
     } 



    /**
     * use Illuminate\Support\Facades\Auth;
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $servicios = [ 
            ['titulo' =>'servicios 01'],
            ['titulo' =>'servicios 02'],
            ['titulo' =>'servicios 03'],
            ['titulo' =>'servicios 04'],
            ['titulo' =>'servicios 05'], 
            ];
          return view('servicios' , compact('servicios'));
        
        
        
        
        
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $servicios = [ 
            ['titulo' =>'servicios 01'],
            ['titulo' =>'servicios 02'],
            ['titulo' =>'servicios 03'],
            ['titulo' =>'servicios 04'],
            ['titulo' =>'servicios 05'], 
            ];
          return view('servicios' , compact('servicios')); //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
        $servicios = [ 
            ['titulo' =>'servicios 01'],
            ['titulo' =>'servicios 02'],
            ['titulo' =>'servicios 03'],
            ['titulo' =>'servicios 04'],
            ['titulo' =>'servicios 05'], 
            ];
          return view('servicios' , compact('servicios'));  //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
        $servicios = [ 
            ['titulo' =>'servicios 01'],
            ['titulo' =>'servicios 02'],
            ['titulo' =>'servicios 03'],
            ['titulo' =>'servicios 04'],
            ['titulo' =>'servicios 05'], 
            ];
          return view('servicios' , compact('servicios')); //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
     
        $servicios = [ 
            ['titulo' =>'servicios 01'],
            ['titulo' =>'servicios 02'],
            ['titulo' =>'servicios 03'],
            ['titulo' =>'servicios 04'],
            ['titulo' =>'servicios 05'], 
            ];
          return view('servicios' , compact('servicios'));   //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      
        $servicios = [ 
            ['titulo' =>'servicios 01'],
            ['titulo' =>'servicios 02'],
            ['titulo' =>'servicios 03'],
            ['titulo' =>'servicios 04'],
            ['titulo' =>'servicios 05'], 
            ];
          return view('servicios' , compact('servicios'));  //
    }
}
