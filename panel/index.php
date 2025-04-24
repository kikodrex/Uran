<?php

error_reporting(0);
set_time_limit(0);
session_start();

if(!isset($_SESSION['usuario']) and !isset($_SESSION['senha'])){
    header("Location:/");
    exit(); 
}

extract($_SESSION);

?>
<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><title>Dashboard</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta content="Premium Multipurpose Admin &amp; Dashboard Template" name="description"><meta content="Themesbrand" name="author"><!-- App favicon --><link rel="shortcut icon" href="/panel/images/bot.png"><link href="css/chartist-chartist.min.css" rel="stylesheet"><!-- Bootstrap Css --><link href="css/css-bootstrap.min.css" rel="stylesheet" type="text/css"><link href="css/http:-veltrix-v.php.themesbrand.com" id="bootstrap-style" rel="stylesheet" type="text/css"><!-- Icons Css --><link href="css/css-icons.min.css" rel="stylesheet" type="text/css"><!-- App Css--><link href="css/css-app.min.css" rel="stylesheet" type="text/css"><link href="css/http:-veltrix-v.php.themesbrand.com" id="app-style" rel="stylesheet" type="text/css"></head><body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar"><div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <h6 class="mb-0"><img src="images/i.png" alt="" class="avatar-sm rounded-circle mr-2"><span class="badge badge-success badge-pill">Online</span></h6>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>

        <div class="d-flex">
            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search..."><span class="fa fa-search"></span>
                </div>
            </form>

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username"><div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-none d-md-block ml-2">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="mr-2" src="images/flags-us_flag.jpg" alt="Header Language" height="16">
                    English <span class="mdi mdi-chevron-down"></span>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="badge badge-danger badge-pill">1</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-16"> Notifications (1) </h5>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="veltrix-v.php.themesbrand.html" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="ti-user"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Welcome to our panel</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">Hope you enjoy :)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="images/i.png" alt="Header Avatar"></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 align-middle mr-1"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="/panel/logout.php"><i class="bx bx-power-off font-size-17 align-middle mr-1 text-danger"></i> Logout</a>
                </div>
            </div>

        </div>
    </div>
</header><!-- ========== Left Sidebar Start ========== --><div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu"><li class="menu-title">Main</li>

                <li>
                    <a href="/panel" class="waves-effect">
                        <i class="ti-home"></i><span class="badge badge-pill badge-danger float-right">1</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Tools</li>

                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="ti-package"></i>
                        <span>Checkers</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"><li><a href="checkers">Braintree CVV</a></li>
                    </ul></li>

                <li class="menu-title">Proxy Tool</li>

                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="ti-world"></i>
                        <span>Proxy Checker</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"><li><a href="/panel/proxytool/https">Http/s</a></li>
                        <li><a href="/panel/proxytool/socks4">Socks4</a></li>
                        <li><a href="/panel/proxytool/socks5">Socks5</a></li>
                    </ul></li>

            </ul></div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">Dashboard</h4>
                                <ol class="breadcrumb mb-0"><li class="breadcrumb-item active">Welcome to Team Robber!</li>
                                </ol></div>
                        </div>

