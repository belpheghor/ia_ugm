        <div class="container ia-container no-navbar-container">
            <div class="row" style="height:59px;">
                <div class="col">
                    <h1 class="text-left ia-title" data-aos="fade-down">timeline</h1>
                    <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                    <hr data-aos="fade-right" class="title-underline">
                </div>
            </div>
            <div class="row">
                <?php foreach ($timeline as $key => $value): ?>
                <div class="col-12 col-md-6 col-sm-6 col-xs-12 col-lg-3">
                    <figure class="figure case-timeline">
                        <div class="img-timeline">
                            <div class="bg-timeline" style="background-image:url(&quot;<?php echo base_url("assets/timeline/$value[timeline_image]"); ?>&quot;);"></div>
                        </div>
                        <div class="cp-timeline">
                            <?php 
                                $date_start = DateTime::createFromFormat('Y-m-d', $value['timeline_start']);
                                $date_end = DateTime::createFromFormat('Y-m-d', $value['timeline_end']);
                            ?>
                            <div class="date-timeline2"><span class="day-timeline"><?php echo $date_start->format('d'); ?></span><span class="month-timeline"><?php echo $date_start->format('M'); ?></span></div>
                            <div class="date-timeline"><span class="day-timeline"><?php echo $date_end->format('d'); ?></span><span class="month-timeline"><?php echo $date_end->format('M'); ?></span></div>
                            <p class="title-timeline"><?php echo $value['timeline_name']; ?></p>
                            <p><?php 
                                    echo substr($value['timeline_description'],0,60).'...'; 
                                ?></p>
                        </div>
                    </figure>
                    <button class="btn btn-primary btn-timeline" type="button" onclick="window.location.href='<?php echo base_url("timeline/view/".$value['timeline_id']."");?>'">
                        Join</button>
                </div>
                <?php endforeach ?>
            </div>
            
            
</section>