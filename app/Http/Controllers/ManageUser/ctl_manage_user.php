<?php

namespace App\Http\Controllers\ManageUser;

use App\Http\Controllers\Controller;
use App\Models\personnel;
use App\Models\prefix;
use Illuminate\Http\Request;

class ctl_manage_user extends Controller
{
    public function index()
    {
        $Personnel = personnel::all()->toArray();
        $CheckUpdate = false;
        $prefix = prefix::all()->toArray();

        return view('Backend.ManageData.v_manage_user' , compact(
            'Personnel' ,
            'CheckUpdate' ,
            'prefix'
        ));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
