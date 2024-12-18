            <!-- Tombol untuk tambah pasien -->
            <div class="col-md-4 col-sm-12 text-md-left text-center">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addPatientModal">
                    <i class="fas fa-plus"></i> Tambah Data Pasien
                </button>
            </div>
        </div>
    </form>
</div>

<!-- Modal untuk tambah pasien -->
<div class="modal fade" id="addPatientModal" tabindex="-1" aria-labelledby="addPatientModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPatientModalLabel">Tambah Data Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form untuk Tambah Data Pasien -->
                <form id="formAddPatient">
                    <div class="form-group">
                        <label for="norm_pasien">Nomor Rekam Medis</label>
                        <input type="text" class="form-control" id="norm_pasien" name="norm_pasien" placeholder="Masukkan Nomor Rekam Medis" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_pasien">Nama Pasien</label>
                        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukkan Nama Pasien" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat_pasien">Alamat Pasien</label>
                        <textarea class="form-control" id="alamat_pasien" name="alamat_pasien" placeholder="Masukkan Alamat Pasien" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir_pasien">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir_pasien" name="tanggal_lahir_pasien" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin_pasien">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin_pasien" name="jenis_kelamin_pasien" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status_pasien">Status Pasien</label>
                        <select class="form-control" id="status_pasien" name="status_pasien" required>
                            <option value="PBI">PBI</option>
                            <option value="Non PBI">Non PBI</option>
                            <option value="Umum">Umum</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="savePatientButton">Simpan</button>
            </div>
        </div>
    </div>
</div>