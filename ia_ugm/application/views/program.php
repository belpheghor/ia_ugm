<section>
    
    <div class="container ia-container">
        <div class="row" style="height:59px;">
            <div class="col">
                <h1 class="text-left ia-title" data-aos="fade-down">Programs</h1>
                
            </div>
        </div>
        <div class="row" style="height:100%;">
            <?php foreach ($program as $key => $value): ?>
                <div class="col-12 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up">
                <figure class="figure news-box">
                    <div>
                        <div class="image-news-box">
                            <img src="<?php echo base_url("assets/program/$value[program_image]"); ?>" class="img-responsive">
                        </div>
                    </div>
                    <figcaption class="figure-caption text-news-box caption-news-box"><a href="<?php echo base_url("program_detail/view/$value[program_id]"); ?>"><?php echo $value['program_name']; ?></a>&nbsp;</figcaption>
                </figure>
            </div>
            <?php endforeach ?>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col offset-xl-0 col-xs-12 col-md-12 col-xl-12">
                <div class="d-flex text-center"><button class="btn btn-primary btn-more" type="button" data-aos="fade-down">Read More</button></div>
            </div>
        </div>
        <br>
        <br>
    </div>
</section>