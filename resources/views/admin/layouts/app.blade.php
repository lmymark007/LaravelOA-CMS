<!DOCTYPE html>

<html class="app-ui">

<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Document title -->
    <title>Dashboard</title>

    <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
    <meta name="author" content="rustheme" />
    <meta name="robots" content="noindex, nofollow" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" href="{{ asset('assets/img/favicons/favicon.ico') }}" />

    <!-- Google fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/slick/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/slick/slick-theme.min.css') }}" />

    <!-- AppUI CSS stylesheets -->
    <link rel="stylesheet" id="css-font-awesome" href="{{ asset('assets/css/font-awesome.css') }}" />
    <link rel="stylesheet" id="css-ionicons" href="{{ asset('assets/css/ionicons.css') }}" />
    <link rel="stylesheet" id="css-bootstrap" href="{{ asset('assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" id="css-app" href="{{ asset('assets/css/app.css') }}" />
    <link rel="stylesheet" id="css-app-custom" href="{{ asset('assets/css/app-custom.css') }}" />
    <!-- End Stylesheets -->
</head>

<body class="app-ui layout-has-drawer layout-has-fixed-header">
<div class="app-layout-canvas">
    <div class="app-layout-container">

        <!-- Drawer -->
        <aside class="app-layout-drawer">

            <!-- Drawer scroll area -->
            <div class="app-layout-drawer-scroll">
                <!-- Drawer logo -->
                <div id="logo" class="drawer-header">
                    <a href="index.html">
                        <img class="img-responsive" src="/assets/img/logo/logo-backend.png" title="AppUI" alt="AppUI" />
                    </a>
                </div>

                <!-- Drawer navigation -->
                <nav class="drawer-main">
                    <ul class="nav nav-drawer">
                        <li class="nav-item nav-drawer-header">系统</li>

                        <li class="nav-item nav-item-has-subnav open">
                            <a href="javascript:void(0)"><i class="ion-ios-calculator-outline"></i>系统功能</a>
                            <ul class="nav nav-subnav">

                                <li>
                                    <a href="/admin/setting">系统设置</a>
                                </li>

                                <li>
                                    <a href="base_ui_cards.html">导航管理</a>
                                </li>

                                <li>
                                    <a href="base_ui_cards_api.html">幻灯片</a>
                                </li>

                                <li>
                                    <a href="base_ui_layout.html">配置管理</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-item-has-subnav">
                            <a href="javascript:void(0)"><i class="ion-ios-compose-outline"></i> Forms</a>
                            <ul class="nav nav-subnav">

                                <li>
                                    <a href="base_forms_elements.html">Elements</a>
                                </li>

                                <li>
                                    <a href="base_forms_samples.html">Samples</a>
                                </li>

                                <li>
                                    <a href="base_forms_pickers_select.html">Pickers &amp; Select</a>
                                </li>

                                <li>
                                    <a href="base_forms_validation.html">Validation</a>
                                </li>

                                <li>
                                    <a href="base_forms_wizard.html">Wizard</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-item-has-subnav">
                            <a href="javascript:void(0)"><i class="ion-ios-list-outline"></i> Tables</a>
                            <ul class="nav nav-subnav">

                                <li>
                                    <a href="base_tables_styles.html">Styles</a>
                                </li>

                                <li>
                                    <a href="base_tables_responsive.html">Responsive</a>
                                </li>

                                <li>
                                    <a href="base_tables_tools.html">Tools</a>
                                </li>

                                <li>
                                    <a href="base_tables_pricing.html">Pricing</a>
                                </li>

                                <li>
                                    <a href="base_tables_datatables.html">Wizard</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-item-has-subnav">
                            <a href="javascript:void(0)"><i class="ion-ios-browsers-outline"></i> Pages</a>
                            <ul class="nav nav-subnav">

                                <li>
                                    <a href="base_pages_blank.html">Blank</a>
                                </li>

                                <li>
                                    <a href="base_pages_inbox.html">Inbox</a>
                                </li>

                                <li>
                                    <a href="base_pages_invoice.html">Invoice</a>
                                </li>

                                <li>
                                    <a href="base_pages_profile.html">Profile</a>
                                </li>

                                <li>
                                    <a href="base_pages_search.html">Search</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-item-has-subnav">
                            <a href="javascript:void(0)"><i class="ion-social-javascript-outline"></i> JS plugins</a>
                            <ul class="nav nav-subnav">

                                <li>
                                    <a href="base_js_maps.html">Maps</a>
                                </li>

                                <li>
                                    <a href="base_js_sliders.html">Sliders</a>
                                </li>

                                <li>
                                    <a href="base_js_charts_flot.html">Charts - Flot</a>
                                </li>

                                <li>
                                    <a href="base_js_charts_chartjs.html">Charts - Chart.js</a>
                                </li>

                                <li>
                                    <a href="base_js_charts_sparkline.html">Charts - Sparkline</a>
                                </li>

                                <li>
                                    <a href="base_js_draggable.html">Draggable</a>
                                </li>

                                <li>
                                    <a href="base_js_syntax_highlight.html">Syntax highlight</a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- End drawer navigation -->

                <div class="drawer-footer">
                    <p class="copyright">Copyright &copy; 2019.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
                </div>
            </div>
            <!-- End drawer scroll area -->
        </aside>
        <!-- End drawer -->

        <!-- Header -->
        <header class="app-layout-header">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <button class="pull-left hidden-lg hidden-md navbar-toggle" type="button" data-toggle="layout" data-action="sidebar_toggle">
                            <span class="sr-only">Toggle drawer</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="navbar-page-title">

					Dashboard
				</span>
                    </div>

                    <div class="collapse navbar-collapse" id="header-navbar-collapse">
                        <!-- Header search form -->
                        <form class="navbar-form navbar-left app-search-form" role="search">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="search" id="search-input" placeholder="Search..." />
                                    <span class="input-group-btn">
								<button class="btn" type="button"><i class="ion-ios-search-strong"></i></button>
							</span>
                                </div>
                            </div>
                        </form>

                        <ul id="main-menu" class="nav navbar-nav navbar-left">
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">English <span class="caret"></span></a>

                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">French</a></li>
                                    <li><a href="javascript:void(0)">German</a></li>
                                    <li><a href="javascript:void(0)">Italian</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">Pages <span class="caret"></span></a>

                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Analytics</a></li>
                                    <li><a href="javascript:void(0)">Visits</a></li>
                                    <li><a href="javascript:void(0)">Changelog</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- .navbar-left -->

                        <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">
                            <li>
                                <!-- Opens the modal found at the bottom of the page -->
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#apps-modal"><i class="ion-grid"></i></a>
                            </li>

                            <li class="dropdown">
                                <a href="javascript:void(0)" data-toggle="dropdown"><i class="ion-ios-bell"></i> <span class="badge">3</span></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-header">Profile</li>
                                    <li>
                                        <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">3</span> News </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span> Messages </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">More</li>
                                    <li>
                                        <a tabindex="-1" href="javascript:void(0)">Edit Profile..</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-profile">
                                <a href="javascript:void(0)" data-toggle="dropdown">
                                    <span class="m-r-sm">John Doe <span class="caret"></span></span>
                                    <img class="img-avatar img-avatar-48" src="/assets/img/avatars/avatar3.jpg" alt="User profile pic" />
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-header">
                                        Pages
                                    </li>
                                    <li>
                                        <a href="base_pages_profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a href="base_pages_profile.html"><span class="badge badge-success pull-right">3</span> Blog</a>
                                    </li>
                                    <li>
                                        <a href="frontend_login_signup.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- .navbar-right -->
                    </div>
                </div>
                <!-- .container-fluid -->
            </nav>
            <!-- .navbar-default -->
        </header>
        <!-- End header -->

        <main class="app-layout-content">

            <!-- Page Content -->
            @yield('content')
            <!-- .container-fluid -->
            <!-- End Page Content -->

        </main>

    </div>
    <!-- .app-layout-container -->
