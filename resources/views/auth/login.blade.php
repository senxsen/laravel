@extends('auth.master')

@section('content')
    <div>
        <div>
            {{--<h1 class="logo-name">{{ trans("layout.app_name") }}</h1>--}}
        </div>
        <h2>Welcome to </br> {{ trans("master.double_dragon") }}</h2>
        {{--<p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.--}}
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
        </p>
        {{--<p>Login in. To see it in action.</p>--}}
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
        <p class="m-t"> <small>Design by {{ trans("master.double_d") }}. &copy; 2016</small> </p>
    </div>

@endsection
@section("js")
    <script>
        var ImageUrl = [
//            "http://www.doubledragon-inc.com/GetImageBySize.aspx?w=700&&h=500&&f=images/gallery/024C1EC2-79CF-453C-843F-B47CB6018BC7.JPG",
//            "http://www.doubledragon-inc.com/GetImageBySize.aspx?w=700&&h=500&&f=images/gallery/%E6%B0%B4%E7%89%9B%E5%B3%B6%E9%A2%A8%E5%85%89_9634.jpg",
//            "http://www.doubledragon-inc.com/GetImageBySize.aspx?w=700&&h=500&&f=images/gallery/1427181691334.jpg",
            "https://s.yimg.com/uy/build/images/sohp/inspiration/night-sky3.jpg",
            "https://s.yimg.com/uy/build/images/sohp/inspiration/love-rock3.jpg",
            "https://s.yimg.com/uy/build/images/sohp/inspiration/solar-storm3.jpg",
        ];
        var ArrayCount = 0;
        var $loginBg = $(".login-bg");
        setInterval(
            changeImage
        ,7000);
        function changeImage(){
            $.when(
                $loginBg.animate({
                    opacity: 0
                }, 1000, function () {
                    console.log("done")
                })
            ).then(
                function(){
                    console.log("test", ArrayCount);
                    $loginBg.attr("src", ImageUrl[ArrayCount]).animate({
                        opacity: 1
                    }, 1000);
                    if(ArrayCount == ImageUrl.length-1){
                        ArrayCount = 0;
                    }else{
                        ArrayCount++;
                    }
                }
            );
        }
    </script>
@endsection

