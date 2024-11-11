<?php
$session    = session();
$username   = $session->get('username');
$nama       = $session->get('nama');
$hakAkses   = $session->get('hakAkses');
$idUser     = $session->get('idUser');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/Admin/img/icon.png" rel="icon">
    <link href="assets/Admin/img/icon.png" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="assets/Admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/Admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/Admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/Admin/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/Admin/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/Admin/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/Admin/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="assets/Admin/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- <img src="assets/Admin/img/logo.png" alt=""> -->
                <span class="d-none d-lg-block">Admin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/Admin/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?= $nama ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?= $nama ?></h6>
                            <?php
                            if ($hakAkses == 1) { ?>
                                <span>Admin</span>
                            <?php
                            }
                            ?>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                data-bs-target="#modalGantiPassword<?= $idUser ?>">
                                <i class="bi bi-file-lock2"></i>
                                <span>Ganti Password</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?= base_url() ?>Keluar">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Keluar</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
    <?php
    include('sidebar.php');
    ?>