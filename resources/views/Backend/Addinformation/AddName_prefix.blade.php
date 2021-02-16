@extends('Backend/Addinformation/master')
@section('TitleTab', 'ระบบโควต้า')

@section('Getbody-page')

@section('Name_Header')
    <h5> ข้อมูลคำนำหน้าชื่อ </h5>
@endsection

@section('Add_FromAction')
    <form action="{{ url('AddName_prefix') }}" method="POST">
    @endsection

    @section('Body_card')
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title text-center"> ข้อมูลคำนำหน้าชื่อ </h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body text-left">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div style="line-height: 25pt"> ชื่อคำนำหน้า : </div>
                    </div>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" placeholder=" ชื่อคำนำหน้าภาษาไทย " name="nameTH">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-2">
                        <div style="line-height: 25pt"> ชื่อคำนำ : </div>
                    </div>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" placeholder=" ชื่อคำนำหน้าภาษาอังกฤษ " name="nameEN">
                    </div>
                </div>
                <br>
            </div>
        </div>
    @endsection

    @section('Table_Header')
        <th>ลำดับ</th>
        <th>ชื่อคำนำหน้า (ภาษาไทย)</th>
        <th>ชื่อคำนำหน้า (ภาษาอังกฤษ)</th>
        <th>แก้ไข</th>
        <th>ลบข้อมูล<th>
    @endsection

    @section('Table_Data')
        @php
            $tum = 0;
        @endphp
        @foreach ($information as $item)
            @php
                $tum++;
            @endphp
            <tr>
                <td> {{ $tum }} </td>
                <td> {{ $item['NAME_PREFIX_TH'] }} </td>
                <td> {{ $item['NAME_PREFIX_EN'] }} </td>
                <td> <a href="{{ action('App\Http\Controllers\upnameprefix@show', $item['NAME_PREFIX_CODE']) }}"><button
                    type="button" class="btn-sm btn-warning" data-toggle="modal" data-target="#myModal2">
                    แก้ไข
                </button> </a> </td>
                <td>          
                    <form
                        action="{{ action('App\Http\Controllers\upnameprefix@destroy', strval($item['NAME_PREFIX_CODE'])) }}"
                        method="post" class="delete_form">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn-sm btn-danger">
                            ลบ
                        </button>
                    </form>
                </td>
                
            </tr>
        @endforeach
    @endsection

    @section('ModalForm')
        <!-- Modal body -->
     <div class="modal-body text-left">
        <div class="container">

            <div class="row">
                <div class="col-sm-4">
                    <div style="line-height: 25pt"> ชื่อคำนำหน้า
                        : </div>
                </div>
                <div class="col-sm-6">
                    <input class="form-control" type="text" placeholder=" ชื่อคำนำหน้าภาษาไทย "
                        name="upnameTH">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-sm-4">
                    <div style="line-height: 25pt"> ชื่อคำนำหน้า
                        : </div>
                </div>
                <div class="col-sm-6">
                    <input class="form-control" type="text" placeholder=" ชื่อคำนำหน้าอังกฤษ "
                        name="upnameEN">
                </div>
            </div>
            <br>
        </div>
    </div>
    @endsection
     


@endsection
