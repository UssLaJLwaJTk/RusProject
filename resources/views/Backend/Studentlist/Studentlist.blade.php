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
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-sm-1"> ลำดับ </div>
                      <div class="col-sm-8"> รายชื่อ </div>
                      <div class="col-sm-3"> สถานะ </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

