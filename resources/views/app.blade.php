<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->

    <link type="text/css" href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link type="text/css" href="{{ URL::asset('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link type="text/css" href="{{ URL::asset('css/custom.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('css/maps/jquery-jvectormap-2.0.1.css')}}" rel="stylesheet" >
    <link type="text/css" href="{{ URL::asset('css/icheck/flat/green.css')}}" rel="stylesheet" >
    <link type="text/css" href="{{ URL::asset('css/floatexamples.css')}}" rel="stylesheet" type="text/css" >
    @yield('css')

</head>
<body class="nav-md">
<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title">
                        <i class="fa fa-building-o"></i>
                        <span>@lang('variables.company_name')</span>
                    </a>
                </div>
                <div class="clearfix"></div>

                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <div class="img-circle profile_img">
                            <i class="fa fa-3x fa-user" style="margin-left: 7px;"></i>
                        </div>
                    </div>
                    <div class="profile_info">
                        <span>@lang('variables.welcome')</span>
                        <h2>{{Auth::user()->name}}</h2>
                    </div>
                </div>
                <!-- /menu prile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <ul class="nav side-menu">
                            <br>
                            <h3>Operations</h3>
                            <li>
                                <a>
                                    <i class="fa fa-paint-brush"></i>
                                    @lang('variables.details')
                                    <span class="fa fa-chevron-down"></span>
                                </a>
                                <ul class="nav child_menu" style="display: none">
                                    <li>
                                        <a href="/detail" class="dash_link">
                                            @lang('variables.search')
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/detail/create">
                                            @lang('variables.add') @lang('variables.detail')
                                        </a>
                                        </li>
                                </ul>
                            </li>
                            <li>
                                <a>
                                    <i class="fa fa-empire"></i>
                                    @lang('variables.materials')
                                    <span class="fa fa-chevron-down"></span>
                                </a>
                                <ul class="nav child_menu" style="display: none">
                                    <li>
                                        <a href="/material" class="dash_link">
                                            @lang('variables.search')
                                          </a>
                                    </li>
                                    <li>
                                        <a role="button"  href="/material/create" class="dash_link">

                                            @lang('variables.add') @lang('variables.material')
                                           </a>
                                        </li>
                                </ul>
                            </li>
                            <li>
                                <a>
                                    <i class="fa fa-female"></i>
                                    @lang('variables.products')
                                    <span class="fa fa-chevron-down"></span>
                                </a>
                                <ul class="nav child_menu" style="display: none">
                                    <li>
                                        <a href="/product" class="dash_link">
                                            @lang('variables.search')
                                          </a>
                                    </li>
                                    <li>
                                        <a role="button"  href="/product/create" class="dash_link">

                                            @lang('variables.add') @lang('variables.product')
                                           </a>
                                        </li>
                                </ul>
                            </li>
                            <li>
                                <a>
                                    <i class="fa fa-users"></i>
                                    @lang('variables.traders')
                                    <span class="fa fa-chevron-down"></span>
                                </a>
                                <ul class="nav child_menu" style="display: none">
                                    <li>
                                        <a href="/trader?type=trader" class="dash_link">
                                            @lang('variables.search')
                                          </a>
                                    </li>
                                    <li>
                                        <a role="button"  href="/trader/create?type=trader" class="dash_link">

                                            @lang('variables.add') @lang('variables.trader')
                                           </a>
                                        </li>
                                </ul>
                            </li>
                            <li>
                                <a>
                                    <i class="fa fa-book"></i>
                                    @lang('variables.customers')
                                    <span class="fa fa-chevron-down"></span>
                                </a>
                                <ul class="nav child_menu" style="display: none">
                                    <li>
                                        <a href="/trader?type=customer" class="dash_link">
                                            @lang('variables.customer')
                                          </a>
                                    </li>
                                    <li>
                                        <a role="button"  href="/trader/create?type=customer" class="dash_link">

                                            @lang('variables.add') @lang('variables.customer')
                                           </a>
                                        </li>
                                </ul>
                            </li>
                            <li>
                                <a>
                                    <i class="fa fa-map-marker"></i>
                                    @lang('variables.printing_places')
                                    <span class="fa fa-chevron-down"></span>
                                </a>
                                <ul class="nav child_menu" style="display: none">
                                    <li>
                                        <a href="/trader?type=printing_place" class="dash_link">
                                            @lang('variables.printing_places')
                                          </a>
                                    </li>
                                    <li>
                                        <a role="button"  href="/trader/create?type=printing_place" class="dash_link">

                                            @lang('variables.add') @lang('variables.printing_place')
                                           </a>
                                        </li>
                                </ul>
                            </li>
                            <li>
                                <a>
                                    <i class="fa fa-table"></i>
                                    @lang('variables.orders') @lang('variables.details')
                                    <span class="fa fa-chevron-down"></span>
                                </a>
                                <ul class="nav child_menu" style="display: none">
                                    <li>
                                        <a href="/detail_order" class="dash_link">
                                            @lang('variables.printing_places')
                                          </a>
                                    </li>
                                    <li>
                                        <a role="button"  href="/detail_order/create" class="dash_link">

                                            @lang('variables.add')  @lang('variables.order') @lang('variables.detail')
                                           </a>
                                        </li>
                                </ul>
                            </li>
                            {{--<li>--}}
                                {{--<a>--}}
                                    {{--<i class="fa fa-table"></i>--}}
                                    {{--@lang('variables.orders') @lang('variables.details')--}}
                                    {{--<span class="fa fa-chevron-down"></span>--}}
                                {{--</a>--}}
                                {{--<ul class="nav child_menu" style="display: none">--}}
                                    {{--<li>--}}
                                        {{--<a href="/detail_order" class="dash_link">--}}
                                            {{--@lang('variables.printing_places')--}}
                                          {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a role="button"  href="/detail_order/create" class="dash_link">--}}

                                            {{--@lang('variables.add')  @lang('variables.order') @lang('variables.detail')--}}
                                           {{--</a>--}}
                                        {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}

                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user"></i>
                                {{Auth::user()->name}}
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                <li>
                                    <a href="/auth/logout">
                                        <i class="fa fa-sign-out pull-right"></i>
                                        @lang('variables.logout')
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">

            <div class="row" style="direction: rtl">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="dashboard_graph">
                        @yield('content')
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <br />

            <!-- footer content -->

            <footer>
                <div class="">
                    <p class="pull-right">This system is done by <a>Lab 124</a>. |
                        <span class="lead"> <i class="fa fa-laptop"></i> Lab 124</span>
                    </p>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
        <!-- /page content -->

    </div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>
<script src="{{ URL::asset('js/jquery-2.1.3.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('js/nprogress.js')}}"></script>

<script src="{{ URL::asset('js/custom.js')}}"></script>
@yield('js')
</body>
</html>