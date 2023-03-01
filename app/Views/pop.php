<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>/template/css/sb-admin-2.css" rel="stylesheet">
    <!-- <link href="<?=base_url()?>/template/css/light-bootstrap-dashboard.css" rel="stylesheet"> -->

    <script src="<?=base_url()?>/template/Chart/Chart.js"></script>
    <script src="<?=base_url()?>/template/Chart/Chart.css"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-10">
                    <img src="<?=base_url()?>/template/img/wifi.png" alt="..." style="width:80%">
                    <!--        <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">SIPEREMAN </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="<?=base_url()?>/template/img/undraw_rocket.svg"
                    alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
                    and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                    Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!--   <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="<?=base_url()?>/template/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>




                    <!-- baris pertama -->
                    <div class="row">

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5 ">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center ">
                                    <div class="card-icon rotate-n-10">
                                        <img src="<?=base_url()?>/template/img/summary.png" alt="..."
                                            style="width:26px;height:27px">

                                    </div>
                                    <h6 class="m-0 font-weight-bold text-light">Event Summary POP</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class=" col ">
                                            <div class="ellipse hijau">
                                                <div class="pop-icon">
                                                    <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                                        style="width: 51px;height: 53px;">

                                                </div>
                                                <div class=" status">GOOD
                                                </div>
                                            </div>
                                            <!--    <div class="down-icon">
                                                <img src="<?=base_url()?>/template/img/down.png" alt="..."
                                                    style="width: 37px;height: 35px;">

                                            </div> -->
                                            <div class="total">
                                                <h5>400</h5>
                                            </div>

                                        </div>
                                        <div class=" col ">
                                            <div class="ellipse kuning">
                                                <div class="pop-icon">
                                                    <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                                        style="width: 51px;height: 53px;">

                                                </div>
                                                <div class="status">WARNING</div>
                                            </div>
                                            <!--  <div class="down-icon">
                                                <img src="<?=base_url()?>/template/img/down.png" alt="..."
                                                    style="width: 37px;height: 35px;">

                                            </div> -->
                                            <div class="total">
                                                <h5>100</h5>
                                            </div>
                                        </div>
                                        <div class=" col">
                                            <div class="ellipse merah">
                                                <div class="pop-icon">
                                                    <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                                        style="width: 51px;height: 53px;">

                                                </div>
                                                <div class="status">DANGER</div>
                                            </div>
                                            <!--   <div class="down-icon">
                                                <img src="<?=base_url()?>/template/img/down.png" alt="..."
                                                    style="width: 37px;height: 35px;">

                                            </div> -->
                                            <div class="total">
                                                <h5>20</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center ">
                                    <div class="card-icon rotate-n-10">
                                        <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                            style="width:26px;height:27px">

                                    </div>
                                    <h6 class="m-0 font-weight-bold text-light">POP S-BACKBONE 55</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

                                    <div class="chart-container">
                                        <canvas id="sbackbone" height="105px"></canvas>
                                    </div>

                                    <script>
                                    var ctx = document.getElementById("sbackbone").getContext("2d");
                                    // tampilan chart
                                    var piechart = new Chart(ctx, {
                                        type: 'pie',
                                        data: {
                                            // label nama setiap Value
                                            labels: [
                                                'GOOD',
                                                'WARNING',
                                                'DANGER'
                                            ],
                                            datasets: [{
                                                // Jumlah Value yang ditampilkan
                                                data: [70, 20, 10],

                                                backgroundColor: [
                                                    '#67C587',
                                                    '#E7F789',
                                                    '#FF7067'
                                                ]
                                            }],
                                        }
                                    });
                                    </script>


                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center ">
                                    <div class="card-icon rotate-n-10">
                                        <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                            style="width:26px;height:27px">

                                    </div>
                                    <h6 class="m-0 font-weight-bold text-light">POP BACKBONE</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

                                    <div class="chart-container">
                                        <canvas id="backbone" height="105px"></canvas>
                                    </div>

                                    <script>
                                    var ctx = document.getElementById("backbone").getContext("2d");
                                    // tampilan chart
                                    var piechart = new Chart(ctx, {
                                        type: 'pie',
                                        data: {
                                            // label nama setiap Value
                                            labels: [
                                                'GOOD',
                                                'WARNING',
                                                'DANGER'
                                            ],
                                            datasets: [{
                                                // Jumlah Value yang ditampilkan
                                                data: [70, 20, 10],

                                                backgroundColor: [
                                                    '#67C587',
                                                    '#E7F789',
                                                    '#FF7067'
                                                ]
                                            }],
                                        }
                                    });
                                    </script>


                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->


                    </div>
                    <!-- /.container-fluid -->

                    <!-- baris kedua -->


                    <div class="row">

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5 ">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center ">
                                    <div class="card-icon rotate-n-10">
                                        <img src="<?=base_url()?>/template/img/summary.png" alt="..."
                                            style="width:26px;height:27px">

                                    </div>
                                    <h6 class="m-0 font-weight-bold text-light">Event Summary POP</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row" style="margin-top:-40px">
                                        <div class=" col ">
                                            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">


                                                <div class="ellipse-per hijau">

                                                    <div class="pop-icon">
                                                        <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                                            style="width: 28px;height: 29px;">

                                                    </div>
                                                    <div class="namapop">POP S-BACKBONE</div>


                                                </div>

                                            </a>
                                        </div>
                                        <div class=" col ">
                                            <div class="ellipse-per kuning">
                                                <div class="pop-icon">
                                                    <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                                        style="width: 28px;height: 29px;">

                                                </div>
                                                <div class="namapop">POP DISTRIBUSI</div>
                                            </div>

                                        </div>
                                        <div class=" col">
                                            <div class="ellipse-per merah">
                                                <div class="pop-icon">
                                                    <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                                        style="width: 28px;height: 29px;">

                                                </div>
                                                <div class="namapop">POP BACKBONE</div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- icon row ke dua -->
                                    <div class="row" style="margin-top:5px">
                                        <div class=" col ">
                                            <div class="ellipse-per hijau">
                                                <div class="pop-icon">
                                                    <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                                        style="width: 28px;height: 29px;">

                                                </div>
                                                <div class="namapop">POP AKSES</div>
                                            </div>


                                        </div>
                                        <div class=" col ">
                                            <div class="ellipse-per kuning">
                                                <div class="pop-icon">
                                                    <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                                        style="width: 28px;height: 29px;">

                                                </div>
                                                <div class="namapop">POP GI</div>
                                            </div>

                                        </div>
                                        <div class=" col">
                                            <div class="ellipse-per merah">
                                                <div class="pop-icon">
                                                    <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                                        style="width: 28px;height: 29px;">

                                                </div>
                                                <div class="namapop">LIST POP TABULAR</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center ">
                                    <div class="card-icon rotate-n-10">
                                        <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                            style="width:26px;height:27px">

                                    </div>
                                    <h6 class="m-0 font-weight-bold text-light">POP DISTRIBUSI</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

                                    <div class="chart-container">
                                        <canvas id="distribusi" height="105px"></canvas>
                                    </div>

                                    <script>
                                    var ctx = document.getElementById("distribusi").getContext("2d");
                                    // tampilan chart
                                    var piechart = new Chart(ctx, {
                                        type: 'pie',
                                        data: {
                                            // label nama setiap Value
                                            labels: [
                                                'GOOD',
                                                'WARNING',
                                                'DANGER'
                                            ],
                                            datasets: [{
                                                // Jumlah Value yang ditampilkan
                                                data: [70, 20, 10],

                                                backgroundColor: [
                                                    '#67C587',
                                                    '#E7F789',
                                                    '#FF7067'
                                                ]
                                            }],
                                        }
                                    });
                                    </script>


                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center ">
                                    <div class="card-icon rotate-n-10">
                                        <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                            style="width:26px;height:27px">

                                    </div>
                                    <h6 class="m-0 font-weight-bold text-light">POP AKSES</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

                                    <div class="chart-container">
                                        <canvas id="akses" height="105px"></canvas>
                                    </div>

                                    <script>
                                    var ctx = document.getElementById("akses").getContext("2d");
                                    // tampilan chart
                                    var piechart = new Chart(ctx, {
                                        type: 'pie',
                                        data: {
                                            // label nama setiap Value
                                            labels: [
                                                'GOOD',
                                                'WARNING',
                                                'DANGER'
                                            ],
                                            datasets: [{
                                                // Jumlah Value yang ditampilkan
                                                data: [70, 20, 10],

                                                backgroundColor: [
                                                    '#67C587',
                                                    '#E7F789',
                                                    '#FF7067'
                                                ]
                                            }],
                                        }
                                    });
                                    </script>


                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->


                    </div>

                    <!-- row ke 3 -->
                    <div class="row">

                        <!-- Pie Chart -->
                        <div class="col-xl-8 col-lg-10 ">

                            <!-- Card Header - Dropdown -->
                            <div class="card-header bg-secondary  ">
                                <div class="row">
                                    <div class="col-9">
                                        <h6 class="m-0 font-weight-bold text-light">PM SCHEDULER POP</h6>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control" id="search" placeholder="SEARCH">
                                    </div>
                                </div>
                            </div>

                            <!-- Card Body -->


                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope=" col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>


                                </tbody>
                            </table>

                        </div>






                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center ">
                                    <div class="card-icon rotate-n-10">
                                        <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                            style="width:26px;height:27px">

                                    </div>
                                    <h6 class="m-0 font-weight-bold text-light">POP AKSES</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

                                    <div class="chart-container">
                                        <canvas id="gi" height="105px"></canvas>
                                    </div>

                                    <script>
                                    var ctx = document.getElementById("gi").getContext("2d");
                                    // tampilan chart
                                    var piechart = new Chart(ctx, {
                                        type: 'pie',
                                        data: {
                                            // label nama setiap Value
                                            labels: [
                                                'GOOD',
                                                'WARNING',
                                                'DANGER'
                                            ],
                                            datasets: [{
                                                // Jumlah Value yang ditampilkan
                                                data: [70, 20, 10],

                                                backgroundColor: [
                                                    '#67C587',
                                                    '#E7F789',
                                                    '#FF7067'
                                                ]
                                            }],
                                        }
                                    });
                                    </script>


                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->


                    </div>

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap core JavaScript-->
        <script src="<?=base_url()?>/template/vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?=base_url()?>/template/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?=base_url()?>/template/js/sb-admin-2.js"></script>
        <!-- <script src="<?=base_url()?>/template/js/demo.js"></script> -->

        <!-- Page level plugins -->
        <script src="<?=base_url()?>/template/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->

        <script src="<?=base_url()?>/template/js/demo/chart-pie-demo.js"></script>



</body>

</html>