<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class add extends Controller
{
    public function store(Request $request) 
    {   
        $this->validate($request,[
            'idTest_add' => 'required',
            'Test_addcol' => 'required',
        ]);


    }
}
