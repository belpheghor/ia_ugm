 <section>
    <div class="container ia-container">
        <div class="row" style="height:59px;">
            <div class="col">
                <h1 class="text-left ia-title" data-aos="fade-down">our partner</h1>
                    <!-- <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                        <hr data-aos="fade-right" class="title-underline"> -->
                    </div>
                </div>
                <br>    
                <br>    
                <div class="row">
                    <?php foreach ($partner as $key => $value): ?>

                        <div class="col-6 offset-0 col-xs-6 col-md-4 col-lg-2" data-aos="fade-up">
                            <div class="align-self-center logo-startup-list">
                                <img src="<?php echo base_url("assets/partner/$value[partner_image]"); ?>" class="img-responsive">
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