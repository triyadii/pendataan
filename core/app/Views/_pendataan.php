<?php
include('navAdmin/header.php');
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Pendataan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Dashboard_">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Pendataan</li>
            </ol>
        </nav>
        <a data-bs-toggle="modal" data-bs-target="#modalPengecekan"><button type="button" class="btn btn-primary"><i
                    class="bi bi-plus-circle"></i> Sinkronisasi
                Pendataan</button></a>
        <a data-bs-toggle="modal" data-bs-target="#modalTambahPendataan"><button type="button" class="btn btn-primary"
                style="color: white;background-color:orange;border-color:orange"><i class="bi bi-plus-circle"></i>
                Tambah
                Pendataan</button></a>
    </div><!-- End Page Title -->


    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Table Data Pendataan</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Pendata</th>
                                    <th scope="col">Nama Warga</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Desa</th>
                                    <th scope="col">Kecamatan</th>
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
                                    <td><?= $d['nik'] ?></td>
                                    <td><?= $d['alamat'] ?></td>
                                    <td><?= $d['namaDesa'] ?></td>
                                    <td><?= $d['namaKecamatan'] ?></td>
                                    <td><a data-bs-toggle="modal"
                                            data-bs-target="#modalPenghapusan<?= $d['idPendataan'] ?>"><i
                                                class="bi bi-trash-fill"></i></a></td>
                                </tr>
                                <!-- Modal Validasi Penghapusan -->
                                <div class="modal fade" id="modalPenghapusan<?= $d['idPendataan'] ?>" tabindex="-1">
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
                                                    <a href="<?= base_url() ?>Hapus/<?= $d['idPendataan'] ?>"><button
                                                            type="submit" class="btn btn-primary"
                                                            style="width: 100%; background-color:red; color:white; border-color:red;">
                                                            Hapus Data</button></a>
                                                </div>
                                            </div>
                                        </div>
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

<!-- Modal Pengecekan -->
<div class="modal fade" id="modalPengecekan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pengecekan Pendataan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="SinkronisasiData" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="col-12">
                        <label class="form-label">Nomor Induk Kependudukan</label>
                        <div class="input-group has-validation">
                            <input type="text" name="nik" class="form-control"
                                placeholder="Masukkan Nomor Induk Kependudukan">
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Nama</label>
                        <div class="input-group has-validation">
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Pengecekan Pendataan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Tambah Pendataan -->
<div class="modal fade" id="modalTambahPendataan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="TambahPendataan" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="col-12">
                        <label class="form-label">Nomor Induk Kependudukan</label>
                        <div class="input-group has-validation">
                            <input type="text" name="nik" class="form-control"
                                placeholder="Masukkan Nomor Induk Kependudukan" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Nama</label>
                        <div class="input-group has-validation">
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan " required>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Alamat</label>
                        <div class="input-group has-validation">
                            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"
                                required>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Desa</label>
                        <div class="input-group has-validation">
                            <select name="desa" class="form-control">
                                <option>- Silahkan Pilih Desa -</option>
                                <?php
                                foreach ($dataDesa as $dd) { ?>
                                <option value="<?= $dd['idDesa'] ?>"><?= $dd['namaDesa'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Kecamatan</label>
                        <div class="input-group has-validation">
                            <select name="kecamatan" class="form-control">
                                <option>- Silahkan Pilih Kecamatan -</option>
                                <?php
                                foreach ($dataKecamatan as $dk) { ?>
                                <option value="<?= $dk['idKecamatan'] ?>"><?= $dk['namaKecamatan'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Tambah Pendataan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('navAdmin/footer.php');
?>