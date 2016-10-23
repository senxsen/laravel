@extends('layouts.master')


@section("css")

@endsection

@section('content')
    <div class="row  border-bottom white-bg dashboard-header">

        {{--會員基本資料顯示 + 各點數狀況--}}
        @include('layouts.memberinfo')

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