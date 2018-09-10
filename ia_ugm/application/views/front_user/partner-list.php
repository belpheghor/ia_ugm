        <div class="container ia-container no-navbar-container">
            <div class="row" style="height:59px;">
                <div class="col">
                    <h1 class="text-left ia-title" data-aos="fade-down">Partner</h1>
                    <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                    <hr data-aos="fade-right" class="title-underline">
                </div>
            </div>
            <div class="row">
                <?php foreach ($partner as $key => $value): ?>
                <div class="col-6 offset-0 col-xs-6 col-md-4 col-lg-2">
                      <a target="_blank" href="http://<?php echo $value['partner_link']; ?>">
                    <div class="align-self-center logo-startup-list" style="background-image:url(&quot;<?php echo base_url("assets/partner/$value[partner_image]"); ?>&quot;);"></div>
                      </a>
                    <div>
                        <p class="text-center title-startup-title"><?php echo $value['partner_name'] ?></p>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            
           
            