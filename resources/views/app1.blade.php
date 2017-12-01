<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="../fav.png">

    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/ar.css')}}">
    {{--<link rel="stylesheet" type="text/css" href="../css/login.css">--}}
    @yield('css')
</head>
<body>
<nav class="nav-color">
    <div class="container-fluid title3">
        <div class="navbar-header navbar-right">
            <a class="navbar-brand  dash_link" href="/">
                <img alt="@lang('variables.company_name')" src="">
            </a>

        </div>

        <div class="navbar-header navbar-nav">

            <a href="/auth/logout" class="navbar-brand dash_link">
                @lang('variables.logout')
            </a>

        </div>

    </div>
</nav>
<div class="">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
    <div class='container-fluid'>
        @yield('content')
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 Dashboard">
    {{--******************detail Element**************--}}
    <div class="panel-default">
        <a class="collapsed" role="button"
           data-toggle="collapse" data-parent="#accordion"
           href="#collapsedetail" aria-expanded="false"
           aria-controls="collapsedetail">
            <div class="color title4 panel_title" role="tab" id="headingdetail">
                @lang('variables.details')
            </div>
        </a>

        <div id="collapsedetail" class="panel-collapse collapse color" role="tabpanel" aria-labelledby="headingdetail">
            <div class="panel-body title5">
                <a role="button" href="/detail" class="dash_link">
                    @lang('variables.search')
                    <span class="glyphicon glyphicon-search"></span>
                </a>
                <br>
                <a role="button"  href="/detail/create" class="dash_link">

                    @lang('variables.add') @lang('variables.detail')
                    <span class="glyphicon glyphicon-plus"></span>
                </a>
            </div>
            </div>
        </div>
    {{--**********************************************--}}
    <hr>
    {{--******************Material Element******--}}
    <div class="panel-default">
        <a class="collapsed" role="button"
           data-toggle="collapse" data-parent="#accordion"
           href="#collapseMaterial" aria-expanded="false"
           aria-controls="collapseMaterial">
            <div class="color title4 panel_title" role="tab" id="headingMaterial">
                @lang('variables.materials')
            </div>
        </a>

        <div id="collapseMaterial" class="panel-collapse collapse color"
             role="tabpanel" aria-labelledby="headingMaterial">
            <div class="panel-body title5">
                <a role="button" href="/material" class="dash_link">
                    @lang('variables.search')
                    <span class="glyphicon glyphicon-search" ></span>
                </a>
                <br>
                <a role="button"  href="/material/create" class="dash_link">

                    @lang('variables.add') @lang('variables.material')
                    <span class="glyphicon glyphicon-plus"></span>
                </a>
            </div>
        </div>
    </div>
    {{--**********************************************--}}
    <hr>
    {{--******************Product Element**************--}}
    <div class="panel-default">
            <a class="collapsed" role="button"
               data-toggle="collapse" data-parent="#accordion"
               href="#collapseProduct" aria-expanded="false"
               aria-controls="collapseProduct">
                <div class="color title4 panel_title" role="tab"
                     id="headingProduct">
                    @lang('variables.products')
                </div>
            </a>

            <div id="collapseProduct" class="panel-collapse collapse color"
                 role="tabpanel" aria-labelledby="headingProduct">
                <div class="panel-body title5" >
                    <a href="/product" class="dash_link">
                        @lang('variables.search')
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                    <br>
                    <a   href="/product/create" class="dash_link">

                        @lang('variables.add') @lang('variables.product')
                        <span class="glyphicon glyphicon-plus"></span>
                    </a>
                </div>
            </div>
        </div>
    {{--**********************************************--}}
    <hr>
    {{--******************Trader Element**************--}}
    <div class="panel-default">
            <a class="collapsed" role="button"
               data-toggle="collapse" data-parent="#accordion"
               href="#collapseTrader" aria-expanded="false"
               aria-controls="collapseTrader">
                <div class="color title4 panel_title" role="tab"
                     id="headingTrader">
                    @lang('variables.traders')
                </div>
            </a>

            <div id="collapseTrader" class="panel-collapse collapse color"
                 role="tabpanel" aria-labelledby="headingTrader">
                <div class="panel-body title5" >
                    <a href="/trader?type=trader" class="dash_link">
                        @lang('variables.search')
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                    <br>
                    <a   href="/trader/create?type=trader" class="dash_link">

                        @lang('variables.add') @lang('variables.trader')
                        <span class="glyphicon glyphicon-plus"></span>
                    </a>
                </div>
            </div>
        </div>
    {{--**********************************************--}}
    <hr>
    {{--******************Customer Element**************--}}
    <div class="panel-default">
            <a class="collapsed" role="button"
               data-toggle="collapse" data-parent="#accordion"
               href="#collapseCustomer" aria-expanded="false"
               aria-controls="collapseCustomer">
                <div class="color title4 panel_title" role="tab"
                     id="headingCustomer">
                    @lang('variables.customers')
                </div>
            </a>

            <div id="collapseCustomer" class="panel-collapse collapse color"
                 role="tabpanel" aria-labelledby="headingCustomer">
                <div class="panel-body title5" >
                    <a href="/trader?type=customer" class="dash_link">
                        @lang('variables.search')
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                    <br>
                    <a   href="/trader/create?type=customer" class="dash_link">

                        @lang('variables.add') @lang('variables.customer')
                        <span class="glyphicon glyphicon-plus"></span>
                    </a>
                </div>
            </div>
        </div>
    {{--**********************************************--}}
    <hr>
    {{--******************Printing Element**************--}}
    <div class="panel-default">
            <a class="collapsed" role="button"
               data-toggle="collapse" data-parent="#accordion"
               href="#collapsePrinting" aria-expanded="false"
               aria-controls="collapsePrinting">
                <div class="color title4 panel_title" role="tab"
                     id="headingPrinting">
                    @lang('variables.printing_places')
                </div>
            </a>

            <div id="collapsePrinting" class="panel-collapse collapse color"
                 role="tabpanel" aria-labelledby="headingPrinting">
                <div class="panel-body title5" >
                    <a href="/trader?type=printing_place" class="dash_link">
                        @lang('variables.search')
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                    <br>
                    <a   href="/trader/create?type=printing_place" class="dash_link">

                        @lang('variables.add') @lang('variables.printing_place')
                        <span class="glyphicon glyphicon-plus"></span>
                    </a>
                </div>
            </div>
        </div>
    {{--**********************************************--}}
    <hr>

</div>
</div>

<script src="{{ URL::asset('/js/jquery-2.1.3.js')}}"></script>
<script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
@yield('js')
</body>
</html>