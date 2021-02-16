@extends('Backend/master')
@section('TitleTab', 'ระบบโควต้า')

@section('Getbody')
    <section class="about-section text-center" style="color :black" id="about"> 

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5> รายชื่อนักศึกษา </h5> 
                        </div>
    
                        <div class="card-body">
                            <div class="row">
                              <div class="col-sm-1"> ลำดับ </div>
                              <div class="col-sm-4"> ชื่อ - นามสกุล </div>
                              <div class="col-sm-3"> หลักสูกร </div>
                              <div class="col-sm-2"> ปีการศึกษา </div>
                              <div class="col-sm-2"> การกระทำ </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        
    </section>
@endsection

