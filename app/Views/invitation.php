<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wedding Invitation | Sahin">
    <meta name="author" content="Sahin">
    <meta name="keywords" content="sahin, wedding, invitation, nikah, marriage">

    <link rel="shortcut icon" href="<?= base_url('img/sahin_logo.png') ?>" />

    <title>Sahin</title>

    <!-- CSS Start -->
    <link href="<?= base_url('bootstrap5/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('bootstrap5/css/dataTables.bootstrap5.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('bootstrap5/css/select.bootstrap5.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('adminkit/css/app.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Vidaloka' rel='stylesheet'>
    <!-- CSS End -->

    <style>
        h1 {
            font-size: 450%;
        }

        .bg-cover {
            background-image: url("img/bg-cover.jpg");
            height: 100vh;
        }

        .carousel-inner .carousel-item {
            height: 500px;
            background-size: cover;
            background-position: center center;
        }
    </style>
</head>

<body>
    <div class="bg-cover" id="cover" style="display: none;">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="row text-center">
                <div class="col-12">
                    <h2>The Wedding</h2>
                </div>
                <div class="col-12" style="font-family:Vidaloka;">
                    <h1>Irti & Ivan</h1>
                </div>
                <div class="col-12">
                    <h4>30 April 2024</h4>
                </div>
                <div class="col-12 mt-5">
                    Kepada Yth. <br>
                    <b>Ivan Hanif</b>
                </div>
                <div class="col-12 mt-4">
                    <button class="btn btn-primary btn-lg" onclick="hideCover()">
                        Open Invitation
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="main" style="display: block;">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/bg-cover.jpg" class="d-block w-100" alt="Foto 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Foto 1</h5>
                        <p>Deskripsi 1</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://mdbootstrap.com/img/new/fluid/city/018.jpg" class="d-block w-100" alt="Foto 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Foto 2</h5>
                        <p>Deskripsi 2</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://mdbootstrap.com/img/new/fluid/city/018.jpg" class="d-block w-100" alt="Foto 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Foto 3</h5>
                        <p>Deskripsi 3</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <b>
                        Assalamualaikum Warahmatullah wabarakatu
                    </b>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora porro eligendi quod vitae laboriosam eum ipsa harum voluptate numquam recusandae.
                    </p>
                </div>
            </div>
        </div>
</body>

<!-- Footer Start -->
<footer class="footer" style="display:none">
    <div class="container-fluid">
        <div class="row text-muted">
            <div class="col-12 text-center">
                <p class="mb-0">
                    <a class="text-muted" href="#" target="_blank"><strong>Sahin | Wedding Invitation</strong></a> &copy;
                </p>
            </div>
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

<!-- Custom JS -->
<script>
    function hideCover() {
        var cover = document.getElementById("cover");
        var main = document.getElementById("main");
        if (cover.style.display === "block") {
            cover.style.display = "none";
            main.style.display = "block";
        } else {
            cover.style.display = "block";
            main.style.display = "none";
        }
    }
</script>

</html>