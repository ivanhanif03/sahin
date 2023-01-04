<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3 d-flex justify-content-between">
            <h1 class="h3 d-inline align-middle">Create Order</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Order List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Order</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        <form action="<?= base_url('order/save') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control form-control-lg <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" name="name" />
                                <div class="invalid-feedback">
                                    <?= $validation->getError('name'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control form-control-lg <?= ($validation->hasError('phone')) ? 'is-invalid' : ''; ?>" name="phone" oninput="this.value = this.value.replace(/[^0-9,-]/g, '').replace(/(\..*)\./g, '$1');">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('phone'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control form-control-lg <?= ($validation->hasError('address')) ? 'is-invalid' : ''; ?>" name="address"></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('address'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="package" class="form-label">Package</label>
                                <input type="text" class="form-control form-control-lg <?= ($validation->hasError('package')) ? 'is-invalid' : ''; ?>" name="package">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('package'); ?>
                                </div>
                            </div>
                            <div class="text-end mt-3">
                                <a href="<?= base_url('order') ?>" class="btn btn-lg btn-danger">Cancel</a>
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