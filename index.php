<?php
require_once('php/connect.php');
$sql = "SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
$result = $conn->query($sql);

?>
<?php
$sqlgroup  = "SELECT * FROM productgroup WHERE `group_status` = 'true'  ORDER BY group_id  DESC";
$resultgroup  = $conn->query($sqlgroup);

$sql_RAND = "SELECT * FROM `productgroup` WHERE `group_status` = 'true' ORDER BY RAND() LIMIT 6";
$result_RAND = $conn->query($sql_RAND) or die($conn->error);

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
                <div class="carousel-img" style="background-image: url('assets/images/IMG_2765.jpg') ;">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">Thaiderm Marble</h1>
                        <p class="lead">ไทยเดิมหินอ่อน หินกาบ หินแกรนิต หินทราย หินจิ๊กซอ</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('assets/images/IMG_2770.jpg') ;">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">Thaiderm Marble</h1>
                        <p class="lead">ไทยเดิมหินอ่อน หินกาบ หินแกรนิต หินทราย หินจิ๊กซอ</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('assets/images/IMG_2773.jpg') ;">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">Thaiderm Marble</h1>
                        <p class="lead">ไทยเดิมหินอ่อน หินกาบ หินแกรนิต หินทราย หินจิ๊กซอ</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
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
        <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <?php while($row_RAND = $result_RAND->fetch_assoc()){  ?>
                    <section class="col-12 p-2">
                        <div class="card h-100">
                            <a href="blog-detail.php?id=<?php echo $row_RAND['group_id'] ?>" class="warpper-card-img">
                                <img class="card-img-top" src="<?php echo $base_path_blog.$row_RAND['group_img'] ?>" alt="Coding">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row_RAND['group_name']; ?></h5>
                               
                            </div>
                            <div class="p-3">
                                <a href="blog-detail.php?id=<?php echo $row_RAND['group_id'] ?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                            </div>
                        </div>
                    </section>
                    <?php } ?>
                </div>
            </div>
           
    </section>
    <!-- Section Hope -->    
    <section class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="border-short-bottom text-center">หมวดหมู่สินค้า</h1>
            <div class="row">
            <?php while($rowgroup = $resultgroup->fetch_assoc()) {  ?>
                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100">
                        <a href="blog-detail.php?id=" class="warpper-card-img">
                            <img class="card-img-top" src="<?php echo $base_path_blog.$rowgroup['group_img'] ?>" alt="Coding">
                        </a>
    
                        <div class="p-3">
                            <a href="blog-detail.php?id=" class="btn btn-danger btn-block"><?php echo $rowgroup ['group_name']; ?></a>
                        </div>
                    </div>
                </section>
            <?php } ?>   
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
        <?php while($row = $result->fetch_assoc()) {  ?>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=" class="warpper-card-img">
                        <img class="card-img-top" src="<?php echo $base_path_blog.$row['image'] ?>" alt="Coding">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $row ['subject'] ?></h5>                        
                    </div>                    
                </div>
            </section>  
          <?php 
        }
          ?>
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
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7pVYXyLuKkftPkDMFhpTjov4MYVxTnY&callback=initMap"></script>
    <script src="assets/js/main.js"></script>

</body>
<script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true,
                nav: false,
                dots: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
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
        (function () {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = ('https:' == document.location.protocol ? 'https://s' : 'http://i')
            + '.po.st/static/v4/post-widget.js#publisherKey=556iuqt4139l475oo1e8';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();

    </script>

</html>