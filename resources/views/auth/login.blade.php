@extends('auth.master')

@section('content')
    <div>
        <div>
            <h1 class="logo-name">時空</h1>
        </div>
        <h3>Welcome to </br> Times Marketing Co., Ltd.</h3>
        <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
        </p>
        <p>Login in. To see it in action.</p>
        {!! Form::open(['route' => 'login_post', 'method' => 'post', 'class' => 'm-t', 'id' => 'login-form']) !!} <!--不懂-->
            <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="Username" required="" value="{{ old("email") }}">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Password" required="">
            </div>
            {{-- include 錯誤樣板 --}}
            @include('layouts.validatorError')
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="login.html#"><small>Forgot password?</small></a>
            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
        {!! Form::close() !!}<!--不懂-->{{-- 這個等同於匯出『</form>』--}}
        <p class="m-t"> <small>Design by Sen. &copy; 2016</small> </p>
    </div>

@endsection

