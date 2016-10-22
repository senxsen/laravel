@extends('layouts.master')


@section("css")
    <link href="css/plugins/jsTree/style.min.css" rel="stylesheet">

    <style>
        .jstree-open > .jstree-anchor > .fa-folder:before {
            content: "\f07c";
        }

        .jstree-default .jstree-icon.none {
            width: 0;
        }
    </style>
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

        {{--列表式組織圖--}}
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>{{ trans("master.list_map") }} <small></small></h5>
                </div>

                <div class="ibox-content">

                    <div id="jstree1">
                        <ul>
                            <li class="jstree-open">Admin theme
                                <ul>
                                    <li>css
                                        <ul>
                                            <li data-jstree='{"type":"css"}'>animate.css</li>
                                            <li data-jstree='{"type":"css"}'>bootstrap.css</li>
                                            <li data-jstree='{"type":"css"}'>style.css</li>
                                        </ul>
                                    </li>
                                    <li>email-templates
                                        <ul>
                                            <li data-jstree='{"type":"html"}'>action.html</li>
                                            <li data-jstree='{"type":"html"}'>alert.html</li>
                                            <li data-jstree='{"type":"html"}'>billing.html</li>
                                        </ul>
                                    </li>
                                    <li>fonts
                                        <ul>
                                            <li data-jstree='{"type":"svg"}'>glyphicons-halflings-regular.eot</li>
                                            <li data-jstree='{"type":"svg"}'>glyphicons-halflings-regular.svg</li>
                                            <li data-jstree='{"type":"svg"}'>glyphicons-halflings-regular.ttf</li>
                                            <li data-jstree='{"type":"svg"}'>glyphicons-halflings-regular.woff</li>
                                        </ul>
                                    </li>
                                    <li class="jstree-open">img
                                        <ul>
                                            <li data-jstree='{"type":"img"}'>profile_small.jpg</li>
                                            <li data-jstree='{"type":"img"}'>angular_logo.png</li>
                                            <li class="text-navy" data-jstree='{"type":"img"}'>html_logo.png</li>
                                            <li class="text-navy" data-jstree='{"type":"img"}'>mvc_logo.png</li>
                                        </ul>
                                    </li>
                                    <li class="jstree-open">js
                                        <ul>
                                            <li data-jstree='{"type":"js"}'>inspinia.js</li>
                                            <li data-jstree='{"type":"js"}'>bootstrap.js</li>
                                            <li data-jstree='{"type":"js"}'>jquery-2.1.1.js</li>
                                            <li data-jstree='{"type":"js"}'>jquery-ui.custom.min.js</li>
                                            <li  class="text-navy" data-jstree='{"type":"js"}'>jquery-ui-1.10.4.min.js</li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"type":"html"}'> affix.html</li>
                                    <li data-jstree='{"type":"html"}'> dashboard.html</li>
                                    <li data-jstree='{"type":"html"}'> buttons.html</li>
                                    <li data-jstree='{"type":"html"}'> calendar.html</li>
                                    <li data-jstree='{"type":"html"}'> contacts.html</li>
                                    <li data-jstree='{"type":"html"}'> css_animation.html</li>
                                    <li  class="text-navy" data-jstree='{"type":"html"}'> flot_chart.html</li>
                                    <li  class="text-navy" data-jstree='{"type":"html"}'> google_maps.html</li>
                                    <li data-jstree='{"type":"html"}'> icons.html</li>
                                    <li data-jstree='{"type":"html"}'> inboice.html</li>
                                    <li data-jstree='{"type":"html"}'> login.html</li>
                                    <li data-jstree='{"type":"html"}'> mailbox.html</li>
                                    <li data-jstree='{"type":"html"}'> profile.html</li>
                                    <li  class="text-navy" data-jstree='{"type":"html"}'> register.html</li>
                                    <li data-jstree='{"type":"html"}'> timeline.html</li>
                                    <li data-jstree='{"type":"html"}'> video.html</li>
                                    <li data-jstree='{"type":"html"}'> widgets.html</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>


        @include('layouts.footer')
    </div>


@endsection

@section("js")
    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <script src="js/plugins/jsTree/jstree.min.js"></script>

    <script>
        $(document).ready(function(){

            $('#jstree1').jstree({
                'core' : {
                    'check_callback' : true
                },
                'plugins' : [ 'types', 'dnd' ],
                'types' : {
                    'default' : {
                        'icon' : 'fa fa-folder'
                    },
                    'html' : {
                        'icon' : 'fa fa-file-code-o'
                    },
                    'svg' : {
                        'icon' : 'fa fa-file-picture-o'
                    },
                    'css' : {
                        'icon' : 'fa fa-file-code-o'
                    },
                    'img' : {
                        'icon' : 'fa fa-file-image-o'
                    },
                    'js' : {
                        'icon' : 'fa fa-file-text-o'
                    }

                }
            });

            $('#using_json').jstree({ 'core' : {
                'data' : [
                    'Empty Folder',
                    {
                        'text': 'Resources',
                        'state': {
                            'opened': true
                        },
                        'children': [
                            {
                                'text': 'css',
                                'children': [
                                    {
                                        'text': 'animate.css', 'icon': 'none'
                                    },
                                    {
                                        'text': 'bootstrap.css', 'icon': 'none'
                                    },
                                    {
                                        'text': 'main.css', 'icon': 'none'
                                    },
                                    {
                                        'text': 'style.css', 'icon': 'none'
                                    }
                                ],
                                'state': {
                                    'opened': true
                                }
                            },
                            {
                                'text': 'js',
                                'children': [
                                    {
                                        'text': 'bootstrap.js', 'icon': 'none'
                                    },
                                    {
                                        'text': 'inspinia.min.js', 'icon': 'none'
                                    },
                                    {
                                        'text': 'jquery.min.js', 'icon': 'none'
                                    },
                                    {
                                        'text': 'jsTree.min.js', 'icon': 'none'
                                    },
                                    {
                                        'text': 'custom.min.js', 'icon': 'none'
                                    }
                                ],
                                'state': {
                                    'opened': true
                                }
                            },
                            {
                                'text': 'html',
                                'children': [
                                    {
                                        'text': 'layout.html', 'icon': 'none'
                                    },
                                    {
                                        'text': 'navigation.html', 'icon': 'none'
                                    },
                                    {
                                        'text': 'navbar.html', 'icon': 'none'
                                    },
                                    {
                                        'text': 'footer.html', 'icon': 'none'
                                    },
                                    {
                                        'text': 'sidebar.html', 'icon': 'none'
                                    }
                                ],
                                'state': {
                                    'opened': true
                                }
                            }
                        ]
                    },
                    'Fonts',
                    'Images',
                    'Scripts',
                    'Templates',
                ]
            } });

        });
    </script>

@endsection