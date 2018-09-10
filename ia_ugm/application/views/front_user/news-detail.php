        <div class="container ia-title-container no-navbar-container">
            <div class="row" style="height:59px;">
                <div class="col">
                    <h1 class="text-left ia-title" data-aos="fade-down"><?php echo $news['news_title'] ?></h1>
                    <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                    <hr data-aos="fade-right" class="title-underline">
                </div>
            </div>
        </div>
        <div class="container" style="max-width:768px;">
            <div class="row">
                <div class="col"><img src="<?php echo base_url("assets/news/$news[news_image1]"); ?>" style="max-width:768px;"></div>
            </div>
            <div class="row">
                <div class="col">
                    <?php echo $news['news_content']; ?>
                </div>
            </div>
        </div>
        <div></div>
        <div class="container ia-title-container" style="width:1077;height:100%;">
            <div class="row" style="height:59px;">
                <div class="col" style="height:100%;">
                    <h1 class="text-left ia-title">RELATED NEWS</h1>
                    <hr data-bs-hover-animate="bounce" class="title-underline-base">
                    <hr data-bs-hover-animate="bounce" class="title-underline">
                </div>
            </div>
            <div class="row" style="margin-top:10px;">
                <?php foreach ($related as $key => $value): ?>
                <div class="col col-md-4 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-duration="500">
                    <figure class="figure related-case">
                        <div>
                            <?php 
                            if ($value['news_image1']==NULL) {
                                echo '<img src="'.base_url("assets/img/no_image.png").'" data-bs-hover-animate="pulse" class="related-image">';
                            }else{ 
                                echo '<img src="'.base_url("assets/news/$value[news_image1]").'" data-bs-hover-animate="pulse" class="related-image">';
                            } ?>
                        </div>
                        <figcaption class="figure-caption related-fig related-text">
                         <a href="<?php echo base_url("news/view/$value[news_id]"); ?>"></a>
                            <?php echo $value['news_title']; ?>
                        </figcaption>
                    </figure>
                </div>
                <?php endforeach ?>
            </div>
            <div>
                <div class="container-fluid footer footer-ia">
            </div>
        </div>
    </div>
    </section>
