@extends('Backend/master')
@section('TitleTab', 'ระบบโควต้า')

@section('Getbody')
<section class="about-section text-center" style="color :black" id="about"> 

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h5> รายการประกาศ </h5> 
                    </div>

                    <div class="card-body text-right">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                          เพิ่มข้อมูล
                        </button>
                      
                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                            
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title"> เพิ่มข้อมูลประกาศ </h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                              </div>
                              
                              <!-- Modal body -->
                              <div class="modal-body text-left">
                                Modal body..
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
    </div>

@endsection