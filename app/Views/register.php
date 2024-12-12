<?= $this->include('templates/header_login'); ?>
<!-- Nested Row within Card Body -->
<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
    <div class="col-lg-6">
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
    </div>
    <div class="text-center">
        <p class="text-gray-900 mb-4">Sistem Informasi Laboratorium Patologi Anatomi (SIM LAB PA)</p>
    </div>

    <?php if (isset($error)) : ?>
    <p style="color: red; font-style: italic;">Username / Password Salah</p>
    <?php endif; ?>

    <form action="" method="post" class="user">
        <div class="form-group">
            <input type="text" name="username" id="username" class="form-control form-control-user" placeholder="Masukan Nama" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Password" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password2" class="form-control form-control-user" placeholder="Ulangi Password" autocomplete="off">
        </div>
        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
            Registrasi
        </button>
        <div class="form-group mt-3">
            <a href="<?= base_url('/'); ?>" class="btn btn-warning btn-user btn-block">Kembali</a>
        </div>
    </form>
</div>

<?= $this->include('templates/footer_login'); ?>