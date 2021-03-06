<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sen | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/app.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">


    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">
@if($routeName == 'login')
    {{--<img class="login-bg" src="http://www.doubledragon-inc.com/GetImageBySize.aspx?w=700&&h=500&&f=images/gallery/%E6%B0%B4%E7%89%9B%E5%B3%B6%E9%A2%A8%E5%85%89_9447.jpg" />--}}
    <img class="login-bg" src="https://s.yimg.com/uy/build/images/sohp/inspiration/solar-storm3.jpg" />

@endif
<div class="middle-box text-center loginscreen animated fadeInDown">
    @yield('content')
</div>

<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
@yield("js")

</body>

</html>