<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3 d-flex justify-content-between">
            <h1 class="h3 d-inline align-middle">Users</h1>
            <a href="<?= base_url('user/register') ?>" class="btn btn-lg btn-success"><i class="align-middle" data-feather="plus-square"></i> Create New User</a>
        </div>

        <div class="row">
            <div class="col-12">
                <?= view('Myth\Auth\Views\_message_block') ?>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert" id="alert-delete">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-body">
                        <table id="datatables-users" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($users as $u) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $u['name']; ?></td>
                                        <td><?= $u['phone']; ?></td>
                                        <td><?= $u['email']; ?></td>
                                        <td><?= $u['username']; ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('user/edit') . '/' . $u['id'] ?>" class="btn btn-lg btn-primary">Edit</a>
                                            <a href="" class="btn btn-lg btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-user<?= $u['id'] ?>">Delete</a>
                                        </td>
                                    </tr>

                                    <!-- Start Modal Delete -->
                                    <div class="modal fade" id="modal-delete-user<?= $u['id'] ?>">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content border-0">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Delete Data</h4>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <span>Are you sure you want to delete the user?</span><br>
                                                    <span class="text-capitalize font-weight-bolder text-primary">
                                                        <?= $u['name']; ?>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                                                    <form action="<?= base_url('/user') . '/' . $u['id']; ?>" method="post">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger">Yes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Delete -->
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datatables with Buttons
        var datatablesUsers = $("#datatables-users").DataTable({
            responsive: true,
            lengthChange: !1,
            buttons: [
                'pdf'
            ]
        });
        datatablesUsers.buttons().container().appendTo("#datatables-users_wrapper .col-md-6:eq(0)");
    });
</script>
<?= $this->endSection(); ?>