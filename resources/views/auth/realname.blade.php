@extends('layouts.master')

<script src="js/plugins/daterangepicker/daterangepicker.js"></script>
@section("css")

@endsection

@section('content')
    <div class="row  border-bottom white-bg dashboard-header">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{ trans("master.member") }} {{ $user->id }} <small> {{ trans("master.real_name") }}</small></h5>

                    </div>
                    <div class="ibox-content">{{--證件驗證資料--}}
                        <form method="get" class="form-horizontal">
                            {{--輸入英文姓--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.eng_last_name") }}</label>

                                <div class="col-sm-10"><input type="text" placeholder={{ trans("master.plz_passport_ref") }} class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            {{--輸入英文名--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.eng_first_name") }}</label>

                                <div class="col-sm-10"><input type="text" placeholder={{ trans("master.plz_passport_ref") }} class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            {{--輸入中文名字--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.chinese_name") }}</label>

                                <div class="col-sm-10"><input type="text" placeholder={{ trans("master.plz_enter_chname") }} class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            {{--選擇生日--}}
                            <div class="form-group" id="data_2">
                                <label class="col-sm-2 control-label ">{{ trans("master.birth") }}</label>
                                <div class="input-group date col-sm-10">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="10/10/1950">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            {{--選擇國籍--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.country") }}</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="account">
                                        <option>{{ trans("master.Taiwan") }}</option>
                                        <option>{{ trans("master.China") }}</option>
                                        <option>{{ trans("master.Hongkong") }}</option>
                                        <option>{{ trans("master.Philippine") }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            {{--上傳證件--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.passport_id_upload") }}</label>

                                <div class="col-sm-10"><input type="text" placeholder="" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            {{--輸入證件號碼--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.passport_no_or_id_no") }}</label>

                                <div class="col-sm-10"><input type="text" placeholder={{ trans("master.plz_passport_no_or_id_no") }} class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            {{--輸入手機--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.mobile_number") }}</label>

                                <div class="col-sm-10"><input type="text" placeholder={{ trans("master.plz_enter_real_mobile_no") }} class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            {{--輸入電子郵件--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.email") }}</label>

                                <div class="col-sm-10"><input type="text" placeholder={{ trans("master.plz_enter_real_email") }} class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                        </form>
                    </div>
                    <div class="ibox-title">
                        <h5>{{ trans("master.member") }} {{ $user->id }} <small> {{ trans("master.real_bank") }}</small></h5>

                    </div>
                    <div class="ibox-content">{{--銀行帳戶資料--}}
                        <form method="get" class="form-horizontal">
                            {{--選擇銀行名稱--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.bank_name") }}</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="account">
                                        <option>{{ trans("master.Taiwan") }}</option>
                                        <option>{{ trans("master.China") }}</option>
                                        <option>{{ trans("master.Hongkong") }}</option>
                                        <option>{{ trans("master.Philippine") }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            {{--輸入分行名稱--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.branch_name") }}</label>

                                <div class="col-sm-10"><input type="text" placeholder="" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            {{--輸入帳號名稱--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.account_name") }}</label>

                                <div class="col-sm-10"><input type="text" placeholder="" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            {{--輸入帳號--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.account_number") }}</label>

                                <div class="col-sm-10"><input type="text" placeholder="" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            {{--上傳影本--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.account_copy_upload") }}</label>

                                <div class="col-sm-10"><input type="text" placeholder="" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </div>

@endsection

@section("js")

    <script>
        $(document).ready(function(){

            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                divStyle.backgroundColor = ev.color.toHex();
            });

            $('.clockpicker').clockpicker();

            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });


        });
        var config = {
            '.chosen-select'           : {},
            '.chosen-select-deselect'  : {allow_single_deselect:true},
            '.chosen-select-no-single' : {disable_search_threshold:10},
            '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
            '.chosen-select-width'     : {width:"95%"}
        }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }

        $("#ionrange_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_2").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_3").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_4").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        $("#basic_slider").noUiSlider({
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#range_slider").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#drag-fixed").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });
    </script>

@endsection
