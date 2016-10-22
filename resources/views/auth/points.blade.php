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

                <div class="col-sm-8">
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

        {{--點數轉換--}}
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>{{ trans("master.points_transfer") }} </h5>
                    </div>
                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-md-4">
                                <p>
                                    Select2 is a jQuery based replacement for select boxes. It can take a regular select box and turn it into:
                                </p>
                                <select class="select2_demo_1 form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 303px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-wqv8-container"><span class="select2-selection__rendered" id="select2-wqv8-container" title="Option 1">Option 1</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>

                            <div class="col-md-4">
                                <p>
                                    A placeholder value can be defined and will be displayed until a selection is made.
                                </p>
                                <select class="select2_demo_3 form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option></option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                </select><span class="select2 select2-container select2-container--default select2-container--above" dir="ltr" style="width: 303px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-8m4r-container"><span class="select2-selection__rendered" id="select2-8m4r-container"><span class="select2-selection__placeholder">Select a state</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                            </div>
                            <div class="col-md-4">
                                <p>
                                    Select2 also supports multi-value select boxes. The select below is declared with the multiple attribute.
                                </p>
                                <select class="select2_demo_2 form-control select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 303px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="-1" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--點數交易--}}
        <div class="row">

        </div>

        {{--購買點數--}}
        <div class="row">

        </div>
        @include('layouts.footer')
    </div>


@endsection

@section("js")

@endsection