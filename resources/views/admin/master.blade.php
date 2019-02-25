<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/js/components/bootstrap/dist/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/icon/themify-icons/themify-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/icon/icofont/css/icofont.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/pages/flag-icon/flag-icon.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/pages/menu-search/css/component.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/css/color/color-1.css')}}" id="color" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/css/linearicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/css/simple-line-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/css/ionicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/css/jquery.mCustomScrollbar.css')}}">
</head>

<body>

    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header" header-theme="theme4">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!"><i class="ti-menu"></i></a>
                        <a class="mobile-search morphsearch-search" href="#"><i class="ti-search"></i></a>
                        <a href="index.html"><img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" /></a>
                        <a class="mobile-options"><i class="ti-more"></i></a>
                    </div>
                    @yield('header')
                </div>
            </nav>

            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="card-block">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                                    title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left"
                                    title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left"
                                    title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left"
                                    title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left"
                                    title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip"
                                    data-placement="left" title="Michael Scofield">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Michael Scofield</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left"
                                    title="Irina Shayk">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Irina Shayk</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left"
                                    title="Sara Tancredi">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Sara Tancredi</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left"
                                    title="Samon">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Samon</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left"
                                    title="Daizy Mendize">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Daizy Mendize</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left"
                                    title="Loren Scofield">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Loren Scofield</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left"
                                    title="Shayk">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Shayk</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left"
                                    title="Sara">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Sara</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left"
                                    title="Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left"
                                    title="Lary">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                                        <i class="icofont icofont-rounded-left"></i> Josephin Doe
                                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                                        <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                                        <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                    </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="icofont icofont-paper-plane"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar" pcoded-header-position="relative">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40" src="assets/images/user.png" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>John Doe</span>
                                        <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="#!"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-home"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="index.html">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.default">Default</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dashboard-ecommerce.html">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.ecommerce">Ecommerce</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dashboard-crm.html">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.crm">CRM</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dashboard-analytics.html">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.analytics">Analytics</span>
                                        <span class="pcoded-badge label label-info ">NEW</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dashboard-project.html">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.project">Project</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Page layouts</span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                        <span class="pcoded-mtext">Vertical</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="menu-static.html" data-i18n="nav.page_layout.vertical.static-layout">
                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                        <span class="pcoded-mtext">Static Layout</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-header-fixed.html" data-i18n="nav.page_layout.vertical.header-fixed">
                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                        <span class="pcoded-mtext">Header Fixed</span>
                                        <span class="pcoded-mcaret"></span></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-compact.html" data-i18n="nav.page_layout.vertical.compact">
                                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                        <span class="pcoded-mtext">Compact</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-sidebar.html" data-i18n="nav.page_layout.vertical.sidebar-fixed">
                                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                        <span class="pcoded-mtext">Sidebar Fixed</span>
                                                        <span class="pcoded-mcaret"></span>
</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)" data-i18n="nav.page_layout.horizontal.main">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Horizontal</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="menu-horizontal-static.html" target="_blank" data-i18n="nav.page_layout.horizontal.static-layout">
                                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                        <span class="pcoded-mtext">Static Layout</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-fixed.html" target="_blank" data-i18n="nav.page_layout.horizontal.fixed-layout">
                                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                        <span class="pcoded-mtext">Fixed layout</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-icon.html" target="_blank" data-i18n="nav.page_layout.horizontal.static-with-icon">
                                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                        <span class="pcoded-mtext">Static With Icon</span>
                                                         <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-icon-fixed.html" target="_blank" data-i18n="nav.page_layout.horizontal.fixed-with-icon">
                                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                        <span class="pcoded-mtext">Fixed With Icon</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="menu-bottom.html" data-i18n="nav.page_layout.bottom-menu">

                                    </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Accordion</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html">
<i class="icofont icofont-home"></i>
</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Basic Components</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Accordion</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">

                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">MULTIPLE OPEN ACCORDION</h5>
                                                    </div>
                                                    <div class="card-block accordion-block">
                                                        <div id="accordion" role="tablist" aria-multiselectable="true">
                                                            <div class="accordion-panel">
                                                                <div class="accordion-heading" role="tab" id="headingOne">
                                                                    <h3 class="card-title accordion-title">
                                                                        <a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
