<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<title>Master Template</title>
</head>
<body class="bg_none">
	<div class="main-wrapper">
        <!--top bar-->
		<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <div id="fade-menu" class="pull-left">
                        <ul class="clearfix" id="mobile-nav">
                            <li>
                                <a href="javascript:void(0)" class="arrow_down">Master Data</a>
                                <ul style="top: 34px; display: none; visibility: visible;">
                                    <li>
                                        <a href="#">Items</a>
                                    </li>
                                    <li>
                                        <a href="#">Users</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/top bar-->
        <!--header-->
        <header>
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <div class="main-logo"><a href="index28ad.html?page=dashboard"><img src="img/beoro_logo.png" alt="Beoro Admin"></a></div>
                    </div>
                    <div class="span6">
                        <div class="user-box">
                            <div class="user-box-inner">
                                <img src="img/avatars/avatar.png" alt="" class="user-avatar img-avatar">
                                <div class="user-info">
                                    Welcome, <strong>Jonathan</strong>
                                    <ul class="unstyled">
                                        <li><a href="index0aa3.html?page=user_profile">Settings</a></li>
                                        <li>·</li>
                                        <li><a href="login.html">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--/header-->
        <!--breadcrumb-->
        <div class="container">
            <ul id="breadcrumbs">
                <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
                <li><a href="javascript:void(0)">Content</a></li>
                <li><a href="javascript:void(0)">Article: Lorem ipsum dolor...</a></li>
                <li><a href="javascript:void(0)">Comments</a></li>
                <li><span>Lorem ipsum dolor sit amet...</span></li>
            </ul>
        </div>
        <!--/breadcrumb-->

        <!--main content-->
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <div class="w-box w-box-blue">
                        <div class="w-box-header">Box header</div>
                        <div class="w-box-content cnt_a">
                            Box content
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span6">
                    <div class="w-box w-box-green">
                        <div class="w-box-header">Box header</div>
                        <div class="w-box-content cnt_a">
                            Box content
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <div class="w-box w-box-orange">
                        <div class="w-box-header">Box header</div>
                        <div class="w-box-content cnt_a">
                            Box content
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="w-box">
                        <div class="w-box-header">Box header</div>
                        <div class="w-box-content cnt_a">
                            Box content
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/main content-->

        <!--footer space -->
        <div class="footer_space"></div>
	</div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="span5">
                    <div>© Your Company 2012</div>
                </div>
                <div class="span7">
                    <ul class="unstyled">
                        <li><a href="#">First link</a></li>
                        <li>·</li>
                        <li><a href="#">Second link</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>