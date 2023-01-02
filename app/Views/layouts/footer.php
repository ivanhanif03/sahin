<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row text-muted">
            <div class="col-6 text-start">
                <p class="mb-0">
                    <a class="text-muted" href="#" target="_blank"><strong>Sahin | Wedding Invitation</strong></a> &copy;
                </p>
            </div>
            <!-- <div class="col-6 text-end">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- CDN JS Start -->
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<!-- CDN JS End -->

<!-- Java Script Start -->
<script src="<?= base_url('jquery/jquery-3.5.1.js') ?>"></script>
<script src="<?= base_url('jquery/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('bootstrap5/js/dataTables.bootstrap5.min.js') ?>"></script>
<script src="<?= base_url('select/js/dataTables.select.min.js') ?>"></script>
<script src="<?= base_url('adminkit/js/datatables.js') ?>"></script>
<script src="<?= base_url('adminkit/js/app.js') ?>"></script>
<!-- Java Script End -->

<script>
    $(".alert").fadeTo(5000, 5000).slideUp(500, function() {
        $(".alert").slideUp(5000);
    });
</script>

<!-- Script Page Start -->
<?= $this->renderSection('script'); ?>
<!-- Script Page End -->