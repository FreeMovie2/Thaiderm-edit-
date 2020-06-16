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
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>

    <!-- Section Carousel -->
    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img" style="background-image: url('assets/images/01.jpg') ;">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">Thaiderm Marble</h1>
                        <p class="lead">ไทยเดิมหินอ่อน หินกาบ หินแกรนิต หินทราย หินจิ๊กซอ</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
            <!-- <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-0.3.5&s=d8791fe0f9f4e735158400f9daf6a558&auto=format&fit=crop&w=1280&q=80') ;">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">AppzStory Studio</h1>
                        <p class="lead">สังคมของการเขียนเว็บไซต์ (Bootstrap4 PHP MySQL)</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-0.3.5&s=17460aa3d0fd3eb2fb7162edafc37175&auto=format&fit=crop&w=1280&q=80') ;">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">AppzStory Studio</h1>
                        <p class="lead">สังคมของการเขียนเว็บไซต์ (AngularJS VueJS Firebase)</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>

    <section class="container">
        <h1 class="border-short-bottom text-center">สินค้ายอดนิยม</h1>
        <div class="row">
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/bg.jpg" alt="Coding">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/bg.jpg" alt="Coding">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/bg.jpg" alt="Coding">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </section>
            <!-- <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/bg.jpg" alt="Coding">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="blog-detail.php?id=" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/bg.jpg" alt="Coding">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="blog-detail.php?id=" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/bg.jpg" alt="Coding">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="blog-detail.php?id=" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </section>             -->
            <div class="container">
                <div class="row">
                    <div class="col align-self-start">                        
                    </div>
                    <div class="p-3 col-md-2 align-self-center">
                    <a href="blog-detail.php?id=" class="btn btn-danger btn-block">ดูทั้งหมด</a>
                    </div>
                    <div class="col align-self-end">                        
                    </div>
                </div>
            </div>
            <!-- <div class="p-3 col-md-2">
                        <a href="blog-detail.php?id=" class="btn btn-danger btn-block">ดูทั้งหมด</a>
                    </div> -->
        </div>
    </section>
    <!-- Section Hope -->    
    <section class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="border-short-bottom text-center">หมวดหมู่สินค้า</h1>
            <div class="row">
                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100">
                        <a href="blog-detail.php?id=" class="warpper-card-img">
                            <img class="card-img-top" src="assets/images/bg.jpg" alt="Coding">
                        </a>
                        <!-- <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div> -->
                        <div class="p-3">
                            <a href="blog-detail.php?id=" class="btn btn-danger btn-block">หินธรรมชาติ</a>
                        </div>
                    </div>
                </section>
                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100">
                        <a href="blog-detail.php?id=" class="warpper-card-img">
                            <img class="card-img-top" src="assets/images/bg.jpg" alt="Coding">
                        </a>
                        <!-- <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div> -->
                        <div class="p-3">
                            <a href="blog-detail.php?id=" class="btn btn-danger btn-block">หินเทียม</a>
                        </div>
                    </div>
                </section>
                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100">
                        <a href="blog-detail.php?id=" class="warpper-card-img">
                            <img class="card-img-top" src="assets/images/bg.jpg" alt="Coding">
                        </a>
                        <!-- <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div> -->
                        <div class="p-3">
                            <a href="blog-detail.php?id=" class="btn btn-danger btn-block">หินตกแต่ง</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="position-relative py-5 jarallax" data-speed="0.5" style="background-image: url('assets/images/02.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center ">
                    <img src="" class="img-fluid" width="150" alt="">
                    <h2 class="text-white display-4 font-weight-bold">Thaiderm Marble <br><small>ไทยเดิมหินอ่อน หินกาบ หินแกรนิต หินทราย หินจิ๊กซอ </small></h2>
                    <div class="star-rating">
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <div class="star-current" style="width: 100%;">
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="container">
        <h1 class="border-short-bottom text-center">บทความ</h1>
        <div class="row">
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/bg.jpg" alt="Coding">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>                        
                    </div>                    
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/bg.jpg" alt="Coding">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>                        
                    </div>                    
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/bg.jpg" alt="Coding">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>                        
                    </div>                   
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col align-self-start">                        
                    </div>
                    <div class="p-3 col-md-2 align-self-center">
                    <a href="blog-detail.php?id=" class="btn btn-danger btn-block">ดูทั้งหมด</a>
                    </div>
                    <div class="col align-self-end">                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>


    <!-- Section On to Top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7pVYXyLuKkftPkDMFhpTjov4MYVxTnY&callback=initMap"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>