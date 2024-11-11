<?php
$session = session();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login Admin</title>
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

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <!-- <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/Admin/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a> -->
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p>
                                    </div>
                                    <form method="post" action="Login" class="row g-3 needs-validation">
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="username" class="form-control"
                                                    placeholder="Masukkan username anda" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Masukkan password anda" required>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/Admin/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/Admin/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/Admin/vendor/echarts/echarts.min.js"></script>
    <script src="assets/Admin/vendor/quill/quill.min.js"></script>
    <script src="assets/Admin/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/Admin/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/Admin/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/Admin/js/main.js"></script>
    <!-- Sweet Alert -->
    <script script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <?php
    $dataSession = $session->get('status');
    $dataKeterangan = $session->get('keterangan');
    if ($dataSession == "Berhasil") {
    ?>
        <script>
            swal("Selamat ! ", "<?= $dataKeterangan; ?>", "success");
        </script>
    <?php
        $arraySession = ['status', 'keterangan'];
        $session->remove($arraySession);
    } else if ($dataSession == "Gagal") {
    ?>
        <script>
            swal("Gagal ! ", "<?= $dataKeterangan; ?>", "error");
        </script>
    <?php
        $arraySession = ['status', 'keterangan'];
        $session->remove($arraySession);
    }
    ?>
</body>

</html>