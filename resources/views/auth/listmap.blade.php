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
        @include('layouts.memberinfo')

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