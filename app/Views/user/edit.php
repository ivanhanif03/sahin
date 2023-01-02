<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3 d-flex justify-content-between">
            <h1 class="h3 d-inline align-middle">Edit User</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">User List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit User</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        <form action="<?= base_url('user/update') . '/' . $user['id']; ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control form-control-lg <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" type="email" name="email" value="<?= $user['email']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control form-control-lg <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" name="username" value="<?= $user['username']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control form-control-lg <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" name="name" value="<?= $user['name']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('name'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control form-control-lg <?= ($validation->hasError('phone')) ? 'is-invalid' : ''; ?>" name="phone" value="<?= $user['phone']; ?>" oninput="this.value = this.value.replace(/[^0-9,-]/g, '').replace(/(\..*)\./g, '$1');">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('phone'); ?>
                                </div>
                            </div>
                            <div class="text-end mt-3">
                                <a href="<?= base_url('user') ?>" class="btn btn-lg btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-lg btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>