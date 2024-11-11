<?php
include('navAdmin/header.php');
?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>Dashboard_">Dashboard</a></li>
        <li class="breadcrumb-item active">Data User</li>
      </ol>
    </nav>
    <a data-bs-toggle="modal" data-bs-target="#modalTambahUser"><button type="button" class="btn btn-primary"><i
          class="bi bi-plus-circle"></i> Tambah
        User</button></a>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Table Data User</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Username</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Hak Akses</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                foreach ($data as $d) {
                  $no++;
                ?>
                  <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $d['username'] ?></td>
                    <td><?= $d['nama'] ?></td>
                    <td>
                      <?php
                      if ($d['hakAkses'] == 1) { ?>
                        <span> Admin </span>
                      <?php
                      } else if ($d['hakAkses'] == 2) { ?>
                        <span> Entry Data </span>
                      <?php
                      }
                      ?>
                    </td>
                    <td>
                      <a data-bs-toggle="modal"
                        data-bs-target="#modalGantiPassword<?= $d['idUser'] ?>"><i
                          class="bi bi-file-lock2"></i></a>&nbsp;
                      <a data-bs-toggle="modal"
                        data-bs-target="#modalPenghapusan<?= $d['idUser'] ?>"><i
                          class="bi bi-trash-fill"></i></a>
                    </td>
                  </tr>
                  <!-- Modal Validasi Penghapusan -->
                  <div class="modal fade" id="modalPenghapusan<?= $d['idUser'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Penghapusan Data</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="col-12">
                            <p>Apakah anda akan menghapus data ini ? </p>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <div class="col-12">
                            <a href="<?= base_url() ?>HapusUser/<?= $d['idUser'] ?>"><button
                                type="submit" class="btn btn-primary"
                                style="width: 100%; background-color:red; color:white; border-color:red;">
                                Hapus Data</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal Ganti Password -->
                  <div class="modal fade" id="modalGantiPassword<?= $d['idUser'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Ganti Password</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        </div>
                        <form method="POST" action="GantiPassword/<?= $d['idUser'] ?>"
                          enctype="multipart/form-data">
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
                              <input type="text" name="passwordBaru" class="form-control"
                                placeholder="Masukkan Password" required>
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
                <?php
                }
                ?>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
</main><!-- End #main -->

<!-- Modal Tambah User -->
<div class="modal fade" id="modalTambahUser" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="TambahUser" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="col-12">
            <label class="form-label">Username</label>
            <div class="input-group has-validation">
              <input type="text" name="username" class="form-control" placeholder="Masukkan Username"
                required>
            </div>
          </div>
          <div class="col-12">
            <label class="form-label">Password</label>
            <input type="text" name="password" class="form-control" placeholder="Masukkan Password"
              required>
          </div>
          <div class="col-12">
            <label class="form-label">Nama</label>
            <div class="input-group has-validation">
              <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
            </div>
          </div>
          <div class="col-12">
            <label class="form-label">Hak Akses</label>
            <select name="hakAkses" class="form-control" required>
              <option value="">- Silahkan Pilih Hak Akses -</option>
              <option value="1">Admin</option>
              <option value="2">Entry Data</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">
            Tambah User</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php
include('navAdmin/footer.php');
?>