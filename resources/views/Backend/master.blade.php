@extends('layouts/master')
@section('menulist')
    <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color :black" href="/Addadmin"> จัดการข้อมูลผู้ใช้งาน </a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color :black" href="/Managefrontend"> จัดการข้อมูลหน้าบ้าน </a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color :black" href="/Studentlist"> จัดการรายชื่อนักศึกษา </a></li>
        {{-- <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color :black"
                href="/Addinformation"> เพิ่มข้อมูล </a></li> --}}
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" style="color :black">การจัดการเพิ่มข้อมูล</a>
            <div class="dropdown-menu">
                <h5 class="dropdown-header">
                    <strong style="color:rgb(243, 240, 35)">
                        ข้อมูลใบสมัคร
                    </strong>
                </h5>
                <a class="dropdown-item" href="/AddCourse"> ข้อมูลหลักสูตร </a>
                <a class="dropdown-item" href="/AddLesson_plan"> ข้อมูลแผนการเรียน </a>
                <a class="dropdown-item" href="/AddName_prefix"> ข้อมูลคำนำหน้าชื่อ </a>
                <a class="dropdown-item" href="/AddSchool"> ข้อมูลสถานศึกษา </a>
                <a class="dropdown-item" href="/AddStudy"> ข้อมูลวิชาเอก </a>
                <a class="dropdown-item" href="/AddGrade"> ข้อมูลวุฒิการศึกษา </a>
                <a class="dropdown-item" href="/AddPersonnel"> ข้อมูลอาจารย์ </a>
                <a class="dropdown-item" href="/AddPublic"> ข้อมูลประชาสัมพันธ์ </a>
                <h5 class="dropdown-header">
                    <strong style="color:rgb(243, 240, 35)">
                        ข้อมูลที่อยู่
                    </strong>
                </h5>
                    <a class="dropdown-item" href="/AddProvince"> ข้อมูลจังหวัด </a>
                    <a class="dropdown-item" href="/AddDistrict"> ข้อมูลอำเภอ </a>
                    <a class="dropdown-item" href="/AddSub_district"> ข้อมูลตำบล </a>
            </div>
        </div>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color :black" href="/Conclude"> สรุปประจำปี </a>
        </li>
    </ul>

@endsection

@section('BodyZone')
    @yield('ModalZone')
    @yield('Getbody')

@endsection
