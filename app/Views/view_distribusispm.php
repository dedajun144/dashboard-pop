<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>S_BACKBONE</title> -->
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



    <div id="wrapper">
        <?php include 'sidebar.php'?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="container-fluid"></div>
            <!-- Main Content -->
            <div id="content">
                <!-- Page Heading -->


                <!-- Topbar -->
                <?php include 'navbar.php'?>
                <div class="d-sm-flex align-items-center justify-content-center mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><span>POP DISTRIBUSI</span></h1>

                </div>
                <div class="card" style="height:181px;">
                    <div class="card-header py-3 d-flex flex-row align-items-center ">
                        <div class="card-icon rotate-n-10">
                            <img src="<?=base_url()?>/template/img/summary.png" alt="..."
                                style="width:26px;height:27px">

                        </div>
                        <h6 class="m-0 font-weight-bold text-light">Event Summary POP</h6>

                    </div>
                    <div class="card-body">
                        <div class=" row">
                            <div class="col-1">
                                <a class="nav-link collapsed" href="<?= site_url('distribusispm') ?>"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                    aria-controls="collapseTwo">
                                    <button class="ellipse hijau ">


                                        <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                            style="width: 51px;height: 53px; margin-top:-20px; ">
                                        <div style=" margin-left:10px; " class=" status">SUDAH PM



                                        </div>
                                    </button>
                                </a>

                            </div>
                            <div class="col-1">
                                <a class="nav-link collapsed" href="<?= site_url('distribusibpm') ?>"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                    aria-controls="collapseTwo">
                                    <button class="ellipse hijau ">


                                        <img src="<?=base_url()?>/template/img/pop.png" alt="..."
                                            style="width: 51px;height: 53px; margin-top:-20px; ">
                                        <div style=" margin-left:10px; " class=" status">BELUM PM



                                        </div>
                                    </button>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>


                <!-- Card Header - Dropdown -->
                <div class="card-header bg-secondary  ">
                    <div class="row">
                        <div class="col-9">
                            <h6 class="m-0 font-weight-bold text-light">SUDAH PM</h6>
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control" id="search" placeholder="SEARCH">
                        </div>
                    </div>
                </div>

                <!-- Card Body -->
                <?php include 'datapm.php'?>
                <?php include 'pagination.php'?>
            </div>
        </div>
    </div>
    </div>

</body>

</html>