
    <section id="mentor">
        <div class="container ia-container">
            <div class="row" style="height:59px;">
                <div class="col">
                    <h1 class="text-left ia-title" data-aos="fade-down">mentor</h1>
                    <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                    <hr data-aos="fade-right" class="title-underline">
                </div>
            </div>
            <div class="row">
                <?php foreach ($mentor as $key => $value): ?>
                <div class="col-6 offset-0 col-xs-6 col-md-3 col-lg-3">
                    <a style="text-decoration: none;" href="<?php echo base_url("mentor/view/$value[person_id]"); ?>">
                        <div class="align-self-center"><img src="<?php echo base_url("assets/mentor/$value[person_image]"); ?>" data-aos="zoom-in" class="photo-mentor-list">
                        </div>
                    </a>
                    <div data-aos="fade-up">
                        <p class="text-center title-startup-title">
                            <?php echo $value['front_degree'] ?> 
                            <?php echo $value['first_name'] ?>  
                            <?php echo $value['last_name'] ?>  
                            <?php echo $value['back_degree'] ?>
                        </p>
                        <p class="text-center title-startup-title"><?php echo $value['person_company'] ?></p>
                    </div>
                    <div class="d-flex home-social-detail-icon">
                        <a target="_blank" href="http://<?php echo $value['person_linkedin']; ?>">
                            <img src="<?php echo base_url("assets/img/li-logo.png"); ?>" data-aos="fade-down" class="home-social-network-icon">
                        </a>
                        <a target="_blank" href="http://<?php echo $value['person_website']; ?>">
                            <img src="<?php echo base_url("assets/img/web-logo.png"); ?>" data-aos="fade-down" data-aos-once="true" class="home-social-network-icon">
                        </a>
                    </div>
                </div>
                 <?php endforeach ?>
                
            </div>
            <div class="row">
                <div class="col offset-xl-0 col-xs-12 col-md-12 col-xl-12">
                    <div class="d-flex center-button"><button class="btn btn-primary btn-more" type="button" data-aos="fade-down" style="margin:auto;" onclick="window.location.href=('<?php echo base_url('mentor') ?>')">Read More</button></div>
                </div>
            </div>
    </section>