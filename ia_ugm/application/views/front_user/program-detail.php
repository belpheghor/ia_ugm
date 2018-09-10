        <div class="container no-navbar-container">
            <div class="row" style="height:59px;">
                <div class="col">
                    <h1 class="text-left ia-title" data-aos="fade-down"><?php echo $program['program_name'] ?></h1>
                    <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                    <hr data-aos="fade-right" class="title-underline">
                </div>
            </div>
            <div class="row">
                <div class="col col-md-5 col-xs-5 col-lg-5"><img class="img-fluid" src="<?php echo base_url("assets/program/$program[program_image]"); ?>"></div>
                <div class="col col-md-7 col-xs-7 col-lg-7">
                    <h1 class="ia-title">description</h1>
                    <hr class="underline-fluid ia-gray-title-underline">
                    <p style="margin-bottom:5px;"><?php echo $program['program_description'] ?></p>
                    <hr class="underline-fluid ia-gray-title-underline">
                    <div class="d-inline-flex social-detail-icon">
                        <a href="#">
                            <img src="<?php echo base_url('assets/img/fb-logo.png'); ?>" class="social-network-icon my-info-icons">
                        </a>
                        <a href="#">
                            <img src="<?php echo base_url('assets/img/li-logo.png'); ?>" class="social-network-icon my-info-icons">
                        </a>
                        <a href="#">
                            <img src="<?php echo base_url('assets/img/ig-logo.png'); ?>" class="social-network-icon my-info-icons">
                        </a>
                    </div>
                    <hr
                        class="underline-fluid ia-gray-title-underline"><button class="btn btn-primary float-right btn-more" type="button" onclick="window.location.href='<?php echo $program['timeline_link']?>'">Register</button></div>
            </div>
        </div>
    </section>