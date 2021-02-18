<?php

use App\Http\Controllers\ManageUser\ChangePassword;
use App\Http\Controllers\ManageUser\ctl_manage_user;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view('Test', '/test'); //ทดสอบ

//ส่วนของ layouts
Route::view('Master', '/layouts/master');


//ส่วนของ Frontend




// =============================================================================== \\
    // --------------------------- Frontend Routing ---------------------------- \\
    Route::view('MasterFrontend', '/Frontend/master'); //master หน้าบ้าน
    Route::view('/index', '/Frontend/index/master');
    Route::view('/relations', '/Frontend/relations/master');
    Route::view('/course', '/Frontend/course/master');
    Route::view('/re', '/Frontend/register/master');

    // --------------------------- Backend Routing ---------------------------- \\
    Route::view('Back-office', 'Backend.HomeLocalPage');
    Route::group(['middleware' => ['auth']], function () {
    // Route for manage user
        Route::resource('/update-password', ChangePassword::class);
        Route::resource('/Manage-User', ctl_manage_user::class);


        Route::resource('/SummaryReport', control_show_report::class);
    });
// =============================================================================== \\









// //ส่วนของ Backend
// Route::view('MasterBackend', '/Backend/master'); //master หลังบ้าน

// Route::view('/Addadmin', '/Backend/Addadmin/Addadmin'); // ส่วนของหน้าเพิ่มผู้ใช้งาน

// Route::view('/Managefrontend', '/Backend/Managefrontend/Managefrontend'); // ส่วนของหน้าประกาศ

// Route::view('/Studentlist', '/Backend/Studentlist/Studentlist'); // ส่วนของหน้ารายชื่อนักศึกษา

// // ส่วนของหน้าการเพิ่มข้อมูล
// Route::view('/AddCourse', '/Backend/Addinformation/AddCourse');  //ข้อมูลหลักสูตร

// Route::view('/AddLesson_plan', '/Backend/Addinformation/AddLesson_plan');  //ข้อมูลแผนการเรียน

// // Route::view('/AddName_prefix', '/Backend/Addinformation/AddName_prefix');  //ข้อมูลคำนำหน้าชื่อ
// Route::resource('AddName_prefix', upnameprefix::class);

// Route::view('/AddSchool', '/Backend/Addinformation/AddSchool'); //ข้อมูลสถานศึกษา

// Route::view('/AddStudy', '/Backend/Addinformation/AddStudy'); //ข้อมูลวิชาเอก

// Route::view('/AddGrade', '/Backend/Addinformation/AddGrade');  //ข้อมูลวุฒิการศึกษา

// Route::view('/AddPersonnel', '/Backend/Addinformation/AddPersonnel');  //ข้อมูลอาจารย์

// Route::view('/AddPublic', '/Backend/Addinformation/AddPublic'); //ข้อมูลประชาสัมพันธ์

// Route::view('/AddProvince', '/Backend/Addinformation/AddProvince'); //ข้อมูลจังหวัด

// Route::view('/AddDistrict', '/Backend/Addinformation/AddDistrict'); //ข้อมูลอำเภอ

// Route::view('/AddSub_district', '/Backend/Addinformation/AddSub_district'); //ข้อมูลตำบล

// Route::view('/Conclude', '/Backend/Conclude/Conclude'); // ส่วนของหน้าสรุปข้อมูล
