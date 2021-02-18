<?php

namespace App\Http\Controllers\ManageUser;

use App\Http\Controllers\Controller;
use App\Models\personnel;
use App\Models\prefix;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        // Gen New ID
        $tmpID = DB::select('SELECT LPAD((MAX(PERSONNEL_CODE)+1), 5, "0") AS PERSONNEL_CODE FROM QUOTA_T_PERSONNEL;');

        foreach ($tmpID as $ID) {
            $NewPersonnelID = $ID->PERSONNEL_CODE;
        }

        $personnel_res = new personnel([
            "PERSONNEL_CODE" => $NewPersonnelID ,
            "PERFIX_ID" => $request->get('PrefixName'),
            "NAME_TH" => $request->get('personnel_name_th'),
            "NAME_EN" => $request->get('personnel_name_en'),
            "UPDATE_USER_ID" => strval(Auth::user()->id)
        ]);
        $personnel_res->save();

        $personnel_login_res = new User([
            'id' => $NewPersonnelID,
            'name' => $request->get('personnel_name_th'),
            'email' => $request->get('personnel_email'),
            'password' => Hash::make($request->get('personnel_email')),
            'user_type' => $request->get('UserType')
        ]);
        $personnel_login_res->save();

        // Check result after create user
        $chk_person = personnel::all()->where('PERSONNEL_CODE' , $NewPersonnelID)->count();
        $chk_login = User::all()->where('id' , $NewPersonnelID)->count();

        if ($chk_person == 0 || $chk_login == 0) {
            DB::statement("DELETE FROM QUOTA_T_PERSONNEL WHERE PERSONNEL_CODE = ?" , $NewPersonnelID);
            DB::statement("DELETE FROM QUOTA_T_PERSON_LOGIN WHERE PERSONNEL_CODE = ?" , $NewPersonnelID);
            return redirect()->route('Manage-User.index')->with('error' , 'ไม่สามารถสร้างบัญชีผู้ใช้นี้ได้โปรดลองใหม่อีกครั้ง !');
        } else {
            return redirect()->route('Manage-User.index')->with('success' , 'สร้างบัญชีผู้ใช้งานเรียบร้อยแล้ว');
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
