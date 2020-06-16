<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php"); ?>
<!-- <section class="position-relative py-5 jarallax" data-speed="0.5" style="background-image: url('assets/images/02.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center ">
                <img src="assets/images/logo.png" class="img-fluid" width="150" alt="">
                <h2 class="text-white display-4 font-weight-bold">AppzStory Studio สอนเขียนเว็บไซต์</h2>
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
</section> -->

<footer class="semi-footer p-5 text-center text-md-left">
    <div class="row">
        <div class="col-md-4">
            <a class="navbar-brand" href="#">
                <!-- <img src="" width="35" height="35" class="d-inline-block align-top" alt=""> -->
                Thaiderm Marble
            </a>
            <p>
                <i class="fa fa-phone-square"></i> 04-493-8883 <br>
                <i class="fa fa-phone-square"></i> 04-436-5552 <br>
                <i class="fa fa-envelope"></i> email@example.com <br>
                <i class="fa fa-address-card"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, aspernatur!
            </p>
            <a href="https://www.facebook.com/profile.php?id=100009557124226" target="_blank">
                <i class="fa fa-facebook-square fa-2x"></i>
            </a>
        </div>
        <div class="col-md-3">
            <h4>เมนู</h4>
            <ul class="navbar-nav">
                <li class="nav-item <?php echo $file_name == 'index' ? 'active': '' ?>">
                    <a class="nav-link" href="index.php">หน้าแรก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php echo $file_name == 'about' ? 'active': '' ?>">
                    <a class="nav-link" href="about.php">เกี่ยวกับเรา</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'blog' || $file_name == 'blog-detail' ? 'active': '' ?>">
                    <a class="nav-link" href="blog.php">บทความ</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'contact' ? 'active': '' ?>">
                    <a class="nav-link" href="contact.php">ติดต่อเรา</a>
                </li>
            </ul>
        </div>
        <div class="col-md-5">
            <h4>แผนที่</h4>
            <div class="mapouter">
                <div class="gmap_canvas">
                <iframe width="100%" height="300" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d964.9758262957333!2d101.4008585137336!3d14.66142853966519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x409c305cfadbb25a!2z4LmE4LiX4Lii4LmA4LiU4Li04Lih4Lir4Li04LiZ4Lit4LmI4Lit4LiZ!5e0!3m2!1sth!2sth!4v1592317119281!5m2!1sth!2sth" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
                <style>
                .mapouter{text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}
                </style>
            </div>
        </div>
    </div>
</footer>
<footer class="footer">
    <span> COPYRIGHT © 2020 
        <a href="https://www.facebook.com/WebAppzStory" target="_blank">ห้างหุ้นส่วนจำกัด ไทยเดิม หินอ่อน</a>
        
    </span>
</footer>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7pVYXyLuKkftPkDMFhpTjov4MYVxTnY&callback=initMap"></script>