</div>
<!-- .app-layout-canvas -->

<!-- Apps Modal -->
<!-- Opens from the button in the header -->
<div id="apps-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-sm modal-dialog modal-dialog-top">
        <div class="modal-content">
            <!-- Apps card -->
            <div class="card m-b-0">
                <div class="card-header bg-app bg-inverse">
                    <h4>系统功能</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-block">
                    <div class="row text-center">
                        <div class="col-xs-6">
                            <a class="card card-block m-b-0 bg-app-secondary bg-inverse" href="index.html">
                                <i class="ion-speedometer fa-4x"></i>
                                <p>Admin</p>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a class="card card-block m-b-0 bg-app-tertiary bg-inverse" href="frontend_home.html">
                                <i class="ion-laptop fa-4x"></i>
                                <p>Frontend</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- .card-block -->
            </div>
            <!-- End Apps card -->
        </div>
    </div>
</div>
<!-- End Apps Modal -->

<div class="app-ui-mask-modal"></div>

<!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
<script src="{{ asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/core/jquery.slimscroll.min.js')}}"></script>
<script src="{{ asset('assets/js/core/jquery.scrollLock.min.js')}}"></script>
<script src="{{ asset('assets/js/core/jquery.placeholder.min.js')}}"></script>
<script src="{{ asset('assets/js/app.js')}}"></script>
<script src="{{ asset('assets/js/app-custom.js')}}"></script>

<!-- Page Plugins -->
<script src="{{ asset('assets/js/plugins/slick/slick.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/chartjs/Chart.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/flot/jquery.flot.pie.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/flot/jquery.flot.stack.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/flot/jquery.flot.resize.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{ asset('assets/js/pages/index.js')}}"></script>
<script>
    $(function()
    {
        // Init page helpers (Slick Slider plugin)
        App.initHelpers('slick');
    });
</script>

</body>

</html><!DOCTYPE html>
