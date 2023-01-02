<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3 d-flex justify-content-between">
            <h1 class="h3 d-inline align-middle">Register User</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">User List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New User</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        <form action="<?= url_to('register') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="email" class="form-label"><?= lang('Auth.email') ?></label>
                                <input class="form-control form-control-lg <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" type="email" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" autocomplete="off" />
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label"><?= lang('Auth.username') ?></label>
                                <input type="text" class="form-control form-control-lg <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label"><?= lang('Auth.name') ?></label>
                                <input type="text" class="form-control form-control-lg <?php if (session('errors.name')) : ?>is-invalid<?php endif ?>" name="name" placeholder="<?= lang('Auth.name') ?>" value="<?= old('name') ?>" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label"><?= lang('Auth.phone') ?></label>
                                <input type="text" class="form-control form-control-lg <?php if (session('errors.phone')) : ?>is-invalid<?php endif ?>" name="phone" placeholder="<?= lang('Auth.phone') ?>" value="<?= old('phone') ?>" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9,-]/g, '').replace(/(\..*)\./g, '$1');">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"><?= lang('Auth.password') ?></label>
                                <input class="form-control form-control-lg <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" />
                            </div>
                            <div class="mb-3">
                                <label for="pass_confirm" class="form-label"><?= lang('Auth.repeatPassword') ?></label>
                                <input class="form-control form-control-lg <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" type="password" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off" />
                            </div>
                            <div class="text-end mt-3">
                                <!-- <a href="index.html" class="btn btn-lg btn-primary">Sign in</a> -->
                                <button type="submit" class="btn btn-lg btn-primary"><?= lang('Auth.register') ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>