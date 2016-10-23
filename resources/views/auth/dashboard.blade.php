@extends('layouts.master')


@section("css")

@endsection

@section('content')
    <div class="row  border-bottom white-bg dashboard-header">

        {{--會員基本資料顯示 + 各點數狀況--}}

        @include('layouts.memberinfo')


        {{--多球狀況一覽--}}
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>如果有多顆球，就顯示各球的基本資料，入單時間、現金積分、靜態收益、動態收益、介紹多少人。</h5>
                    </div>
                    <div class="ibox-content">

                        <table class="footable table table-stripped toggle-arrow-tiny tablet breakpoint footable-loaded" data-page-size="8">
                            <thead>
                            <tr>
                                <th data-toggle="true" class="footable-visible footable-first-column footable-sortable">子球編號<span class="footable-sort-indicator"></span></th>
                                <th class="footable-visible footable-sortable">入金單位<span class="footable-sort-indicator"></span></th>
                                <th class="footable-visible footable-sortable">靜態收益<span class="footable-sort-indicator"></span></th>
                                <th data-hide="all" class="footable-sortable" style="display: none;">Company<span class="footable-sort-indicator"></span></th>
                                <th data-hide="all" class="footable-sortable" style="display: none;">Completed<span class="footable-sort-indicator"></span></th>
                                <th data-hide="all" class="footable-sortable" style="display: none;">Task<span class="footable-sort-indicator"></span></th>
                                <th data-hide="all" class="footable-sortable" style="display: none;">Date<span class="footable-sort-indicator"></span></th>
                                <th class="footable-visible footable-last-column footable-sortable">Action<span class="footable-sort-indicator"></span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="footable-even" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Project - This is example of project</td>
                                <td class="footable-visible">Patrick Smith</td>
                                <td class="footable-visible">0800 051213</td>
                                <td style="display: none;">Inceptos Hymenaeos Ltd</td>
                                <td style="display: none;"><span class="pie">0.52/1.561</span></td>
                                <td style="display: none;">20%</td>
                                <td style="display: none;">Jul 14, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="table_foo_table.html#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr><tr class="footable-odd" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Project
                                    <small>This is example of project</small>
                                </td>
                                <td class="footable-visible">Patrick Smith</td>
                                <td class="footable-visible">0800 051213</td>
                                <td style="display: none;">Inceptos Hymenaeos Ltd</td>
                                <td style="display: none;"><span class="pie">0.52/1.561</span></td>
                                <td style="display: none;">20%</td>
                                <td style="display: none;">Jul 14, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="table_foo_table.html#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr></tbody>
                            <tfoot>
                            {{--<tr>--}}
                            {{--<td colspan="5" class="footable-visible">--}}
                            {{--<ul class="pagination pull-right"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page"><a data-page="1" href="#">2</a></li><li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>--}}
                            {{--</td>--}}
                            {{--</tr>--}}
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        {{--公司公告--}}
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="ibox-content m-b-sm border-bottom">
                        <div class="text-center p-lg">
                            <h2>{{ trans("master.news") }}</h2>
                            {{--<span>add your question by selecting </span>--}}
                            {{--<button title="Create new cluster" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> <span class="bold">Add question</span></button> button--}}
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <a data-toggle="collapse" href="faq.html#faq1" class="faq-question">What It a long established fact that a reader ?</a>
                                <small>Added by <strong>Alex Smith</strong> <i class="fa fa-clock-o"></i> Today 2:40 pm - 24.06.2014</small>
                            </div>
                            <div class="col-md-3">
                                <span class="small font-bold">Robert Nowak</span>
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                    <span class="tag-item">License</span>
                                </div>
                            </div>
                            <div class="col-md-2 text-right">
                                <span class="small font-bold">Voting </span><br>
                                42
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="faq1" class="panel-collapse collapse ">
                                    <div class="faq-answer">
                                        <p>
                                            It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of
                                            using Lorem Ipsum is that it has a more-or-less normal distribution of
                                            letters, as opposed to using 'Content here, content here', making it
                                            look like readable English.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <a data-toggle="collapse" href="faq.html#faq2" class="faq-question">Many desktop publishing packages ?</a>
                                <small>Added by <strong>Mark Nowak</strong> <i class="fa fa-clock-o"></i> Today 3:30 pm - 11.06.2014</small>
                            </div>
                            <div class="col-md-3">
                                <span class="small font-bold">Robert Nowak</span>
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                    <span class="tag-item">License</span>
                                    <span class="tag-item">CC</span>
                                </div>
                            </div>
                            <div class="col-md-2 text-right">
                                <span class="small font-bold">Voting </span><br>
                                24
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="faq2" class="panel-collapse collapse">
                                    <div class="faq-answer">
                                        <p>
                                            Many desktop publishing packages and web page editors now use Lorem
                                            Ipsum as their default model text, and a search for 'lorem ipsum' will
                                            uncover many web sites still in their infancy. Various versions have
                                            evolved over the years, sometimes by accident, sometimes on purpose
                                            (injected humour and the like).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <a data-toggle="collapse" href="faq.html#faq3" class="faq-question">Ipsum generators on the Internet tend ?</a>
                                <small>Added by <strong>Monica Rother</strong> <i class="fa fa-clock-o"></i> Yestorday 7:60 pm - 12.06.2014</small>
                            </div>
                            <div class="col-md-3">
                                <span class="small font-bold">Alex Berg</span>
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                    <span class="tag-item">Web App</span>
                                    <span class="tag-item">Instruction</span>
                                </div>
                            </div>
                            <div class="col-md-2 text-right">
                                <span class="small font-bold">Voting </span><br>
                                22
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="faq3" class="panel-collapse collapse">
                                    <div class="faq-answer">
                                        <p>
                                            Ipsum generators on the Internet tend to repeat predefined chunks as
                                            necessary, making this the first true generator on the Internet. It uses
                                            a dictionary of over 200 Latin words, combined with a handful of model
                                            sentence structures, to generate Lorem Ipsum which looks reasonable. The
                                            generated Lorem Ipsum is therefore always free from repetition, injected
                                            humour, or non-characteristic words etc.
                                        </p>
                                    </div>
                                </div>
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
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('{{ trans("master.double_dragon").trans("master.system") }}', '{{ trans("master.welcome") }}  {{ $user->full_name }}  {{ trans("master.login") }}');

            }, 1300);

            /**
            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                        data1, data2
                    ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };

            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 140,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 200,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var polarOptions = {
                scaleShowLabelBackdrop: true,
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                scaleBeginAtZero: true,
                scaleBackdropPaddingY: 1,
                scaleBackdropPaddingX: 1,
                scaleShowLine: true,
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };
            var ctx = document.getElementById("polarChart").getContext("2d");
            var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);
            **/
        });
    </script>

@endsection