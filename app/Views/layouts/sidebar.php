<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="<?= base_url() ?>">
            <span class="align-middle">Sahin</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item <?php if ($menu == 'dashboard') {
                                        echo 'active';
                                    } ?>">
                <a class="sidebar-link" href="<?= base_url('dashboard') ?>">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-header">
                Menu
            </li>

            <?php if (in_groups('admin')) : ?>
                <li class="sidebar-item <?php if ($menu == 'users') {
                                            echo 'active';
                                        } ?>">
                    <a class="sidebar-link" href="<?= base_url('user') ?>">
                        <i class="align-middle" data-feather="user"></i> <span class="align-middle">Users</span>
                    </a>
                </li>
            <?php endif; ?>

            <li class="sidebar-item">
                <a class="sidebar-link <?php if ($menu == 'orders') {
                                            echo 'active';
                                        } ?>" href="<?= base_url('order') ?>">
                    <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Orders</span>
                </a>
            </li>
        </ul>

        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">Sahin Invitation</strong>
                <div class="mb-3 text-sm">
                    Access to the Sahin Invitation landing page website
                </div>
                <div class="d-grid">
                    <a href="<?= base_url() ?>" class="btn btn-primary">Let's Go!</a>
                </div>
            </div>
        </div>
    </div>
</nav>