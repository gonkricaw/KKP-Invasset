<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
        <title>UMKM Gonkricaw</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
        <link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet" />
        <link rel="icon" href="{{ asset('backend/img/logotitle.png') }}" type="image/gif" sizes="16x16">
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Carter+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
        <script src="{{ asset('backend/js/all.min.js') }}" crossorigin="anonymous"></script>
    </head>


    <body class="sb-nav-fixed" style="background-image: url('{{ asset('backend/img/bg.jpg') }}');background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">

    <div id="app" style="font-family: 'Play', sans-serif"> 
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark" id="topbar" v-show="$route.path === '/' || $route.path === '/register' || $route.path === '/forget' ? false : true" style="display: none;"> <!-------------------->
            <router-link class="navbar-brand" to="/home"> <img src="{{ asset('backend/img/logoNav.png') }}" style="height:40px"></router-link>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>

            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <router-link class="dropdown-item" to="/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

    <div  id="leftbar" v-show="$route.path === '/' || $route.path === '/register' || $route.path === '/forget' ? false : true" style="display: none;">       
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav" style="font-family: 'play', sans-serif;">
                <nav class="sb-sidenav accordion sb-sidenav-dark shadow" id="sidenavAccordion" >
                    <div class="sb-sidenav-menu">

                        <div class="nav bg-gradient">                       
                            {{-- <div class="sb-sidenav-menu-heading">Core</div> --}}
                            <marquee class="text-white">Aplikasi Inventory Asset Stock Management For Usaha Mikro Kecil Menengah (UMKM) by Muhammad Ishaq KKP@2021</marquee>
                            <router-link class="nav-link shadow" style="background-image:linear-gradient(-45deg,#7D6AE7,#56A2D5)" to="/home">
                                <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt"></i></div>
                                <b> Dashboard </b>
                            </router-link>

                            <router-link class="nav-link shadow" style="background-image:linear-gradient(-45deg,#F32F8E,#B236D0)" to="/pos">
                                <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt"></i></div>
                                <b> Sales </b>
                            </router-link>

                            {{-- <div class="sb-sidenav-menu-heading">Interface</div> --}}
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon text-primary"><i class="fas fa-id-card"></i></div>
                                Employee
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav" style="background-color: #3b3a3ac5">
                                    <router-link class="nav-link" to="/store-employee">Add Employee</router-link>
                                    <router-link class="nav-link" to="/employee">All Employee</router-link>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon text-primary"><i class="fas fa-truck"></i></div>
                                Suppliers
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav" style="background-color: #3b3a3ac5">
                                    <router-link class="nav-link" to="/store-supplier">Add Supplier</router-link>
                                    <router-link class="nav-link" to="/supplier">All Supplier</router-link>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon text-primary"><i class="fas fa-layer-group"></i></div>
                                Categories
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav" style="background-color: #3b3a3ac5">
                                    <router-link class="nav-link" to="/store-category">Add Category</router-link>
                                    <router-link class="nav-link" to="/category">All Category</router-link>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon text-primary"><i class="fas fa-layer-group"></i></div>
                                Products
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav" style="background-color: #3b3a3ac5">
                                    <router-link class="nav-link" to="/store-product">Add Product</router-link>
                                    <router-link class="nav-link" to="/product">All Product</router-link>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#LayoutsC" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon text-primary"><i class="fas fa-users"></i></div>
                                Customers
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="LayoutsC" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav" style="background-color: #3b3a3ac5">
                                    <router-link class="nav-link" to="/store-Customer">Add Customer</router-link>
                                    <router-link class="nav-link" to="/Customer">All Customer</router-link>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon text-primary"><i class="fas fa-money-bill"></i></div>
                                Expense
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts5" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav" style="background-color: #3b3a3ac5">
                                    <router-link class="nav-link" to="/store-expense">Add Expense</router-link>
                                    <router-link class="nav-link" to="/expense">All Expense</router-link>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts6" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon text-primary"><i class="fas fa-money-bill"></i></div>
                                Salary
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts6" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav" style="background-color: #3b3a3ac5">
                                    <router-link class="nav-link" to="/given-salary">Pay Salary</router-link>
                                    <router-link class="nav-link" to="/salary">All Salary</router-link>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts7" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon text-primary"><i class="fas fa-shopping-cart"></i></div>
                                Orders
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts7" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav" style="background-color: #3b3a3ac5">
                                    <router-link class="nav-link" to="/order">Order List</router-link>
                                    <router-link class="nav-link" to="/searchorder">Search</router-link>
                                </nav>
                            </div>

                            <router-link class="nav-link collapsed" to="/stock">
                                <div class="sb-nav-link-icon text-primary"><i class="fas fa-chart-area"></i></div>
                                Stock
                            </router-link>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid" style="font-family: 'Play', sans-serif;">
                        <router-view></router-view>     
                    </div>
                </main>
            </div>
        </div>

</div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('backend/assets/demo/jquery-3.5.1.min.js') }}" crossorigin="anonymous"></script>

        <script>
            let token = localStorage.getItem('token');
            if(token) {
                $("#topbar").css("display","");
                $("#leftbar").css("display","");
            }
        </script>

        {{-- <script src="{{ asset('backend/assets/demo/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script> --}}
        <script src="{{ asset('backend/js/scripts.js') }}"></script>
    </body>
</html>
