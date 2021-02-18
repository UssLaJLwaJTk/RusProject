@extends('layouts/master')

@section('TitleTab')
    @yield('TitleName')
@stop

{{-- set Home direct --}}
@section('SetHomeDirect' , '/backend')

{{-- set menu list for menu header --}}
@section('MenuList')
    <ul class="navbar-nav ml-auto">
        {{-- Login Zone --}}
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#LoginModal">Login</a>
                </li>
            @else
                @if (Auth::user()->first_create_flag == "Y")
                    <script>
                        var url = "{{ url('update-password') }}";
                        window.location.href = url;
                    </script>
                @else
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color :black" href="/Addadmin"> จัดการข้อมูลผู้สมัคร </a></li>

                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color :black" href="/SummaryReport"> รายงานสรุปประจำปี </a>
                        </li>

                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" style="color :black">การจัดการข้อมูลระบบ</a>
                            <div class="dropdown-menu">

                                <h5 class="dropdown-header">
                                    <strong style="color:rgb(243, 240, 35)">
                                        ข้อมูลประชาสัมพันธ์และหลักสูตร
                                    </strong>
                                </h5>
                                <a class="dropdown-item" href="#"> ข้อมูลหลักสูตร </a>
                                <a class="dropdown-item" href="#"> กลุ่มข้อมูลข่าวสาร </a>
                                <a class="dropdown-item" href="#"> ข้อมูลประชาสัมพันธ์ / ข่าสาร </a>

                                <h5 class="dropdown-header">
                                    <strong style="color:rgb(243, 240, 35)">
                                        ข้อมูลประกอบใบสมัคร
                                    </strong>
                                </h5>
                                <a class="dropdown-item" href="#"> ข้อมูลคำนำหน้าชื่อ </a>
                                <a class="dropdown-item" href="#"> ข้อมูลสถานศึกษา </a>
                                <a class="dropdown-item" href="#"> ข้อมูลระดับการศึกษา </a>

                                <h5 class="dropdown-header">
                                    <strong style="color:rgb(243, 240, 35)">
                                        การจัดการบัญชีผู้ใช้งาน
                                    </strong>
                                </h5>
                                    <a class="dropdown-item" href="/Manage-User"> สร้างบัญชีผู้ใช้งาน </a>
                            </div>
                        </div>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-black" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                @endif
        @endguest
        {{-- Login Zone --}}
    </ul>
@stop

{{-- set header and body --}}
@section('BodyZone')
    <style>
        div.dataTables_wrapper {
            /* width: 800px; */
            margin: 0 auto;
            font-size: 0.8em;
        }
    </style>
    @yield('GetBody')
@stop


@section('ModalZone')
    {{-- AddData Modal --}}
    @yield('AddDataModal')
    @yield('UpdateDataModel')
    @yield('WizardDataModel')
    @yield('ReverseItem')
@stop

{{-- Login Modal --}}
@section('loginmodal')
    <!-- The Modal -->
    <div class="modal" id="LoginModal">
        <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn-sm btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn-sm btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <br>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
@stop
{{-- Login Modal --}}

@yield('GetAlert')

@section('AnotherLink')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    @yield('AnotherLinkUse')
@endsection

@section('JsFunction')
    @yield('FunctionJs')
@endsection
