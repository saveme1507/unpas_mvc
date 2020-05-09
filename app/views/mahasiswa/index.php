<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambah" data-toggle="modal" data-target="#formModal">
                Tambah Data Mahasiswa
            </button>

            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="POST">
                <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="cari mahasiswa" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>

            <h3 class="mt-2">Daftar mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item ">
                        <?= $mhs['nama'] ?>
                        <a href="<?= BASEURL . '/mahasiswa/hapus/' . $mhs['id'] ?> " class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>

                        <a href="<?= BASEURL . '/mahasiswa/ubah/' . $mhs['id'] ?> " class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id=<?= $mhs['id'] ?>>ubah</a>

                        <a href="<?= BASEURL . '/mahasiswa/detail/' . $mhs['id'] ?> " class="badge badge-primary float-right ml-1">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/mahasiswa/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="number" class="form-control" id="npm" name="npm">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurasan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Informatika">Informatika</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Akutansi">Akutansi</option>
                            <option value="Arsitektur">Arsitektur</option>
                            <option value="Teknik Pangan">Teknik Pangan</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>