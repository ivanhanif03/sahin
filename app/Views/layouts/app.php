<!-- Header -->
<?= $this->include('layouts/header'); ?>

<body>
    <div class="wrapper">

        <!-- Sidebar -->
        <?= $this->include('layouts/sidebar'); ?>

        <div class="main">
            <!-- Navbar -->
            <?= $this->include('layouts/navbar'); ?>

            <!-- Content -->
            <?= $this->renderSection('content'); ?>

            <!-- Footer -->
            <?= $this->include('layouts/footer'); ?>
        </div>
    </div>

</body>

</html>