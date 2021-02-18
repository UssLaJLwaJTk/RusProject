
@extends('Backend.ManageData.master')

@section('TitleMenu')
    การจัดการบัญชีผู้ใช้งาน
@endsection

@section('Title_Name')
    ข้อมูลบัญชีผู้ใช้งาน
@endsection

@section('TableHeader')
    <th>ลำดับที่</th>
    <th>ชื่อ - สกุล (ไทย)</th>
    <th>ชื่อ - สกุล (ไทย)</th>
    <th>ตำแหน่ง</th>
    <th>การกระทำ</th>
@endsection

@section('TableData')
    @php
    $CNT_ROW = 0;
    @endphp
    @foreach ($Personnel as $person)
        @php
        $CNT_ROW ++;
        @endphp
        <tr>
            <td>{{ $CNT_ROW }}</td>
            <td>{{ $person['FIRST_NAME_TH'] }} {{ $person['LAST_NAME_TH'] }}</td>
            <td>{{ $person['FIRST_NAME_EN'] }} {{ $person['LAST_NAME_EN'] }}</td>
            <td></td>
            <td>
                <div class="row row-cols-2">
                    <div class="col">
                        <i class="fas fa-edit fa-2x" style="color: white"></i>
                    </div>
                    <div class="col">
                        <i class="fas fa-trash-alt fa-2x"></i>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
@endsection

{{-- Setting Modal --}}

{{-- Add Data Modal --}}
@section('Add_GetModalHeader')
    ข้อมูลบัญชีผู้ใช้งาน
@endsection

@section('Add_FormAction')
    <form action="{{ url('Manage-User') }}" method="POST">
    @endsection

    @section('Add_ModalForm')
        <div class="form-group">
            <label for="PrefixName">
                คำนำหน้าชื่อ :
            </label>
            <select name="PrefixName" class="form-control Select2Class" style="width: 100%" required>
                <option value="" selected="" disabled></option>
                @foreach ($prefix as $pf)
                    <option value="{{ $pf["PREFIX_CODE"] }}">{{ $pf["PREFIX_NAME_TH"] }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="personnel_name_th">
                ชื่อ - สกุลผู้ใช้งาน (ไทย) : <br> <div style="color: red">เช่น (ทดสอบ ผู้ใช้งาน)</div>
            </label>
            <input type="text" class="form-control" name="personnel_name_th" required>
        </div>
        <div class="form-group">
            <label for="personnel_name_en">
                ชื่อ - สกุลผู้ใช้งาน (อังกฤษ) : <br> <div style="color: red">เช่น (ทดสอบ ผู้ใช้งาน)</div>
            </label>
            <input type="text" class="form-control" name="personnel_name_en" required>
        </div>
        <div class="form-group">
            <label for="personnel_email">
                อีเมล์ :
            </label>
            <input type="email" class="form-control" name="personnel_email" required>
        </div>
        <div class="form-group">
            <label for="UserType">
                ระดับผู้ใช้งาน :
            </label>
            <select name="UserType" class="form-control Select2Class" style="width: 100%" required>
                <option value="" selected="" disabled></option>
                <option value="0">ผู้ดูแลระบบ</option>
                <option value="1">ผู้ใช้งานทั่วไป</option>
            </select>
        </div>
    @endsection
    {{-- Add Data Modal --}}

    {{-- Update Data Modal --}}
    @section('upd_GetModalHeader')
        แก้ไขข้อมูลคำนำหน้า
    @endsection


    @if ($CheckUpdate == true)

        {{-- @foreach ($returnData as $item) --}}
            @section('upd_FormAction')
                {{-- <form
                    action="{{ action('App\Http\Controllers\RegistSystem\SystemData\ctl_manage_title@update', strval($item['TITLE_CODE'])) }}"
                    method="POST"> --}}
                @endsection

                @section('upd_ModalForm')

                @endsection
                {{-- Update Data Modal --}}
        {{-- @endforeach --}}

        @section('GetFunction')
            <script>
                $(function() {
                    $('#Md_updData').modal({
                        backdrop: "static"
                    }, 'show');
                });

            </script>
        @endsection

    @endif

    @section('ExternalJS')
        <script>

        </script>
    @endsection
