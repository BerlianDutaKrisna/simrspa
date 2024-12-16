<?= $this->include('templates/header_auth'); ?>
<!-- Nested Row within Card Body -->
<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
            </div>
            <div class="text-center">
                <p class="text-gray-900 mb-4">Sistem Informasi Laboratorium Patologi Anatomi (SIM LAB PA)</p>
            </div>

            <!-- Menampilkan pesan success jika registrasi berhasil -->
            <?php if (session()->getFlashdata('success')): ?>
                <p style="color: green; font-style: italic;"><?= session()->getFlashdata('success'); ?></p>
            <?php endif; ?>

            <!-- Menampilkan pesan error jika ada error login -->
            <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic;">Username / Password Salah</p>
            <?php endif; ?>

            <form action="" method="post" class="user">
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control form-control-user" placeholder="Masukan Username..." autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Masukan Password" autocomplete="off">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Ingat saya</label>
                        <a href="<?= base_url('register'); ?>" class="small">Mendaftar</a>
                    </div>
                </div>
                <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                    Login
                </button>
            </form>
        </div>
    </div>
</div>

<?= $this->include('templates/footer_auth'); ?>
