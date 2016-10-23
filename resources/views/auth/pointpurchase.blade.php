@extends('layouts.master')


@section("css")

@endsection

@section('content')
    <div class="row  border-bottom white-bg dashboard-header">

        {{--會員基本資料顯示 + 各點數狀況--}}
        @include('layouts.memberinfo')

        {{--購買點數--}}
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>{{ trans("master.points_transfer") }} </h5>
                    </div>
                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-md-3">{{--輸入數量--}}
                                <p>
                                    {{ trans("master.purchase_amount") }}
                                </p>
                                <div class="">
                                    <input type="text" class="form-control" placeholder={{ trans("master.purchase_amount") }}>
                                </div>
                            </div>

                            <div class="col-md-2">{{--算出金額--}}
                                <p>
                                    {{ trans("master.purchase_bill") }}
                                </p>
                                <div class="class">
                                    <p>
                                        總金額：$$$$$$$$$$$$$$$$$
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">{{--二級密碼--}}
                                <p>
                                    {{ trans("master.plz_enter_second_password") }}
                                </p>
                                <input type="text" class="form-control col-md-4"  placeholder={{ trans("master.plz_enter_second_password") }}>
                            </div>
                            <div class="col-md-3">{{--想在左邊一點--}}
                                <p><br></p>
                                <button class="btn btn-white " type="submit">{{ trans("master.cancel") }}</button>
                                <button class="btn btn-primary" type="submit">{{ trans("master.choose_to_pay") }}</button>
                            </div>

                        </div>
                        <div class="row">

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