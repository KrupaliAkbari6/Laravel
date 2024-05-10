<?php

namespace App\Http\Controllers;

use App\Models\visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    
     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //return $request->all();
        visit::create($request->all());
        return redirect()->route('hospital.show',$request->Patient_id);
    }

    
}
