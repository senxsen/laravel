@extends('layouts.master')


@section("css")

@endsection

@section('content')
    <div class="row  border-bottom white-bg dashboard-header">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{ trans("master.member") }} {{ $user->id }} <small> {{ trans("master.edit_password") }}</small></h5>
                        {{--<div class="ibox-tools">--}}
                            {{--<a class="collapse-link">--}}
                                {{--<i class="fa fa-chevron-up"></i>--}}
                            {{--</a>--}}
                            {{--<a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">--}}
                                {{--<i class="fa fa-wrench"></i>--}}
                            {{--</a>--}}
                            {{--<ul class="dropdown-menu dropdown-user">--}}
                                {{--<li><a href="form_basic.html#">Config option 1</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="form_basic.html#">Config option 2</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                            {{--<a class="close-link">--}}
                                {{--<i class="fa fa-times"></i>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    </div>
                    <div class="ibox-content">
                        <form method="get" class="form-horizontal">
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.old_password") }}</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.new_password") }}</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.password_confirm") }}</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.second_password") }}</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white" type="submit">{{ trans("master.cancel") }}</button>
                                    <button class="btn btn-primary" type="submit">{{ trans("master.save_changes") }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </div>


@endsection

