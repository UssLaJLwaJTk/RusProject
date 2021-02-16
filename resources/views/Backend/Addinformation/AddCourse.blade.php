@extends('Backend/master')
@section('TitleTab', 'ระบบโควต้า')

@section('Getbody')
    <section class="about-section text-center" style="color :black" id="about">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5> ข้อมูลหลักสูตร </h5> 
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
                                            <h4 class="modal-title text-center"> ข้อมูลหลักสูตร </h4>
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                        </div>
    
                                        <!-- Modal body -->
                                        <div class="modal-body text-left">
    
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div style="line-height: 25pt"> รหัสหลักสูตร : </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" id="pwd" placeholder=" รหัสหลักสูตร "
                                                            name="pwd">
                                                    </div>
                                                </div>
                                                <br>
    
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div style="line-height: 25pt"> ชื่อหลักสูตร (ภาษาไทย) : </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" id="pwd"
                                                            placeholder=" ชื่อหลักสูตร (ภาษาไทย) " name="pwd">
                                                    </div>
                                                </div>
                                                <br>
    
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div style="line-height: 25pt"> ชื่อหลักสูตร (อังกฤษ) : </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" id="pwd"
                                                            placeholder=" ชื่อหลักสูตร (อังกฤษ) " name="pwd">
                                                    </div>
                                                </div>
                                                <br>
    
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div style="line-height: 25pt"> ประธานหลักสูตร : </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" id="pwd" placeholder=" ชื่อประธานหลักสูตร "
                                                            name="pwd">
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

                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>รายการ</th>
                                            <th>การกระทำ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                    <!-- The Modal -->
                                                    <div class="modal" id="myModal2">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">แก้ไขข้อมูล</h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal">&times;</button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <div class="modal-body text-left">
                                                                    <div class="container">

                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <div style="line-height: 25pt"> รหัสหลักสูตร : </div>
                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <input class="form-control" placeholder= " รหัสหลักสูตร " name="code">
                                                                            </div>
                                                                        </div>
                                                                        <br>

                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <div style="line-height: 25pt"> ชื่อหลักสูตร (ภาษาไทย) : </div>
                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <input class="form-control" placeholder= " ชื่อหลักสูตรภาษาไทย " name="courseTH">
                                                                            </div>
                                                                        </div>
                                                                        <br>

                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <div style="line-height: 25pt"> ชื่อหลักสูตร (ภาษาอังกฤษ) : </div>
                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <input class="form-control" placeholder= " ชื่อหลักสูตรภาษาอังกฤษ " name="courseEN">
                                                                            </div>
                                                                        </div>
                                                                        <br>

                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <div style="line-height: 25pt"> ประธานหลักสูตร : </div>
                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <input class="form-control" placeholder= " ประธานหลักสูตร " name="president">
                                                                            </div>
                                                                        </div>
                                                                        <br>

                                                                    </div>
                                                                </div>

                                                                <!-- Modal footer -->
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn-sm btn-success"
                                                                        data-dismiss="modal">บันทึก</button>
                                                                    <button type="button" class="btn-sm btn-danger"
                                                                        data-dismiss="modal">ยกเลิก</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection


