
    <section id="program">
        <div class="container ia-container">
            <div class="row" style="height:59px;">
                <div class="col">
                    <h1 class="text-left ia-title" data-aos="fade-down">Programs</h1>
                    <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                    <hr data-aos="fade-right" class="title-underline">
                </div>
            </div>
            <div class="row" style="height:100%;">
                <?php foreach ($program as $key => $value): ?>
                <div class="col-12 col-md-6 col-sm-12 col-xs-12 col-xl-6" data-aos="fade-up">
                    <figure class="figure news-box">
                        <div>
                            <div class="image-news-box" style="background-image:url(&quot;<?php echo base_url("assets/program/$value[program_image]"); ?>&quot;);"></div>
                        </div>
                        <figcaption class="figure-caption text-news-box caption-news-box">
                        <a href="<?php echo base_url("program/view/$value[program_id]"); ?>"></a>
                            <?php echo $value['program_name']; ?>
                        </figcaption>
                    </figure>
                </div>
                <?php endforeach ?>
            </div>
            <div class="row">
                <div class="col offset-xl-0 col-xs-12 col-md-12 col-xl-12">
                    <div class="d-flex center-button"><button class="btn btn-primary btn-more" type="button" data-aos="fade-down" onclick="window.location.href='<?php echo base_url('program')?>'">Read More</button></div>
                </div>
            </div>
        </div>
    </section>