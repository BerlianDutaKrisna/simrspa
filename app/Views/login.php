<?= $this->include('templates/header_login'); ?>

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
            <input type="text" name="username" id="username" class="form-control form-control-user" placeholder="Enter Username..." autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Password" autocomplete="off">
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" class="custom-control-input" id="customCheck">
                <label class="custom-control-label" for="customCheck">Remember Me</label>
            </div>
        </div>
        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
            Login
        </button>
    </form>
</div>

<?= $this->include('templates/footer_login'); ?>