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
        .bg-cover {
            background-image: url("img/bg-cover.jpg");
            height: 100vh;
        }

        /* Declare text styles */
        h1,
        h2,
        p {
            /* Font minimum, preferred and maximum value */
            font-size: clamp(var(--min), var(--val), var(--max));
        }

        /* Font size variables */
        h1 {
            --min: 4em;
            /* minimum value */
            --val: 5vw;
            /* preferred value = 5% viewport width */
            --max: 5em;
            /* maximum value */
        }

        h2 {
            --min: 1.5em;
            /* minimum value */
            --val: 4vw;
            /* preferred value = 4% viewport width */
            --max: 2.25em;
            /* maximum value */
        }

        p {
            --min: 1em;
            /* minimum value */
            --val: 2.5vw;
            /* preferred value = 2.5% viewport width */
            --max: 1.5em;
            /* maximum value */
        }
    </style>
</head>

<body>
    <div class="container">
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
                        <p>30 April 2024</p>
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
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="<?= base_url('img/carousel/1.jpg') ?>" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="<?= base_url('img/carousel/2.jpg') ?>" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('img/carousel/3.jpg') ?>" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h2>The Wedding</h2>
                    <div style="font-family:Vidaloka;">
                        <h1>Irti & Ivan</h1>
                    </div>
                    <h4 class="fs-sm-n">30 April 2024</h4>
                    <div class="row mt-5" id="countdown">
                    </div>
                </div>
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

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Apr 30, 2024 07:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("countdown").innerHTML = '<div class="col-lg-3 col-sm-12"></div><div class="col-lg-6 col-sm-12 text-center"><div class="row"><div class="col-3"><div class="card"><div class="card-body"><h4>' + days + '</h4></div><div class="card-footer bg-dark text-white">D</div></div> </div> <div class="col-3"> <div class="card"> <div class="card-body"><h4>' + hours + '</h4></div><div class="card-footer bg-dark text-white">H</div></div></div><div class="col-3"><div class="card"><div class="card-body"><h4>' + minutes + '</h4></div><div class="card-footer bg-dark text-white">M</div></div></div> <div class="col-3"> <div class="card"><div class="card-body"><h4>' + seconds + '</h4></div><div class="card-footer bg-dark text-white">S</div></div></div></div></div><div class="col-lg-3 col-sm-12"></div>';

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

</html>