<?php

namespace App\Http\Controllers;

use App\Models\QUOTA_T_COURSE;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class upcourse extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information = QUOTA_T_COURSE::all()->toArray();

        return view('Backend.Addinformation.AddCourse',compact('information'));
        
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
    public function store(Request $request)
    {
        $this->validate($request,[
            'code' => 'required',
            'courseTH' => 'required',
            'courseTH' => 'required',
            'president' => 'required',
        ]);

        // Create Blood_group_Code
        $CountBloodID = QUOTA_T_COURSE::max('COURSE_CODE');
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

            $upd = new QUOTA_T_COURSE([
                'COURSE_CODE' => $BloodGroupID,
                'COURE_NAMETH' => $request->get('courseTH'),
                'COURE_NAMEEN' => $request->get('courseEN'),
                'PRESIDENT' => $request->get('president'),
                'UPD_USER_ID' => Auth::user()->id,
            ]);

            $upd->save();

            return redirect()->route('AddCourse.index')->with('success','บันทึกข้อมูลเรียบร้อย');
        } catch (\Throwable $th) {
            return redirect()->route('AddCourse.index')->with('error','ไม่สามารถบันทึกข้อมูลได้ ('.$th.')');
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
        $information =QUOTA_T_COURSE::all()->toArray();
        $showdate = QUOTA_T_COURSE::all()->toArray();
        $check = true; 
        for ($i=0; $i < count($showdate) ; $i++) { 
            if ($showdate[$i]["COURSE_CODE"] == $id) {


                $return[] = $showdate[$i];
            break;
            }
        }

        return view('Backend.Addinformation.AddCourse' , compact('showdate','check','return','information'));
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
        $this->validate($request,[
            'courseTH' => 'required',
            'courseEN' => 'required',
            'president' => 'required',
        ]);

        DB::update("update QUOTA_T_NAME set
                    COURE_NAMETH = '" .$request->post('courseTH'). "' ,
                    COURE_NAMEEN = '" .$request->post('courseEN'). "' ,
                    PRESIDENT = '" .$request->post('president')."',
                    UPD_USER_ID = '" .Auth::user()->id."' ,
                    LAST_UPD_DATE = current_timestamp()
                    where COURSE_CODE = '$id'
                    ");

                    return redirect()->route('AddCourse.index')->with('success','แก้ไขข้อมูลเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            
            $delete = DB::Statement("delete from QUOTA_T_COURSE where COURSE_CODE = $id");

            return redirect()->route('AddCourse.index')->with('success','ลบข้อมูลเรียบร้อย');
        } catch (\Throwable $th) {
            return redirect()->route('AddCourse.index')->with('error','ไม่สามารถลบข้อมูลได้ ('.$th.')');
        }
    }
}