</div>                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                            <i class="fas fa-check-square"></i></div>
                                        <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Total Lives</h5>
                                        <h4 class="font-weight-medium font-size-24">1<i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right">
                                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                        </div>

                                        <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                            <i class="fas fa-user-alt"></i></div>
                                        <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Total User</h5>
                                        <h4 class="font-weight-medium font-size-24">1<i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right">
                                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                        </div>

                                        <p class="text-white-50 mb-0 mt-1">Registered Users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                            <i class="fas fa-pen"></i></div>
                                        <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Total Logins</h5>
                                        <h4 class="font-weight-medium font-size-24">20<i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right">
                                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                        </div>

                                        <p class="text-white-50 mb-0 mt-1">Users Success Login</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                            <i class="far fa-money-bill-alt"></i></div>
                                        <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Credits</h5>
                                        <h4 class="font-weight-medium font-size-24">454<i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right">
                                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                        </div>

                                        <p class="text-white-50 mb-0 mt-1">Users Credit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-9">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Earn Money</h4>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div>
                                                <div id="chart-with-area" class="ct-chart earning ct-golden-section">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="text-center">
                                                        <p class="text-muted mb-4">Last Year</p>
                                                        <h3>$50,252</h3>
                                                        <p class="text-muted mb-5">It will be as simple as in fact it
                                                            will be occidental.</p>
                                                        <span class="peity-donut" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">4/5</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="text-center">
                                                        <p class="text-muted mb-4">This Month</p>
                                                        <h3>$36,253</h3>
                                                        <p class="text-muted mb-5">It will be as simple as in fact it
                                                            will be occidental.</p>
                                                        <span class="peity-donut" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">3/5</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <!-- end card -->
                        </div>

                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <h4 class="card-title mb-4">Sales Analytics</h4>
                                    </div>
                                    <div class="wid-peity mb-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted">Online Users</p>
                                                    <h5 class="mb-4">1</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wid-peity mb-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted">Offline</p>
                                                    <h5 class="mb-4">0</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted">Monthly</p>
                                                    <h5>50,574</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Report</h4>

                                    <div class="cleafix">
                                        <p class="float-left"><i class="mdi mdi-calendar mr-1 text-primary"></i> November
                                            - December</p>
                                    </div>

                                    <div id="ct-donut" class="ct-chart wid"></div>

                                    <div class="mt-4">
                                        <table class="table mb-0"><tbody><tr><td><span class="badge badge-primary">Desk</span></td>
                                                    <td>Desktop</td>
                                                    <td class="text-right">80.5%</td>
                                                </tr><tr><td><span class="badge badge-success">Mob</span></td>
                                                    <td>Mobile</td>
                                                    <td class="text-right">10.0%</td>
                                                </tr><tr><td><span class="badge badge-warning">Tab</span></td>
                                                    <td>Tablets</td>
                                                    <td class="text-right">17.5%</td>
                                                </tr></tbody></table></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Logs</h4>
                                    <ol class="activity-feed"><li class="feed-item">
                                            <div class="feed-item-list">
                                                <span class="date">Nov 1</span>
                                                <span class="activity-text">Admin is online</span>
                                            </div>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <span class="date">Nov 2</span>
                                                <span class="activity-text">Admin add your credits</span>
                                            </div>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <span class="date">Nov 5</span>
                                                <span class="activity-text">Admin change the theme</span>
                                            </div>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <span class="date">Nov 25</span>
                                                <span class="activity-text">You have receive has 1 point</span>
                                            </div>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <span class="date">Dec 25</span>
                                                <span class="activity-text">Other members used ddos in your site!</span>
                                            </div>
                                        </li>
                                    </ol><div class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <div class="py-4">
                                                <i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>

                                                <h5 class="text-primary mt-4">Daily Points</h5>
                                                <p class="text-muted">You have receive points</p>
                                                <div class="mt-4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-primary">
                                        <div class="card-body">
                                            <div class="text-center text-white py-4">
                                                <h1>Premium</h1>
                                                <p class="font-size-14 pt-1">Accounts</p>
                                                <p class="font-size-14 pt-1">Php 500 access for 3 CVV B3 Checkers</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Announcement</h4>
                                            <p class="text-muted mb-3 pb-4">"Everyone has receive points to your account"</p>
                                            <div class="float-right mt-2">
                                            </div>
                                            <h6 class="mb-0"><img src="images/bot.png" alt="" class="avatar-sm rounded-circle mr-2">BOT</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- End Page-content -->
            <footer class="footer"><div class="container-fluid">
        <div class="row">
            <div class="col-12">
                &copy; 2020 Team Robber <span class="d-none d-sm-inline-block"><i class="mdi mdi-heart text-danger"></i></span>
            </div>
        </div>
    </div>
</footer></div>
        <!-- end main content-->
    </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
    <script src="js/jquery-jquery.min.js"></script><script src="js/js-bootstrap.bundle.min.js"></script><script src="js/metismenu-metisMenu.min.js"></script><script src="js/simplebar-simplebar.min.js"></script><script src="js/node-waves-waves.min.js"></script><!-- Peity chart--><script src="js/peity-jquery.peity.min.js"></script><!-- Plugin Js--><script src="js/chartist-chartist.min.js"></script><script src="js/chartist-plugin-tooltips-chartist-plugin-tooltip.min.js"></script><script src="js/pages-dashboard.init.js"></script><script src="js/js-app.js"></script></body></html>
