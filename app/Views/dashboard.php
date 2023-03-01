<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DASHBOARD POP</title>

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
        <?php include 'sidebar.php'?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'navbar.php'?>


                <!-- Topbar Navbar -->

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
                                    <h6 class="m-0 font-weight-bold text-light">POP S-BACKBONE</h6>

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
                                            <a class="nav-link collapsed" href="<?= site_url('sbackbone') ?>"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
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
                                            <a class="nav-link collapsed" href="<?= site_url('distribusi') ?>"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                <div class="ellipse-per hijau">

                                                    <div class="pop-icon">
                                                        <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                                            style="width: 28px;height: 29px;">

                                                    </div>

                                                    <div class="namapop">POP DISTRIBUSI</div>

                                                </div>

                                            </a>

                                        </div>
                                        <div class=" col">
                                            <a class="nav-link collapsed" href="<?= site_url('backbone') ?>"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                <div class="ellipse-per hijau">

                                                    <div class="pop-icon">
                                                        <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                                            style="width: 28px;height: 29px;">

                                                    </div>

                                                    <div class="namapop">POP BACKBONE</div>

                                                </div>

                                            </a>

                                        </div>
                                    </div>

                                    <!-- icon row ke dua -->
                                    <div class="row" style="margin-top:5px">
                                        <div class=" col ">
                                            <a class="nav-link collapsed" href="<?= site_url('akses') ?>"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                <div class="ellipse-per hijau">

                                                    <div class="pop-icon">
                                                        <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                                            style="width: 28px;height: 29px;">

                                                    </div>

                                                    <div class="namapop">POP AKSES</div>

                                                </div>

                                            </a>


                                        </div>
                                        <div class=" col ">
                                            <a class="nav-link collapsed" href="<?= site_url('gi') ?>"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                <div class="ellipse-per hijau">

                                                    <div class="pop-icon">
                                                        <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                                            style="width: 28px;height: 29px;">

                                                    </div>

                                                    <div class="namapop">POP GI</div>

                                                </div>

                                            </a>

                                        </div>
                                        <div class=" col">
                                            <a class="nav-link collapsed" href="<?= site_url('listpop') ?>"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                <div class="ellipse-per merah">
                                                    <div class="pop-icon">
                                                        <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                                            style="width: 28px;height: 29px;">

                                                    </div>
                                                    <div class="namapop">LIST POP TABULAR</div>
                                                </div>
                                            </a>
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
                <?php include 'footer.php'?>
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