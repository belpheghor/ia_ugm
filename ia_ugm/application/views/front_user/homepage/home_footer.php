   
    <section>
            <div>
                <div class="container-fluid footer footer-ia">
                    <div class="row foot-box" id="fbox-1">
                        <div class="col-12 col-sm-6 col-md-6 footer-top-box">
                            <div class="row" style="padding-top:15px;">
                                <div class="col align-self-center col-md-3 col-sm-3 col-xs-6">
                                    <img class="img-fluid" src="<?php echo base_url("assets/img/Gerakan-Nasional-1000-Startup-Digital.jpg") ?>">
                                </div>
                                <div class="col align-self-center col-md-3 col-sm-3 col-xs-6">
                                    <img class="img-fluid" src="<?php echo base_url("assets/img/partner-logo/logo_ia.png") ?>">
                                </div>
                                <div class="col align-self-center col-md-3 col-sm-3 col-xs-6">
                                    <img class="img-fluid" src="<?php echo base_url("assets/img/partner-logo/logougm.png") ?>">
                                </div>
                                <div class="col align-self-center col-md-3 col-sm-3 col-xs-6">
                                    <img class="img-fluid" src="<?php echo base_url("assets/img/partner-logo/kibar.png") ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 footer-top-box" id="footer-top-right">
                            <p class="ia-footer-text">Innovative Academy<br></p>
                            <p class="ia-footer-text">Entrepreneur Development Service (EDS) Building - UGM<br></p>
                            <div class="info-box">
                                <a href="https://www.google.co.id/maps/place/EDS+Building+-+Universitas+Gadjah+Mada/@-7.7720883,110.3751369,15z/data=!4m5!3m4!1s0x0:0x2c4615ad62041772!8m2!3d-7.7720883!4d110.3751369" class="ia_link" target="_blank">
                                    <i class="fa fa-map-marker my-info-icons"></i>
                                    <span>Jl. Asem Kranji Blok K-7, Sekip, Yogyakarta<br></span>
                                </a>
                            </div>
                            <div class="d-flex info-box">
                                <a href="#" class="ia_link">
                                    <i class="fa fa-envelope my-info-icons"></i>&nbsp;ia@ugm.ac.id
                                </a>
                                <a href="#" class="ia_link">
                                    <i class="fa fa-phone-square my-info-icons center-icon"></i>&nbsp;+62 274 6492 599, ext.82310
                                </a>
                            </div>
                            <divclass="d-flex info-box">
                                <a href="#" class="ia_link">
                                    <i class="fa fa-facebook-square my-info-icons"></i>facebook.com/iaugm<span class="text-dark"><br></span>
                                    </a>
                                    <a href="#" class="ia_link"><i class="typcn typcn-social-instagram my-info-icons center-icon"></i>@iaugm</a>
                                <a href="#" class="ia_link"><i class="fa fa-twitter my-info-icons center-icon"></i>@innovativeugm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
 
   <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/ebs-footer.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/ebs-footer.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/ebs-footer.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bs-animation.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/aos.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/slick.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/logo-slider.js"); ?>""></script>
    <script src="<?php echo base_url("assets/js/Media-Slider-Bootstrap-3.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/myquery.js"); ?>""></script>
    <script src="<?php echo base_url("assets/js/untitled.js"); ?>"></script>
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