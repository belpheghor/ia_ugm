<section>
    <div class="container ia-container">
        <div class="row" style="height:59px;">
            <div class="col">
                <h1 class="text-left ia-title" data-aos="fade-down">startup</h1>
                <!-- <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                    <hr data-aos="fade-right" class="title-underline"> -->
                </div>
            </div>
            <div class="row">
             <?php foreach ($startup as $key => $value): ?>
                <div class="col-6 offset-0 col-xs-6 col-md-4 col-lg-2">
                    <div>
                        <img src="assets/img/active-startup-icon.png" data-aos="fade-down" class="active-ind-startup-list"> 
                    </div>
                   <div class="align-self-center logo-startup-list">
                        <img src="<?php echo base_url("assets/startup/$value[startup_image]"); ?>" class="img-responsive" width="150" height="150"> 
                    </div>
                    <div> 
                        
                        <br>    
                        <br>    
                        <p class="text-center title-startup-title" data-aos="fade-up" data-aos-delay="150"> <?php echo $value['startup_name'] ?></p> 
                    </div>

                </div>
            <?php endforeach ?>
        </div>

        <br>
        <br>
        <div class="row">
            <div class="col offset-xl-0 col-xs-12 col-md-12 col-xl-12">
                <div class="d-flex text-center"><button class="btn btn-primary btn-more" type="button" data-aos="fade-down" style="margin:auto;">Read More</button></div>
            </div>
        </div>
    </div>
</section>