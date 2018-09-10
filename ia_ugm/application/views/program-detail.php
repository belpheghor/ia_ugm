<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>innovative academy ugm</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/fonts/font-awesome.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/fonts/typicons.min.css") ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,700,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto+Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/footer.css") ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/ia-title.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/mentor-list.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/newsList.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/newsSlide.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/profile-detail.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/program.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/related-news.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/startup-bullet.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/startup-list.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/timeLine.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/zoomImg.css") ?>">
</head>

<body>
    <div id="myModal" class="modal"><span id="close" class="close">X</span><img class="img-responsive" src="assets/img/Imam_caretaker.jpg" id="img01" class="modal-content">
        <div id="caption"></div>
    </div>
    <section class="hero-fixed">
        <div>
            <nav class="navbar navbar-light navbar-expand-md sticky whiteNav">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="background-repeat:no-repeat;width:161;background-position:center;background-size:80%;">
                        <img class="img-responsive" src="<?php echo base_url("assets/img/partner-logo/logo_ia.png") ?>" id="logo-brand">
                    </a>
                    <!-- <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button> -->
                    <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Program</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">news</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">timeline</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">galery</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">mentor</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">startup</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">staff</a></li>
                    </ul>
                    <form class="form-inline ml-auto" target="_self" style="margin:0px;margin-left:0px;">
                        <div class="form-group col-md-offset-2"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control" type="search" name="search" id="search-tab"></div>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="container no-navbar-container">
        <div class="row" style="height:59px;">
            <div class="col">
                <h1 class="text-left ia-title" data-aos="fade-down"><?php echo $program['program_name'] ?></h1>
                <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                <hr data-aos="fade-right" class="title-underline">
            </div>
        </div>
        <div class="row">
            <div class="col col-md-5 col-xs-5 col-lg-5"><img class="img-fluid img-responsive"><img src="<?php echo base_url("assets/program/$program[program_image]"); ?>" class="img-responsive"></div>
            <div class="col col-md-7 col-xs-7 col-lg-7">
                <h1 class="ia-title">description</h1>
                <hr class="underline-fluid ia-gray-title-underline">
                <p style="margin-bottom:5px;"><?php echo $program['program_description'] ?></p>
                <hr class="underline-fluid ia-gray-title-underline">
                <div class="d-inline-flex social-detail-icon"><a href="#"><img src="<?php echo base_url("assets/img/fb-logo.png") ?>" class="social-network-icon my-info-icons"></a><a href="#"><img src="<?php echo base_url("assets/img/li-logo.png") ?>" class="social-network-icon my-info-icons"></a><a href="#"><img src="<?php echo base_url("assets/img/ig-logo.png") ?>" class="social-network-icon my-info-icons"></a></div>
                <hr
                class="underline-fluid ia-gray-title-underline"><a class="btn btn-primary" href="<?php echo $program['timeline_link'] ?>">Register</a></div>
            </div>
            <div class="row foot-box" id="fbox-1">
                <div class="col-12 col-sm-6 col-md-6 footer-top-box">
                    <div class="row" style="padding-top:15px;">
                        <div class="col align-self-center col-md-3 col-sm-3 col-xs-6"><img class="img-fluid img-responsive" src="<?php echo base_url("assets/img/Gerakan-Nasional-1000-Startup-Digital.jpg") ?>"></div>
                        <div class="col align-self-center col-md-3 col-sm-3 col-xs-6"><img class="img-fluid img-responsive" src="<?php echo base_url("assets/img/partner-logo/logo_ia.png") ?>"></div>
                        <div class="col align-self-center col-md-3 col-sm-3 col-xs-6"><img class="img-fluid img-responsive" src="<?php echo base_url("assets/img/partner-logo/logougm.png") ?>"></div>
                        <div class="col align-self-center col-md-3 col-sm-3 col-xs-6"><img class="img-fluid img-responsive" src="<?php echo base_url("assets/img/partner-logo/kibar.png") ?>"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 footer-top-box" id="footer-top-right">
                    <p class="ia-footer-text">Innovative Academy<br></p>
                    <p class="ia-footer-text">Entrepreneur Development Service (EDS) Building - UGM<br></p>
                    <div class="info-box"><i class="fa fa-map-marker my-info-icons"></i><span>Jl. Asem Kranji Blok K-7, Sekip, Yogyakarta<br></span></div>
                    <div class="d-flex info-box"><a href="#" class="ia_link"><i class="fa fa-envelope my-info-icons"></i>&nbsp;ia@ugm.ac.id</a><a href="#" class="ia_link"><i class="fa fa-phone-square my-info-icons center-icon"></i>&nbsp;+62 274 6492 599, ext.82310</a></div>
                    <div class="d-flex info-box"><a href="#" class="ia_link"><i class="fa fa-facebook-square my-info-icons"></i>facebook.com/iaugm<span class="text-dark"><br></span></a><a href="#" class="ia_link"><i class="typcn typcn-social-instagram my-info-icons center-icon"></i>@iaugm</a>
                        <a
                        href="#" class="ia_link"><i class="fa fa-twitter my-info-icons center-icon"></i>@innovativeugm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url("assets/js/jquery.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/ebs-footer.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/ebs-footer.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/ebs-footer.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/bs-animation.js") ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="<?php echo base_url("assets/js/logo-slider.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/Media-Slider-Bootstrap-3.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/myquery.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/untitled.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js") ?>"></script>
    


</body>

</html>