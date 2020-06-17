<?php 

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thaiderm Marble</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

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

<!-- Section Page-title -->
    <header class="jarallax" data-speed="0.5" style="background-image: url(assets/images/03.JPG);">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold">รายละเอียดสินค้า</h1>
            <p class="lead">ไทยเดิมหินอ่อน หินกาบ หินแกรนิต หินทราย หินจิ๊กซอ</p>
        </div>
    </header>
    <section class="jumbotron-fluid">
    <h1 class="border-short-bottom text-center">รายละเอียดสินค้า</h1>
<div class="container">
  <div class="jumbotron row">
    <div class="col-12 col-sm-7 col-md-6 p-3">
    <img src="assets/images/02.JPG" class="img-fluid border border-danger" alt="Responsive image">
    </div>
    <div class="col-12 col-sm-6 col-md-4 p-3">
    <h3 class="font-weight-bold">ชื่อสินค้า</h3>
    <h5 class="font-weight-light text-muted">รหัสสินค้า</h5><br>
    <h4 class="font-weight-normal text-danger">ราคา</h4><br>
    <h4 class="font-weight-normal ">รายละเอียด</h4>
    <p class="font-weight-normal ">ราคาสีแดงเป็นราคาเริ่มต้นของการซื้อยก SLAB เท่านั้น ราคาอาจแตกต่างกันขึ้นอยู่กับสีและลวดลายของหิน</p><br>
    <i class="fa fa-share-alt" style="font-size:24px;color:red"> แชร์</i>
    <i class="fa fa-facebook-official" style="font-size:24px;color:blue"></i>
    <i class="fab fa-line" style="font-size:24px;color:green"></i>
    </div>
  </div>

  <div class="row justify-content-between">
    <div class="col-12 col-sm-6 col-md-6 p-3">
    <div class="text-center">
    <i class="fas fa-award" style="font-size:100px"></i>
    </div>
    <h4 class="font-weight-bold text-center">การรับประกันสินค้า</h4>
    <p class="font-weight-normal float-left">- บริษัทฯ มีการรับประกันสินค้า ขึ้นอยู่กับประเภทของสินค้า โดยจะอยู่ภายใต้การพิจราณาของบริษัท</p>
    <p class="font-weight-normal float-left">- ประกันสินค้าแตกหักเสียหายขณะขนส่ง และหลังจากขนส่งภายใน 7 วันเท่านั้น</p>
    <p class="font-weight-normal float-left">- การรับประกินสินค้าของแต่ละรายการมีความแตกต่างกัน</p>
    <p class="font-weight-normal float-left">หมายเหตุ : บริษัทฯ ขอสงวนสิทธิ์ในการพิจารณาตรวจสอบก่อนจัดส่งสินค้าใหม่ให้แก่ลูกค้า</p>
    </div>
    
    <div class="col-12 col-sm-6 col-md-6 p-3">
    <div class="text-center">
    <i class="fas fa-info-circle" style="font-size:100px"></i>
    </div>
    <h4 class="font-weight-bold text-center">หมายเหตุ</h4>
    <p class="font-weight-normal float-left">- ราคาข้างต้นไม่รวมภาษีมูลค่าเพิ่ม</p>
    <p class="font-weight-normal float-left">- ราคาอาจเปลี่ยนแปลงโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</p>
    </div>
  </div>
  
</div>
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7pVYXyLuKkftPkDMFhpTjov4MYVxTnY&callback=initMap"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>