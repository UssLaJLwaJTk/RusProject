<?php

namespace App\Http\Controllers;

use App\Models\QUOTA_T_NAME_PREFIX;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class upnameprefix extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information = QUOTA_T_NAME_PREFIX::all()->toArray();

        return view('Backend.Addinformation.AddName_prefix',compact('information'));
        
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //เพิ่มข้อมูล
    {
        $this->validate($request,[
            'nameTH' => 'required',
            'nameEN' => 'required',
        ]);

        // Create Blood_group_Code
        $CountBloodID = QUOTA_T_NAME_PREFIX::max('NAME_PREFIX_CODE');
        $CompareCount = intval($CountBloodID + 1);

        if ($CompareCount < 10) {
            $BloodGroupID = strval("0000$CompareCount");
        } elseif ($CompareCount < 100) {
            $BloodGroupID = strval("000$CompareCount");
        } elseif ($CompareCount < 1000) {
            $BloodGroupID = strval("00$CompareCount");
        } elseif ($CompareCount < 10000) {
            $BloodGroupID = strval("0$CompareCount");
        } else {
            $BloodGroupID = strval($CompareCount);
        }

        try {

            $upd = new QUOTA_T_NAME_PREFIX([
                'NAME_PREFIX_CODE' => $BloodGroupID,
                'NAME_PREFIX_TH' => $request->get('nameTH'),
                'NAME_PREFIX_EN' => $request->get('nameEN'),
                'UPD_USER_ID' => Auth::user()->id,
            ]);

            $upd->save();

            return redirect()->route('AddName_prefix.index')->with('success','บันทึกข้อมูลเรียบร้อย');
        } catch (\Throwable $th) {
            return redirect()->route('AddName_prefix.index')->with('error','ไม่สามารถบันทึกข้อมูลได้ ('.$th.')');
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $information =QUOTA_T_NAME_PREFIX::all()->toArray();
        $showdate = QUOTA_T_NAME_PREFIX::all()->toArray();
        $check = true; 
        for ($i=0; $i < count($showdate) ; $i++) { 
            if ($showdate[$i]["NAME_PREFIX_CODE"] == $id) {


                $return[] = $showdate[$i];
            break;
            }
        }

        return view('Backend.Addinformation.AddName_prefix' , compact('showdate','check','return','information'));
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
    public function update(Request $request, $id) //แก้ไขข้อมูล
    {
        $this->validate($request,[
            'upnameTH' => 'required',
            'upnameEN' => 'required',
        ]);

        DB::update("update QUOTA_T_NAME set
                    NAME_PREFIX_TH = '" .$request->post('upnameTH'). "' ,
                    NAME_PREFIX_EN = '" .$request->post('upnameEN'). "' ,
                    UPD_USER_ID = '" .Auth::user()->id."' ,
                    LAST_UPD_DATE = current_timestamp()
                    where NAME_PREFIX_CODE = '$id'
                    ");

                    return redirect()->route('AddName_prefix.index')->with('success','แก้ไขข้อมูลเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //ลบข้อมูล
    {
        try {
            
            $delete = DB::Statement("delete from QUOTA_T_NAME_PREFIX where NAME_PREFIX_CODE = $id");

            return redirect()->route('AddName_prefix.index')->with('success','ลบข้อมูลเรียบร้อย');
        } catch (\Throwable $th) {
            return redirect()->route('AddName_prefix.index')->with('error','ไม่สามารถลบข้อมูลได้ ('.$th.')');
        }
    }
}
