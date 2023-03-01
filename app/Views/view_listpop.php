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

    <link rel="stylesheet" type="text/css" media="screen"
        href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
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
                    <h1 class="h3 mb-0 text-gray-800"><span>LIST POP TABULAR</span></h1>

                </div>
                <div class="card-header bg-light">
                    <div class="row">
                        <div class="col text-info">
                            DAFTAR POP
                        </div>
                        <div class="col offset-8">
                            <button class="btn bg-info">Export</button>
                        </div>
                    </div>
                </div>


                <table id="tabel-data">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID POP</th>
                            <th>Nama POP</th>
                            <th>Koordinat</th>
                            <th>Kelurahaan</th>
                            <th>Kecematan</th>
                            <th>Kota</th>
                            <th>Ditail</th>
                            <th>PM</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>

                    <script>
                    $(document).ready(function() {
                        $('#tabel-data').DataTable();
                    });
                    </script>

                </table>
            </div>
        </div>
    </div>

</body>

</html>