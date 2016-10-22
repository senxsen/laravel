@extends('layouts.master')


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
                    <div class="ibox-content">
                        <form method="get" class="form-horizontal">
                            {{--輸入英文姓--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.eng_first_name") }}</label>

                                <div class="col-sm-10"><input type="text" placeholder={{ trans("master.plz_passport_ref") }} class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            {{--輸入英文名--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.eng_last_name") }}</label>

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
                                <label class="font-noraml">{{ trans("master.birth") }}</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="10/10/1950">
                                </div>
                            </div>
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

                            {{--輸入證件號碼--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.passport_no_or_id_no") }}</label>

                                <div class="col-sm-10"><input type="text" placeholder={{ trans("master.plz_passport_no_or_id_no") }} class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            {{--輸入手機--}}

                            {{--輸入電子郵件--}}
                            <div class="form-group"><label class="col-sm-2 control-label">{{ trans("master.email") }}</label>

                                <div class="col-sm-10"><input type="text" placeholder={{ trans("master.plz_enter_real_email") }} class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-lg-2 control-label">Disabled</label>



                                <div class="col-lg-10"><input type="text" disabled="" placeholder="Disabled input here..." class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-lg-2 control-label">Static control</label>

                                <div class="col-lg-10"><p class="form-control-static">email@example.com</p></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Checkboxes and radios <br>
                                    <small class="text-navy">Normal Bootstrap elements</small></label>

                                <div class="col-sm-10">
                                    <div><label> <input type="checkbox" value=""> Option one is this and that—be sure to include why it's great </label></div>
                                    <div><label> <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one is this and that—be sure to
                                            include why it's great </label></div>
                                    <div><label> <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two can be something else and selecting it will
                                            deselect option one </label></div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Inline checkboxes</label>

                                <div class="col-sm-10"><label class="checkbox-inline"> <input type="checkbox" value="option1" id="inlineCheckbox1"> a </label> <label class="checkbox-inline">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> b </label> <label class="checkbox-inline">
                                        <input type="checkbox" value="option3" id="inlineCheckbox3"> c </label></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Checkboxes &amp; radios <br><small class="text-navy">Custom elements</small></label>

                                <div class="col-sm-10">
                                    <div class="i-checks"><label> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" value="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Option one </label></div>
                                    <div class="i-checks"><label> <div class="icheckbox_square-green checked" style="position: relative;"><input type="checkbox" value="" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Option two checked </label></div>
                                    <div class="i-checks"><label> <div class="icheckbox_square-green checked disabled" style="position: relative;"><input type="checkbox" value="" disabled="" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Option three checked and disabled </label></div>
                                    <div class="i-checks"><label> <div class="icheckbox_square-green disabled" style="position: relative;"><input type="checkbox" value="" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Option four disabled </label></div>
                                    <div class="i-checks"><label> <div class="iradio_square-green" style="position: relative;"><input type="radio" value="option1" name="a" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Option one </label></div>
                                    <div class="i-checks"><label> <div class="iradio_square-green checked" style="position: relative;"><input type="radio" checked="" value="option2" name="a" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Option two checked </label></div>
                                    <div class="i-checks"><label> <div class="iradio_square-green checked disabled" style="position: relative;"><input type="radio" disabled="" checked="" value="option2" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Option three checked and disabled </label></div>
                                    <div class="i-checks"><label> <div class="iradio_square-green disabled" style="position: relative;"><input type="radio" disabled="" name="a" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Option four disabled </label></div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Inline checkboxes</label>

                                <div class="col-sm-10"><label class="checkbox-inline i-checks"> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" value="option1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>a </label>
                                    <label class="checkbox-inline i-checks"> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" value="option2" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> b </label>
                                    <label class="checkbox-inline i-checks"> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" value="option3" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> c </label></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Select</label>

                                <div class="col-sm-10"><select class="form-control m-b" name="account">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                    </select>

                                    <div class="col-lg-4 m-l-n"><select class="form-control" multiple="">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                        </select></div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group has-success"><label class="col-sm-2 control-label">Input with success</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group has-warning"><label class="col-sm-2 control-label">Input with warning</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group has-error"><label class="col-sm-2 control-label">Input with error</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Control sizing</label>

                                <div class="col-sm-10"><input type="text" placeholder=".input-lg" class="form-control input-lg m-b">
                                    <input type="text" placeholder="Default input" class="form-control m-b"> <input type="text" placeholder=".input-sm" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Column sizing</label>

                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-2"><input type="text" placeholder=".col-md-2" class="form-control"></div>
                                        <div class="col-md-3"><input type="text" placeholder=".col-md-3" class="form-control"></div>
                                        <div class="col-md-4"><input type="text" placeholder=".col-md-4" class="form-control"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Input groups</label>

                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon">@</span> <input type="text" placeholder="Username" class="form-control"></div>
                                    <div class="input-group m-b"><input type="text" class="form-control"> <span class="input-group-addon">.00</span></div>
                                    <div class="input-group m-b"><span class="input-group-addon">$</span> <input type="text" class="form-control"> <span class="input-group-addon">.00</span></div>
                                    <div class="input-group m-b"><span class="input-group-addon"> <input type="checkbox"> </span> <input type="text" class="form-control"></div>
                                    <div class="input-group"><span class="input-group-addon"> <input type="radio"> </span> <input type="text" class="form-control"></div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Button addons</label>

                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-btn">
                                            <button type="button" class="btn btn-primary">Go!</button> </span> <input type="text" class="form-control">
                                    </div>
                                    <div class="input-group"><input type="text" class="form-control"> <span class="input-group-btn"> <button type="button" class="btn btn-primary">Go!
                                        </button> </span></div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">With dropdowns</label>

                                <div class="col-sm-10">
                                    <div class="input-group m-b">
                                        <div class="input-group-btn">
                                            <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="form_basic.html#">Action</a></li>
                                                <li><a href="form_basic.html#">Another action</a></li>
                                                <li><a href="form_basic.html#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="form_basic.html#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" class="form-control"></div>
                                    <div class="input-group"><input type="text" class="form-control">

                                        <div class="input-group-btn">
                                            <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="form_basic.html#">Action</a></li>
                                                <li><a href="form_basic.html#">Another action</a></li>
                                                <li><a href="form_basic.html#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="form_basic.html#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Segmented</label>

                                <div class="col-sm-10">
                                    <div class="input-group m-b">
                                        <div class="input-group-btn">
                                            <button tabindex="-1" class="btn btn-white" type="button">Action</button>
                                            <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button"><span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="form_basic.html#">Action</a></li>
                                                <li><a href="form_basic.html#">Another action</a></li>
                                                <li><a href="form_basic.html#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="form_basic.html#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" class="form-control"></div>
                                    <div class="input-group"><input type="text" class="form-control">

                                        <div class="input-group-btn">
                                            <button tabindex="-1" class="btn btn-white" type="button">Action</button>
                                            <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button"><span class="caret"></span></button>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="form_basic.html#">Action</a></li>
                                                <li><a href="form_basic.html#">Another action</a></li>
                                                <li><a href="form_basic.html#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="form_basic.html#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white" type="submit">Cancel</button>
                                    <button class="btn btn-primary" type="submit">Save changes</button>
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

