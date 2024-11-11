   <!-- Modal Ganti Password -->
   <div class="modal fade" id="modalGantiPassword<?= $idUser ?>" tabindex="-1">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">Ganti Password</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form method="POST" action="GantiPassword/<?= $idUser ?>" enctype="multipart/form-data">
                   <div class="modal-body">
                       <div class="col-12">
                           <label class="form-label">Password Lama</label>
                           <div class="input-group has-validation">
                               <input type="text" name="passwordLama" class="form-control"
                                   placeholder="Masukkan Username" required>
                           </div>
                       </div>
                       <div class="col-12">
                           <label class="form-label">Password Baru</label>
                           <input type="text" name="passwordBaru" class="form-control" placeholder="Masukkan Password"
                               required>
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="submit" class="btn btn-primary">
                           Ganti Password</button>
                   </div>
               </form>
           </div>
       </div>
   </div>


   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">
       <div class="copyright">
           &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
       </div>
       <div class="credits">
       </div>
   </footer><!-- End Footer -->

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