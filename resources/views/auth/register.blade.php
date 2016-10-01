@extends('auth.master')

@section('content')
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">{{ trans("layout.app_name") }}</h1>
            </div>
            <h3>Register to IN+</h3>
            <p>Create account to see it in action.</p>
            {!! Form::open(['route' => 'register_post', 'method' => 'post', "class" => 'm-t']) !!}
                <div class="form-group">
                    <input name="full_name" type="text" class="form-control" placeholder="Full Name" required="" value="{{ old("full_name") }}">
                </div>
                <div class="form-group">
                    <input name="nickname" type="text" class="form-control" placeholder="Nick Name" required="" value="{{ old("nickname") }}">
                </div>
                <div class="form-group">
                    <input name="mobile" type="text" class="form-control" placeholder="Mobile Number" required="" value="{{ old("mobile") }}">
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email" required="" value="{{ old("email") }}">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Recheck Password" required="">
                </div>
                <div class="form-group">
                    <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                </div>
                {{-- include 錯誤樣板 --}}
                @include('layouts.validatorError')
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>
                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route("login") }}">Login</a>
            {!! Form::close() !!}
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
@endsection
