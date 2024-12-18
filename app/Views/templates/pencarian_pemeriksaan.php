<div class="card shadow mb-4">
    <div class="card-header py-4">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Pemeriksaan</h6>
    </div>
    <div class="card-body">
        <form action="hasil_pencarian.php" method="POST">
            <div class="row">
                <!-- Input dan tombol cari responsif -->
                <div class="col-md-8 col-sm-12 mb-3">
                    <div class="input-group">
                        <input type="text" name="input_norm" id="input_norm" class="form-control" placeholder="Pencarian nomor rekamedis pasien" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-primary" name="btn_cari_norm" type="submit">
                                <i class="fas fa-search fa-sm"></i> Cari
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Tombol untuk tambah pasien di bawah input (responsif) -->
                <div class="col-md-4 col-sm-12 text-md-left text-center">
                    <a href="tambah_pasien.php" class="btn btn-success">
                        <i class="fas fa-plus"></i> Tambah Data Pasien
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>