<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="/dashboard">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ $user->full_name }}</strong>    <span class="label label-primary ">{{ trans("master.".$user->status) }}</span>
                             </span> <span class="text-muted text-xs block">{{ trans("master.".$user->type) }}<b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">{{ trans("master.member_info") }}</a></li>
                        <li><a href="#">{{ trans("master.contact_service") }}</a></li>
                        <li><a href="#">{{ trans("master.document") }}</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">{{ trans("master.logout") }}</a></li>
                    </ul>
                </div>

            </li>
            {{--//基本資料--}}
            <li class="">
                <a href="/dashboard"><i class="fa fa-edit"></i> <span class="nav-label">{{ trans("master.member_info") }}</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class=""><a href="/editmemberinfo">{{ trans("master.edit_member_info") }}</a></li>
                    <li><a href="/editpassword">{{ trans("master.edit_password") }}</a></li>
                    <li><a href="/editsecondpassword">{{ trans("master.edit_second_password") }}</a></li>
                    <li><a href="/realname">{{ trans("master.real_name") }}</a></li>
                </ul>
            </li>

            {{--點數--}}
            <li class="">
                <a href="index.html"><i class="fa fa-diamond"></i> <span class="nav-label">{{ trans("master.point_check") }}</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="/pointexchange">{{ trans("master.points_exchange") }}</a></li>
                    <li><a href="/pointtransfer">{{ trans("master.points_transfer") }}</a></li>
                    <li><a href="#">{{ trans("master.points_purchase") }}<span class="label label-primary pull-right">即將開放</span></a></li>
                </ul>
            </li>

            {{--組織圖--}}
            <li class="">
                <a href="index.html"><i class="fa fa-sitemap"></i> <span class="nav-label">{{ trans("master.map") }}</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class=""><a href="/sponsorlist">{{ trans("master.sponsors") }}</a></li>
                    {{--<li><a href="#">{{ trans("master.tree_map") }}</a></li>--}}
                    <li><a href="/listmap">{{ trans("master.list_map") }}</a></li>
                </ul>
            </li>

    </div>
</nav>