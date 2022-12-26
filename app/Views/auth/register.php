<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wedding Invitation | Sahin">
    <meta name="author" content="Sahin">
    <meta name="keywords" content="sahin, wedding, invitation, nikah, marriage">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="<?= base_url('img/sahin_logo.png') ?>" />

    <title>Register User Sahin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="<?= base_url('adminkit/css/app.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="card mx-2 mt-4">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center mb-3">
                                        <img src="<?= base_url('img/sahin_logo.png') ?>" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
                                    </div>
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
                                        <div class="d-grid gap-2 mt-3">
                                            <!-- <a href="index.html" class="btn btn-lg btn-primary">Sign in</a> -->
                                            <button type="submit" class="btn btn-lg btn-primary"><?= lang('Auth.register') ?></button>
                                        </div>
                                    </form>
                                    <hr>
                                    <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="<?= base_url('adminkit/js/app.js') ?>"></script>

</body>

</html>