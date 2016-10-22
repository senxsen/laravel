@extends('layouts.master')


@section("css")

@endsection

@section('content')
    <div class="row  border-bottom white-bg dashboard-header">

        {{--會員基本資料顯示 + 各點數狀況--}}
        <div class="row">
            <div class="col-sm-4">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div class="tab-content">
                            <div id="contact-1" class="tab-pane active">
                                <div class="row m-b-lg">
                                    <div class="col-lg-4 text-center">
                                        <h2>{{ $user->nickname }}</h2>

                                        <div class="m-b-sm">
                                            <img alt="image" class="img-circle" src="img/a2.jpg" style="width: 62px">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <p><h3><strong>會員帳號：{{ $user->id }}</strong></h3></p>
                                        <p><h3><strong>註冊時間：{{ $user->created_at->format("Y/m/d") }}</strong></h3></p>
                                        {{--<p><h3><strong>註冊時間：{{ date_format($user->created_at, 'Y/m/d') }}</strong></h3></p>--}}{{--另一種寫法--}}
                                        <p><h3><strong>等級：{{ $user->level }}</strong></h3></p>
                                        <p><h3><strong>球數：XX </strong></h3></p>
                                        {{--<button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message--}}
                                        {{--</button>--}}
                                    </div>
                                </div>

                                {{--<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">--}}
                                {{--<div class="full-height-scroll" style="overflow: hidden; width: auto; height: 100%;">--}}

                                <strong>{{ trans("master.login_track") }}</strong>

                                <ul class="list-group clear-list">
                                    <li class="list-group-item fist-item">
                                        <span class="pull-right"> 192.168.0.1 </span>
                                        {{ trans("master.login_ip") }}
                                    </li>
                                    <li class="list-group-item">
                                        <span class="pull-right"> 192.168.0.2 </span>
                                        {{ trans("master.last_login_ip") }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                {{--<h2 class="m-l-md">{{ trans("master.welcome") }} {{ $user->full_name }}</h2>--}}

                <div class="col-sm-6">
                    <div class="widget style1">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-dollar fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> {{ trans("master.cash_point") }} </span>
                                <h2 class="font-bold">$ {{ $user->cash + $user->daily_point }}</h2>{{--現金積分(推薦＋遊戲70%)＋每日分紅--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-futbol-o fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> {{ trans("master.happy_point") }} </span>
                                <h2 class="font-bold">$ NOT YET</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-trophy fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> {{ trans("master.daily_point") }} </span>
                                <h2 class="font-bold">$ {{ $user->daily_point }} </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="widget style1 navy-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-gamepad fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> {{ trans("master.game_point") }} </span>
                                <h2 class="font-bold">$ {{ $user->game_point }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-home fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> {{ trans("master.house_point") }} </span>
                                <h2 class="font-bold">$ {{ $user->house_point }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-plane fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> {{ trans("master.travel_point") }} </span>
                                <h2 class="font-bold">$ {{ $user->travel_point }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--點數交易--}}
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>{{ trans("master.points_transfer") }} </h5>
                    </div>
                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-md-4">{{--轉給誰--}}
                                <p>
                                    {{ trans("master.transfer_to_id") }}
                                </p>
                                <div class="">
                                    <input type="text" class="form-control" placeholder={{ trans("master.transfer_to_id") }}>
                                </div>
                            </div>

                            <div class="col-md-4">{{--金額--}}
                                <p>
                                    {{ trans("master.transfer_amount") }}
                                </p>
                                <div class="">
                                    <input type="text" class="form-control" placeholder={{ trans("master.transfer_amount") }}>
                                    <span class="help-block">{{ trans("master.need_100_times") }}</span>
                                </div>
                            </div>

                            <div class="col-md-4">{{--留言--}}
                                <p>
                                    {{ trans("master.comment") }}
                                </p>
                                <div class="">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">{{--二級密碼--}}
                                <p>
                                    {{ trans("master.plz_enter_second_password") }}
                                </p>
                                <input type="text" class="form-control col-md-4"  placeholder={{ trans("master.plz_enter_second_password") }}>
                            </div>
                            <div class="col-md-4">{{--想在左邊一點--}}
                                <p><br></p>
                                <button class="btn btn-white " type="submit">{{ trans("master.cancel") }}</button>
                                <button class="btn btn-primary" type="submit">{{ trans("master.submit") }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </div>


@endsection

@section("js")

@endsection