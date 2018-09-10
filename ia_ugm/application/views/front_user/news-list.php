        <div class="container ia-title-container no-navbar-container">
            <div class="row" style="height:59px;">
                <div class="col">
                    <h1 class="text-left ia-title" data-aos="fade-down">News</h1>
                    <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                    <hr data-aos="fade-right" class="title-underline">
                </div>
            </div>
   
            <?php foreach ($news as $key => $value): ?>
            <div>
                <div class="row">

                        <div class="col-4 col-lg-2 col-md-2 col-sm-4 col-xs-4">
                            <a style="text-decoration-color: black" href="<?php echo base_url("news/view/$value[news_id]"); ?>">
                                <div class="img-news-list" style="background-image:url(&quot;<?php echo base_url("assets/news/$value[news_image1]"); ?>&quot;);">
                                </div>
                            </a>
                        </div>
                        <div class="col-8 col-lg-10 col-md-10 col-sm-8 col-xs-8">
                            <a href="#">
                                <h3 class="category-news-list"><?php echo $value['category_name']; ?></h3>
                            </a>
                            <span><i class="fa fa-clock-o my-info-icons"></i>
                                <?php 
                                    $date_release = DateTime::createFromFormat('Y-m-d', $value['news_release']);
                                    echo  $date_release->format('d F Y'); ?>
                            </span>
                            <a style="text-decoration-color: black" href="<?php echo base_url("news/view/$value[news_id]"); ?>">
                                <h1 class="title-news-list"><?php echo $value['news_title']; ?></h1>
                            </a>
                        </div>
                </div>
                <div class="row">
                    <div class="col col-underline-news-list">
                        <hr class="news-list-underline">
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            
            
    </section>
    