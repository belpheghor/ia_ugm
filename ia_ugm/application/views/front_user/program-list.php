        <div class="container ia-container no-navbar-container">
            <div class="row" style="height:59px;">
                <div class="col">
                    <h1 class="text-left ia-title" data-aos="fade-down">program</h1>
                    <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                    <hr data-aos="fade-right" class="title-underline">
                </div>
            </div>
            <div class="row" style="height:100%;">
                <?php foreach ($program as $key => $value): ?>
                <div class="col-12 col-md-3 col-sm-6 col-xs-6 col-xl-3" data-aos="fade-up">
                    <figure class="figure news-box">
                        <div>
                            <div class="image-news-box" style="background-image:url(&quot;<?php echo base_url("assets/program/$value[program_image]"); ?>&quot;);"></div>
                        </div>
                        <a style="text-decoration-color: black" href="<?php echo base_url("program/view/$value[program_id]"); ?>">
                        <figcaption class="figure-caption text-news-box caption-news-box"><?php echo $value['program_name']; ?></figcaption>
                        </a>
                    </figure>
                </div>
                <?php endforeach ?>
            </div>
            
        
</section>