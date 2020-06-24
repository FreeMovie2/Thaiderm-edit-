<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thaiderm Marble</title>

    <!-- Section Meta tag -->
    <?php include_once('includes/meta.php') ?>

    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>

    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>

    <!-- Section Page-title -->
    <header class="jarallax" data-speed="0.5" style="background-image: url(assets/images/IMG_2771.JPG);">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold">แกลลอรี่</h1>
            <p class="lead">ไทยเดิมหินอ่อน หินกาบ หินแกรนิต หินทราย หินจิ๊กซอ</p>
        </div>
    </header>
    <h1 class="border-short-bottom text-center">ผลงานของเรา</h1>
    <section class="container jumbotron">
        <div class="">
            <div class="row">
                <div class="col-sm-8">
                    <h2>หินต่อเติม</h2>
                    <h5>23/05/2020</h5>
                    <div class="">
                        <img src="assets/images/01.JPG" class="img-fluid" alt="Responsive image" width="500" height="600">
                    </div>
                    <br>
                    <div class="">
                        <img src="assets/images/01.JPG" class="img-fluid" alt="Responsive image" width="500" height="600">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container jumbotron">
        <h1 class="border-short-bottom text-center">ผลงานอื่นๆ</h1>
        <div class="col-12">
            <div class="owl-carousel owl-theme">
                <section class="card" style="width: 18rem;">
                    <div class="card h-100">
                        <a href="blog-detail.php?id=" class="warpper-card-img">
                            <img class="card-img-top" src="assets/images/02.JPG" alt="Coding">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">หินแต่กต่าง</h5>
                        </div>
                    </div>
                </section>
                <section class="card" style="width: 18rem;">
                    <div class="card h-100">
                        <a href="blog-detail.php?id=" class="warpper-card-img">
                            <img class="card-img-top" src="assets/images/02.JPG" alt="Coding">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">หินสวยงาม</h5>
                        </div>
                    </div>
                </section>
                <section class="card" style="width: 18rem;">
                    <div class="card h-100">
                        <a href="blog-detail.php?id=" class="warpper-card-img">
                            <img class="card-img-top" src="assets/images/02.JPG" alt="Coding">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">หินสวยน่ารัก</h5>
                        </div>
                    </div>
                </section>
                <section class="card" style="width: 18rem;">
                    <div class="card h-100">
                        <a href="blog-detail.php?id=" class="warpper-card-img">
                            <img class="card-img-top" src="assets/images/02.JPG" alt="Coding">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">หินทรายคือะไร?</h5>
                        </div>
                    </div>
                </section>
            </div>
    </section>
    </section>

    <!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>
    <!-- <?php include_once('php/userlogs.php') ?> -->

    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7pVYXyLuKkftPkDMFhpTjov4MYVxTnY&callback=initMap"></script>
    <script src="assets/js/main.js"></script>


    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });

        //              DO NOT IMPLEMENT                //
        //       this code through the following        //
        //                                              //
        //   Floodlight Pixel Manager                   //
        //   DCM Pixel Manager                          //
        //   Any system that places code in an iframe   //
        (function() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = ('https:' == document.location.protocol ? 'https://s' : 'http://i') +
                '.po.st/static/v4/post-widget.js#publisherKey=556iuqt4139l475oo1e8';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
</body>

</html>