Lorem Message 1
</a>
                                                                    </h3>
                                                                </div>
                                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                    <div class="accordion-content accordion-desc">
                                                                        <p>
                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                                            text ever since the 1500s, when an unknown printer
                                                                            took a galley of type and scrambled it to make
                                                                            a type specimen book. It has survived not only
                                                                            five centuries, but also the leap into electronic
                                                                            typesetting, remaining essentially unchanged.
                                                                            It was popularised in the 1960s with the release
                                                                            of Letraset sheets containing Lorem Ipsum passages,
                                                                            and more recently with desktop publishing software
                                                                            like Aldus PageMaker including versions of Lorem
                                                                            Ipsum.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-panel">
                                                                <div class="accordion-heading" role="tab" id="headingTwo">
                                                                    <h3 class="card-title accordion-title">
                                                                        <a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
Lorem Message 2
</a>
                                                                    </h3>
                                                                </div>
                                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                    <div class="accordion-content accordion-desc">
                                                                        <p>
                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                                            text ever since the 1500s, when an unknown printer
                                                                            took a galley of type and scrambled it to make
                                                                            a type specimen book. It has survived not only
                                                                            five centuries, but also the leap into electronic
                                                                            typesetting, remaining essentially unchanged.
                                                                            It was popularised in the 1960s with the release
                                                                            of Letraset sheets containing Lorem Ipsum passages,
                                                                            and more recently with desktop publishing software
                                                                            like Aldus PageMaker including versions of Lorem
                                                                            Ipsum.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-panel">
                                                                <div class=" accordion-heading" role="tab" id="headingThree">
                                                                    <h3 class="card-title accordion-title">
                                                                        <a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
