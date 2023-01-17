<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/')}}admin/images/favicon.png">
    <link rel="stylesheet" href="{{asset('/')}}admin/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="{{asset('/')}}admin/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/css/style.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="{{asset('/')}}admin/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Summernote -->
    <link href="{{asset('/')}}admin/vendor/summernote/summernote.css" rel="stylesheet">



</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="index.html" class="brand-logo">
            <img class="logo-abbr" src="{{asset('/')}}admin/images/logo.png" alt="">
            <img class="logo-compact" src="{{asset('/')}}admin/images/logo-text.png" alt="">
            <img class="brand-title" src="{{asset('/')}}admin/images/logo-text.png" alt="">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                            <div class="dropdown-menu p-0 m-0">
                                <form>
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <div class="pulse-css"></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="list-unstyled">
                                    <li class="media dropdown-item">
                                        <span class="success"><i class="ti-user"></i></span>
                                        <div class="media-body">
                                            <a href="#">
                                                <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                </p>
                                            </a>
                                        </div>
                                        <span class="notify-time">3:20 am</span>
                                    </li>
                                    <li class="media dropdown-item">
                                        <span class="primary"><i class="ti-shopping-cart"></i></span>
                                        <div class="media-body">
                                            <a href="#">
                                                <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                            </a>
                                        </div>
                                        <span class="notify-time">3:20 am</span>
                                    </li>
                                    <li class="media dropdown-item">
                                        <span class="danger"><i class="ti-bookmark"></i></span>
                                        <div class="media-body">
                                            <a href="#">
                                                <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                </p>
                                            </a>
                                        </div>
                                        <span class="notify-time">3:20 am</span>
                                    </li>
                                    <li class="media dropdown-item">
                                        <span class="primary"><i class="ti-heart"></i></span>
                                        <div class="media-body">
                                            <a href="#">
                                                <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                            </a>
                                        </div>
                                        <span class="notify-time">3:20 am</span>
                                    </li>
                                    <li class="media dropdown-item">
                                        <span class="success"><i class="ti-image"></i></span>
                                        <div class="media-body">
                                            <a href="#">
                                                <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                </p>
                                            </a>
                                        </div>
                                        <span class="notify-time">3:20 am</span>
                                    </li>
                                </ul>
                                <a class="all-notification" href="">See all notifications <i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <i class="mdi mdi-account"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{asset('/')}}admin/app-profile.html" class="dropdown-item">
                                    <i class="icon-user"></i>
                                    <span class="ml-2">Profile </span>
                                </a>
                                <a href="{{asset('/')}}admin/email-inbox.html" class="dropdown-item">
                                    <i class="icon-envelope-open"></i>
                                    <span class="ml-2">Inbox </span>
                                </a>
                                <a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Logout </span>
                                </a>
                                <form action="{{route('logout')}}" method="POST" id="logoutForm">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="quixnav">
        <div class="quixnav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label first">Main Menu</li>
                <li><a href="{{route('dashboard')}}" aria-expanded="false"><i
                            class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-app-store"></i><span class="nav-text">Category Module</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('category.add')}}">Add Category</a></li>
                        <li><a href="{{route('category.manage')}}">Manage Category</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-chart-bar-33"></i><span class="nav-text">Sub Category Module</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('sub-category.add')}}">Add Sub Category</a></li>
                        <li><a href="{{route('sub-category.manage')}}">Manage Sub Category</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon icon-world-2"></i><span class="nav-text">Brand Module</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('brand.add')}}">Add Brand</a></li>
                        <li><a href="{{route('brand.manage')}}">Manage Brand</a></li>

                    </ul>
                </li>

                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-plug"></i><span class="nav-text">Unit Module</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('unit.add')}}">Add Unit</a></li>
                        <li><a href="{{route('unit.manage')}}">Manage Unit</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-form"></i><span class="nav-text">Product module</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('product.add')}}">Add Product</a></li>
                        <li><a href="{{route('product.manage')}}">manage Product</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">Order module</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('order.manage')}}">Manage Order</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-single-copy-06"></i><span class="nav-text">User Module</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('user.add')}}">Add User</a></li>
                        <li><a href="{{route('user.manage')}}">Manage User</a></li></li>
                    </ul>
                </li>
            </ul>
        </div>


    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            @yield('body')
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('/')}}admin/vendor/global/global.min.js"></script>
<script src="{{asset('/')}}admin/js/quixnav-init.js"></script>
<script src="{{asset('/')}}admin/js/custom.min.js"></script>


<!-- Vectormap -->
<script src="{{asset('/')}}admin/vendor/raphael/raphael.min.js"></script>
<script src="{{asset('/')}}admin/vendor/morris/morris.min.js"></script>


<script src="{{asset('/')}}admin/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{asset('/')}}admin/vendor/chart.js/Chart.bundle.min.js"></script>

<script src="{{asset('/')}}admin/vendor/gaugeJS/dist/gauge.min.js"></script>

<!--  flot-chart js -->
<script src="{{asset('/')}}admin/vendor/flot/jquery.flot.js"></script>
<script src="{{asset('/')}}admin/vendor/flot/jquery.flot.resize.js"></script>

<!-- Owl Carousel -->
<script src="{{asset('/')}}admin/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<!-- Counter Up -->
<script src="{{asset('/')}}admin/vendor/jqvmap/js/jquery.vmap.min.js"></script>
<script src="{{asset('/')}}admin/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
<script src="{{asset('/')}}admin/vendor/jquery.counterup/jquery.counterup.min.js"></script>


<script src="{{asset('/')}}admin/js/dashboard/dashboard-1.js"></script>

<!-- Datatable -->
<script src="{{asset('/')}}admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/js/plugins-init/datatables.init.js"></script>
<!-- Summernote -->
<script src="{{asset('/')}}admin/vendor/summernote/js/summernote.min.js"></script>
<!-- Summernote init -->
<script src="{{asset('/')}}admin/js/plugins-init/summernote-init.js"></script>
</body>

</html>
