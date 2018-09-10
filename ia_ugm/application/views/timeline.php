<section>
        <div class="container ia-container">
            <div class="row" style="height:59px;">
                <div class="col">
                    <h1 class="text-left ia-title" data-aos="fade-down">timeline</h1>
                   <!--  <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                    <hr data-aos="fade-right" class="title-underline"> -->
                </div>
            </div>
            <div class="row">
                <?php foreach ($timeline as $key => $value): ?> 
                <div class="col-12 col-md-6 col-sm-6 col-xs-12 col-lg-3">
                    <figure class="figure case-timeline">
                        <div class="img-timeline">
                            <div data-aos="fade-down" class="bg-timeline">
                                <img src="<?php echo base_url("assets/timeline/$value[timeline_image]"); ?>" class="img-responsive">
                            </div>
                        </div>
                        <div class="cp-timeline">
                            <?php 
                                $date_end = DateTime::createFromFormat('Y-m-d', $value['timeline_start']);
                                $date_start = DateTime::createFromFormat('Y-m-d', $value['timeline_end']);
                                // echo $value['timeline_start']; 
                            ?>
                            <div data-aos="fade-left" class="date-timeline">
                                <span class="day-timeline"><?php echo $date_start->format('d'); ?></span>
                                <span class="month-timeline"><?php echo $date_start->format('M'); ?></span>
                            </div>
                            <div data-aos="fade-right" class="date-timeline2">
                                <span class="day-timeline"><?php echo $date_end->format('d'); ?></span>
                                <span class="month-timeline"><?php echo $date_end->format('M'); ?></span>
                            </div>
                            <!-- <div data-aos="fade-left" class="date-timeline">
                            </div>
                            <div data-aos="fade-right" class="date-timeline2">
                                <?php 
                                    $date = DateTime::createFromFormat('Y-m-d', $value['timeline_end']);
                                    echo $date->format('d')."<br>".$date->format('M');
                                    // echo $value['timeline_end']; 
                                ?>
                                </span>
                            </div> -->
                            <p data-aos="fade" class="title-timeline"><?php echo $value['timeline_name']; ?></p>
                            <p data-aos="fade"><!-- <?php echo $value['timeline_description']; ?> --></p>
                        </div>
                    </figure><button class="btn btn-primary btn-timeline" type="button" data-aos="fade-up">Join</button>
            </div>
            <?php endforeach ?>
            <div class="row">
                <div class="col">
                    <!-- <div class="d-flex slider-bullet" data-aos="fade">
                        <div class="d-flex wrapper-slide-circle">
                            <div class="slide-circle light-slide-circle"></div>
                            <div class="slide-circle dark-slide-circle"></div>
                            <div class="slide-circle dark-slide-circle"></div>
                            <div class="slide-circle dark-slide-circle"></div>
                            <div class="slide-circle dark-slide-circle"></div>
                        </div>
                    </div> -->
                </div>
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