Lorem Message 3
</a>
                                                                    </h3>
                                                                </div>
                                                                <div id="collapseThree" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingThree">
                                                                    <div class="accordion-content accordion-desc">
                                                                        <p>
                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                                            text ever since the 1500s, when an unknown printer
                                                                            took a galley of type and scrambled it to make
                                                                            a type specimen book. It has survived not only
                                                                            five centuries, but also the leap into electronic
                                                                            typesetting, remaining essentially unchanged.
                                                                            It was popularised in the 1960s with the release
                                                                            of Letraset sheets containing Lorem Ipsum passages,
                                                                            and more recently with desktop publishing software
                                                                            like Aldus PageMaker including versions of Lorem
                                                                            Ipsum.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">Single Open Accordion</h5>
                                                    </div>
                                                    <div class="card-block accordion-block">
                                                        <div class="accordion-box" id="single-open">
                                                            <a class="accordion-msg">Lorem Message 1</a>
                                                            <div class="accordion-desc">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                                    text ever since the 1500s, when an unknown printer took
                                                                    a galley of type and scrambled it to make a type specimen
                                                                    book. It has survived not only five centuries, but also
                                                                    the leap into electronic typesetting, remaining essentially
                                                                    unchanged. It was popularised in the 1960s with the release
                                                                    of Letraset sheets containing Lorem Ipsum passages, and
                                                                    more .
                                                                </p>
                                                            </div>
                                                            <a class="accordion-msg">Lorem Message 2</a>
                                                            <div class="accordion-desc">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                                    text ever since the 1500s, when an unknown printer took
                                                                    a galley of type and scrambled it to make a type specimen
                                                                    book. It has survived not only five centuries, but also
                                                                    the leap into electronic typesetting, remaining essentially
                                                                    unchanged. It was popularised in the 1960s with the release
                                                                    of Letraset sheets containing Lorem Ipsum passages, and
                                                                    more .
                                                                </p>
                                                            </div>
                                                            <a class="accordion-msg">Lorem Message 3</a>
                                                            <div class="accordion-desc">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                                    text ever since the 1500s, when an unknown printer took
                                                                    a galley of type and scrambled it to make a type specimen
                                                                    book. It has survived not only five centuries, but also
                                                                    the leap into electronic typesetting, remaining essentially
                                                                    unchanged. It was popularised in the 1960s with the release
                                                                    of Letraset sheets containing Lorem Ipsum passages, and
                                                                    more .
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">SCALE ACCORDION</h5>
                                                    </div>
                                                    <div class="card-block accordion-block">
                                                        <div class="accordion-box" id="sclae-accordion">
                                                            <a class="accordion-msg">Lorem Message 1</a>
                                                            <div class="accordion-desc">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                                    text ever since the 1500s, when an unknown printer took
                                                                    a galley of type and scrambled it to make a type specimen
                                                                    book. It has survived not only five centuries, but also
                                                                    the leap into electronic typesetting, remaining essentially
                                                                    unchanged. It was popularised in the 1960s with the release
                                                                    of Letraset sheets containing Lorem Ipsum passages, and
                                                                    more recently with desktop publishing software like Aldus
                                                                    PageMaker including versions of Lorem Ipsum.
                                                                </p>
                                                            </div>
                                                            <a class="accordion-msg">Lorem Message 2</a>
                                                            <div class="accordion-desc">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                                    text ever since the 1500s, when an unknown printer took
                                                                    a galley of type and scrambled it to make a type specimen
                                                                    book. It has survived not only five centuries, but also
                                                                    the leap into electronic typesetting, remaining essentially
                                                                    unchanged. It was popularised in the 1960s with the release
                                                                    of Letraset sheets containing Lorem Ipsum passages, and
                                                                    more recently with desktop publishing software like Aldus
                                                                    PageMaker including versions of Lorem Ipsum.
                                                                </p>
                                                            </div>
                                                            <a class="accordion-msg">Lorem Message 3</a>
                                                            <div class="accordion-desc">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                                    text ever since the 1500s, when an unknown printer took
                                                                    a galley of type and scrambled it to make a type specimen
                                                                    book. It has survived not only five centuries, but also
                                                                    the leap into electronic typesetting, remaining essentially
                                                                    unchanged. It was popularised in the 1960s with the release
                                                                    of Letraset sheets containing Lorem Ipsum passages, and
                                                                    more recently with desktop publishing software like Aldus
                                                                    PageMaker including versions of Lorem Ipsum.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">COLOR ACCORDION</h5>
                                                    </div>
                                                    <div class="card-block accordion-block color-accordion-block">
                                                        <div class="color-accordion" id="color-accordion">
                                                            <a class="accordion-msg bg-primary b-none">Lorem Message 1</a>
                                                            <div class="accordion-desc">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                                    text ever since the 1500s, when an unknown printer took
                                                                    a galley of type and scrambled it to make a type specimen
                                                                    book. It has survived not only five centuries, but also
                                                                    the leap into electronic typesetting, remaining essentially
                                                                    unchanged. It was popularised in the 1960s with the release
                                                                    of Letraset sheets containing Lorem Ipsum passages, and
                                                                    more .
                                                                </p>
                                                            </div>
                                                            <a class="accordion-msg bg-dark-primary b-none">Lorem Message 2</a>
                                                            <div class="accordion-desc">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                                    text ever since the 1500s, when an unknown printer took
                                                                    a galley of type and scrambled it to make a type specimen
                                                                    book. It has survived not only five centuries, but also
                                                                    the leap into electronic typesetting, remaining essentially
                                                                    unchanged. It was popularised in the 1960s with the release
                                                                    of Letraset sheets containing Lorem Ipsum passages, and
                                                                    more .
                                                                </p>
                                                            </div>
                                                            <a class="accordion-msg bg-darkest-primary b-none">Lorem Message 3</a>
                                                            <div class="accordion-desc">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                                    text ever since the 1500s, when an unknown printer took
                                                                    a galley of type and scrambled it to make a type specimen
                                                                    book. It has survived not only five centuries, but also
                                                                    the leap into electronic typesetting, remaining essentially
                                                                    unchanged. It was popularised in the 1960s with the release
                                                                    of Letraset sheets containing Lorem Ipsum passages, and
                                                                    more .
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div id="styleSelector">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->



    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/tether/dist/js/tether.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/modernizr/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/modernizr/feature-detects/css-scrollbars.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/classie/classie.js')}}"></script>

    <script type="text/javascript" src="assets/pages/accordion/accordion.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/i18next/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/i18next-xhr-backend/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/jquery-i18next/jquery-i18next.min.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('assets/admin/js/script.js')}}"></script>
    <script src="{{URL::asset('assets/admin/js/pcoded.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/js/demo-12.js')}}"></script>
    <script src="{{URL::asset('assets/admin/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/js/jquery.mousewheel.min.js')}}"></script>
</body>

</html>