@extends('Backend/master')


@section('Getbody')

    <section class="about-section text-center" style="color :black" id="about">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header text-center">
                            @yield('Name_Header')

                            <div class="card-body text-right">
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                                    เพิ่มข้อมูล
                                </button>

                                <!-- The Modal -->
                                @yield('Add_FromAction')
                                {{ csrf_field() }}
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            @yield('Body_card')

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn-sm btn-success"> บันทึก </button>
                                                <button type="button" class="btn-sm btn-danger" data-dismiss="modal"> ปิด
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            @yield('Table_Header')
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @yield('Table_Data')

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

                                                    @yield('ModalForm')

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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (\Session::has('success'))
        <script>
            alert("บันทึกข้อมูลเรียบร้อย");

        </script>
        {{-- <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>success</strong>
        </div> --}}

    @elseif(\Session::has('error'))
        <script>
            alert("ไม่สามารถบันทึกข้อมูลได้");

        </script>
        {{-- <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong>
        </div> --}}
    @endif
    @yield('Getbody-page')

@endsection
