@extends('Backend/master')
@section('TitleTab', 'ระบบโควต้า')

@section('Getbody')
    <section class="about-section text-center" style="color :black" id="about">
        
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5> ข้อมูลอาจารย์ </h5>
                        </div>
                    </div>
                    <div class="card-body text-right">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                            เพิ่มข้อมูล
                        </button>

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title text-center"> ข้อมูลอาจารย์ </h4>
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
                                                    <input class="form-control" id="pwd" placeholder=" ชื่อคำนำหน้าภาษาไทย " name="pwd">
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div style="line-height: 25pt"> ชื่อ : </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input class="form-control" id="pwd" placeholder=" ชื่อ " name="pwd">
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div style="line-height: 25pt"> นามสกุล : </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input class="form-control" id="pwd" placeholder=" นามสกุล " name="pwd">
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div style="line-height: 25pt"> ตำแหน่ง : </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input class="form-control" id="pwd" placeholder=" ตำแหน่ง " name="pwd">
                                                </div>
                                            </div>
                                            <br>

                                        </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal"> บันทึก </button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"> ปิด </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-1"> ลำดับ </div>
                            <div class="col-sm-8"> รายการ </div>
                            <div class="col-sm-3"> การกระทำ </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection