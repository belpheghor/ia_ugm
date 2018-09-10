<section>
	<div>
                <div class="container-fluid footer footer-ia col-md-offset-2">
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
                            <div
                                class="d-flex info-box"><a href="#" class="ia_link"><i class="fa fa-facebook-square my-info-icons"></i>facebook.com/iaugm<span class="text-dark"><br></span></a><a href="#" class="ia_link"><i class="typcn typcn-social-instagram my-info-icons center-icon"></i>@iaugm</a>
                                <a
                                    href="#" class="ia_link"><i class="fa fa-twitter my-info-icons center-icon"></i>@innovativeugm</a>
                        </div>
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
    <script>
        $(document).ready(function()
        {
            var lokasi = $("input[name=lokasi]").val();
            var lokasi_url= "url('"+lokasi+"')";

            $("#head-bg").css("background-image", lokasi_url);
            $("#head-bg").css("height", "100vh");
            $("#head-bg").css("background-size", "cover");
        })
    </script>


    </body>

</html>