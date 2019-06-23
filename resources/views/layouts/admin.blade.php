<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'پنل مدیریت | معرفی کتاب') }}</title>
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet">

    <!-- Scripts -->
{{--
    <script src="{{ asset('js/app.js') }}" defer></script>
--}}


    <!-- Styles -->
{{--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
--}}
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('/') }}" target="_blank" class="nav-link">خانه</a>
            </li>
        {{--    <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">تماس</a>
            </li>--}}
        </ul>

        <!-- SEARCH FORM -->
    {{--    <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>--}}

        <!-- Right navbar links -->
        <ul class="navbar-nav mr-auto">



        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <!-- Sidebar -->
        <div class="sidebar">
            <div>
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fa fa-dashboard"></i>
                                <p>
                                    داشبوردها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>داشبورد اول</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index2.html" class="nav-link active">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>داشبورد دوم</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>داشبورد سوم</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-pie-chart"></i>
                                <p>
                                    چارت‌ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/charts/chartjs.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>نمودار ChartJS</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/flot.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>نمودار Flot</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>نمودار Inline</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-tree"></i>
                                <p>
                                    اشیای گرافیکی
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/UI/general.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>عمومی</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/icons.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>آیکون‌ها</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/buttons.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>دکمه‌ها</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/sliders.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>اسلایدر‌ها</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-edit"></i>
                                <p>
                                    فرم‌ها
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/forms/general.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>اجزا عمومی</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/advanced.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>پیشرفته</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/editors.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>ویشرایشگر</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    جداول
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/tables/simple.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>جداول ساده</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/data.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>جداول داده</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">مثال‌ها</li>
                        <li class="nav-item">
                            <a href="pages/calendar.html" class="nav-link">
                                <i class="nav-icon fa fa-calendar"></i>
                                <p>
                                    تقویم
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-envelope-o"></i>
                                <p>
                                    ایمیل‌ باکس
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/mailbox/mailbox.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>اینباکس</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/mailbox/compose.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>ایجاد</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/mailbox/read-mail.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>خواندن</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-book"></i>
                                <p>
                                    صفحات
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/examples/invoice.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>سفارشات</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/profile.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>پروفایل</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/login.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>صفحه ورود</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/register.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>صفحه عضویت</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/lockscreen.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>قفل صفحه</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-plus-square-o"></i>
                                <p>
                                    بیشتر
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/examples/404.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>ارور 404</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/500.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>ارور 500</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/blank.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>صفحه خالی</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="starter.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>صفحه شروع</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">متفاوت</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-file"></i>
                                <p>مستندات</p>
                            </a>
                        </li>
                        <li class="nav-header">برچسب‌ها</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-danger"></i>
                                <p class="text">مهم</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-warning"></i>
                                <p>هشدار</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-info"></i>
                                <p>اطلاعات</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </div>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">داشبورد دوم</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">داشبورد دوم</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <section class="content">
            <div class="container-fluid">
                @yield('content')
             </div>
        </section>
    </div>

    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
{{--    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-sm-none d-md-block">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>CopyLeft &copy; 2018 <a href="http://github.com/fateme48984/">فاطمه یعقوبی</a>.</strong>
    </footer>--}}

</div>

<script src="{{ asset('js/jquery.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('js/adminlte.js') }}" defer></script>

</body>
</html>