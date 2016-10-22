<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="homestead.app/dashboard">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ $user->full_name }}</strong>    <span class="label label-primary ">{{ trans("master.$user->status") }}</span>
                             </span> <span class="text-muted text-xs block">股東or一般會員 <b class="caret"></b></span> </span> </a>
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
                <a href="homestead.app/dashboard"><i class="fa fa-edit"></i> <span class="nav-label">{{ trans("master.member_info") }}</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class=""><a href="#">{{ trans("master.edit_member_info") }}</a></li>
                    <li><a href="#">{{ trans("master.edit_password") }}</a></li>
                    <li><a href="#">{{ trans("master.true_auth") }}</a></li>
                </ul>
            </li>

            {{--點數--}}
            <li class="">
                <a href="index.html"><i class="fa fa-diamond"></i> <span class="nav-label">{{ trans("master.point_check") }}</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="#">{{ trans("master.points_exchange") }}</a></li>
                    <li><a href="#">{{ trans("master.points_transfer") }}</a></li>
                    <li><a href="#">{{ trans("master.points_purchase") }}<span class="label label-primary pull-right">NEW</span></a></li>
                </ul>
            </li>

            {{--組織圖--}}
            <li class="">
                <a href="index.html"><i class="fa fa-sitemap"></i> <span class="nav-label">{{ trans("master.map") }}</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class=""><a href="#">{{ trans("master.sponsors") }}</a></li>
                    <li><a href="#">{{ trans("master.tree_map") }}</a></li>
                    <li><a href="#">{{ trans("master.list_map") }}</a></li>
                </ul>
            </li>

    </div>
</nav>