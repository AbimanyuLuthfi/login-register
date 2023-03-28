<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?= $head; ?></h1>
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Fill The Mentors Information
                            </div>
                            <div class="card-body">
                            <?= $validation->listErrors(); ?>
                                <form action="/admin/create/mentors/post" accept-charset="utf-8" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                        <label for="gambar">Foto Profile</label>
                                        <input type="file" class="form-control" id="gambar" name="gambar">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="nama" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="bidang_keahlian">Bidang Keahlian</label>
                                        <input type="bidang_keahlian" name="bidang_keahlian" class="form-control" id="bidang_keahlian" placeholder="Bidang Keahlian">
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi_profil">Deskripsi Profil</label>
                                        <input type="deskripsi_profil" name="deskripsi_profil" class="form-control" id="deskripsi_profil" placeholder="Deskripsi Profil">
                                    </div>
                                    <div class="form-group">
                                        <label for="waktu_tersedia">Waktu Tersedia</label>
                                        <input type="waktu_tersedia" name="waktu_tersedia" class="form-control" id="waktu_tersedia" placeholder="Waktu Tersedia">
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>


<?= $this->endSection(); ?>
