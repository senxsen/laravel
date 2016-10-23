@extends('layouts.master')


@section("css")

@endsection

@section('content')
    <div class="row  border-bottom white-bg dashboard-header">

        {{--會員基本資料顯示 + 各點數狀況--}}
        @include('layouts.memberinfo')

        {{--直推表--}}
        <div class="ibox-content">
            <div class="table-responsive">
                {{--<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">--}}
                    {{--<div class="dataTables_length" id="DataTables_Table_0_length">--}}
                        {{--<label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control input-sm">--}}
                                {{--<option value="10">10</option>--}}
                                {{--<option value="25">25</option>--}}
                                {{--<option value="50">50</option>--}}
                                {{--<option value="100">100</option>--}}
                            {{--</select> --}}
                            {{--entries</label>--}}
                    {{--</div>--}}
                    {{--<div class="DTTT_container">--}}
                        {{--<a class="DTTT_button DTTT_button_copy" id="ToolTables_DataTables_Table_0_0" tabindex="0" aria-controls="DataTables_Table_0">--}}
                            {{--<span>Copy</span>--}}
                            {{--<div style="position: absolute; left: 0px; top: 0px; width: 46px; height: 31px; z-index: 99;">--}}
                                {{--<embed id="ZeroClipboard_TableToolsMovie_1" src="js/plugins/dataTables/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="46" height="31" name="ZeroClipboard_TableToolsMovie_1" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=1&amp;width=46&amp;height=31" wmode="transparent">--}}
                            {{--</div>--}}
                        {{--</a>--}}
                        {{--<a class="DTTT_button DTTT_button_csv" id="ToolTables_DataTables_Table_0_1" tabindex="0" aria-controls="DataTables_Table_0">--}}
                            {{--<span>CSV</span>--}}
                            {{--<div style="position: absolute; left: 0px; top: 0px; width: 40px; height: 31px; z-index: 99;">--}}
                                {{--<embed id="ZeroClipboard_TableToolsMovie_2" src="js/plugins/dataTables/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="40" height="31" name="ZeroClipboard_TableToolsMovie_2" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=2&amp;width=40&amp;height=31" wmode="transparent">--}}
                            {{--</div>--}}
                        {{--</a>--}}
                        {{--<a class="DTTT_button DTTT_button_xls" id="ToolTables_DataTables_Table_0_2" tabindex="0" aria-controls="DataTables_Table_0">--}}
                            {{--<span>Excel</span>--}}
                            {{--<div style="position: absolute; left: 0px; top: 0px; width: 46px; height: 31px; z-index: 99;">--}}
                                {{--<embed id="ZeroClipboard_TableToolsMovie_3" src="js/plugins/dataTables/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="46" height="31" name="ZeroClipboard_TableToolsMovie_3" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=3&amp;width=46&amp;height=31" wmode="transparent">--}}
                            {{--</div>--}}
                        {{--</a>--}}
                        {{--<a class="DTTT_button DTTT_button_pdf" id="ToolTables_DataTables_Table_0_3" tabindex="0" aria-controls="DataTables_Table_0">--}}
                            {{--<span>PDF</span>--}}
                            {{--<div style="position: absolute; left: 0px; top: 0px; width: 40px; height: 31px; z-index: 99;">--}}
                                {{--<embed id="ZeroClipboard_TableToolsMovie_4" src="js/plugins/dataTables/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="40" height="31" name="ZeroClipboard_TableToolsMovie_4" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=4&amp;width=40&amp;height=31" wmode="transparent">--}}
                            {{--</div>--}}
                        {{--</a>--}}
                        {{--<a class="DTTT_button DTTT_button_print" id="ToolTables_DataTables_Table_0_4" title="View print view" tabindex="0" aria-controls="DataTables_Table_0">--}}
                            {{--<span>Print</span>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                        <label>{{ trans("master.search_member") }}:<input type="search" class="form-control input-sm" placeholder={{ trans("master.plz_enter").trans("master.sponsor_id") }} aria-controls="DataTables_Table_0"></label>
                    </div>
                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">共有xx位直接推薦</div>

                    <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="日期: activate to sort column descending" style="width: 157px;">{{ trans("master.sponsor_join_date") }}</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="會員編號: activate to sort column ascending" style="width: 198px;">{{ trans("master.sponsor_id") }}</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="會員姓名: activate to sort column ascending" style="width: 184px;">{{ trans("master.sponsor_name") }}</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="加入等級: activate to sort column ascending" style="width: 134px;">{{ trans("master.sponsor_level") }}</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="推薦獎金: activate to sort column ascending" style="width: 101px;">{{ trans("master.sponsor_bonus") }}</th>
                    </thead>
                    <tbody>
                        <tr class="gradeA odd" role="row">
                            <td class="sorting_1">Gecko</td>
                            <td>Firefox 1.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA even" role="row">
                            <td class="sorting_1">Gecko</td>
                            <td>Firefox 1.5</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">{{ trans("master.sponsor_join_date") }}</th>
                            <th rowspan="1" colspan="1">{{ trans("master.sponsor_id") }}</th>
                            <th rowspan="1" colspan="1">{{ trans("master.sponsor_name") }}</th>
                            <th rowspan="1" colspan="1">{{ trans("master.sponsor_level") }}</th>
                            <th rowspan="1" colspan="1">{{ trans("master.sponsor_bonus") }}</th>
                        </tr>
                    </tfoot>
                    </table></div>
            </div>

        </div>


        @include('layouts.footer')
    </div>


@endsection

@section("js")

@endsection