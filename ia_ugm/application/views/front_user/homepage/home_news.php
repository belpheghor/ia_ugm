
    <section style="width:100%;" id="news">
        <div class="container no-padding-container">
            <div class="row">
                <div class="col">
                    <div class="news-slide">
                        <div class="title-news-slide">
                            <h1 class="text-left ia-title">NEWS</h1>
                            <hr class="title-cp-underline title-underline-base">
                        </div>
                        <div class="img-news-slide">
                            <div class="bg-news-slide" style="background-image:url(&quot;<?php echo base_url("assets/img/a380.jpg");?>&quot;);"></div>
                        </div>
                            <?php foreach ($news as $key => $value): ?>
                        <div class="cp-news-slide">
                            <div class="cp-center-news-slide">
                                <div class="date-news-slide">
                                    <?php 
                                    $date_release = DateTime::createFromFormat('Y-m-d', $value['news_release']);
                                    ?>
                                    <span class="day-news-slide"><?php echo $date_release->format('d'); ?></span>
                                    <span class="month-news-slide"><?php echo $date_release->format('M'); ?></span>
                                    <span class="month-news-slide"><?php echo $date_release->format('Y'); ?></span>
                                </div>
                                <p class="title-cp-news-slide"><?php echo $value['news_title'] ?></p>
                                <p><?php echo $value['news_content']; ?></p>
                            </div>
                        </div>
                            <?php endforeach ?>
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex slider-bullet">
                                        <div class="d-flex wrapper-slide-circle">
                                            <div class="slide-circle light-slide-circle"></div>
                                            <div class="slide-circle dark-slide-circle"></div>
                                            <div class="slide-circle dark-slide-circle"></div>
                                            <div class="slide-circle dark-slide-circle"></div>
                                            <div class="slide-circle dark-slide-circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col offset-xl-0 col-xs-12 col-md-12 col-xl-12">
                    <div class="d-flex center-button"><button class="btn btn-primary btn-more" type="button" data-aos="fade-down" style="margin:auto;" onclick="window.location.href='<?php echo base_url('news')?>'">Read More</button></div>
                </div>
            </div>
        </div>
    </section>