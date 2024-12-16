<!-- Memasukkan header yang berisi elemen HTML awal -->
<?= view('templates/header_auth'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Dashboard</h1>
                </div>
                <!-- Menampilkan pesan selamat datang dan nama pengguna -->
                <p>Selamat datang, <strong><?= esc($nama_user); ?></strong>!</p> <!-- Menampilkan nama pengguna yang login -->
                <!-- Tombol logout -->
                <a href="<?= base_url('logout'); ?>" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Memasukkan footer yang berisi elemen HTML penutup -->
<?= view('templates/footer_auth'); ?>
