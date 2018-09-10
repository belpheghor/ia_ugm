    <title><?php echo $timeline['timeline_name'] ?></title>
</head>

<body>
    <div id="myModal" class="modal"><span id="close" class="close">X</span><img src="<?php echo base_url("assets/timeline/$timeline[timeline_image]"); ?>" id="img01" class="modal-content">
        <div id="caption"></div>
    </div>
    <section class="hero-fixed">
        <div>
            <nav class="navbar navbar-light navbar-expand-md sticky whiteNav">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>" style="background-repeat:no-repeat;width:161;background-position:center;background-size:80%;">
                        <img src="<?php echo base_url("assets/img/partner-logo/logo_ia.png") ?>" id="logo-brand">
                    </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url("program"); ?>">Program</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url("news"); ?>">news</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url("timeline"); ?>">timeline</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url("mentor"); ?>">mentor</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url("startup"); ?>">startup</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url("staff"); ?>">staff</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url("partner"); ?>">partner</a></li>
                        </ul>
                        <form class="form-inline ml-auto" target="_self" style="margin:0px;margin-left:0px;">
                            <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control" type="search" name="search" id="search-tab"></div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container no-navbar-container">
            <div class="row" style="height:59px;">
                <div class="col">
                    <h1 class="text-left ia-title" data-aos="fade-down"><?php echo $timeline['timeline_name'] ?></h1>
                    <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                    <hr data-aos="fade-right" class="title-underline">
                </div>
            </div>
            <div class="row">
                <div class="col col-md-5 col-xs-5 col-lg-5"><img class="img-fluid" src="<?php echo base_url("assets/timeline/$timeline[timeline_image]"); ?>" id="myImg"></div>
                <div class="col col-md-7 col-xs-7 col-lg-7">
                    <h1 class="ia-title">description</h1>
                    <hr class="underline-fluid ia-gray-title-underline">
                    <p style="margin-bottom:5px;"><?php echo $timeline['timeline_description'] ?></p>
                    <hr class="underline-fluid ia-gray-title-underline">
                    <div class="d-inline-flex social-detail-icon">
                        <a href="#">
                            <img src="<?php echo base_url("assets/img/fb-logo.png"); ?>" class="social-network-icon my-info-icons"></a>
                            <a href="#">
                                <img src="<?php echo base_url("assets/img/li-logo.png"); ?>" class="social-network-icon my-info-icons">
                            </a>
                            <a href="#">
                                <img src="<?php echo base_url("assets/img/ig-logo.png"); ?>" class="social-network-icon my-info-icons">
                            </a>
                        </div>
                    <hr
                        class="underline-fluid ia-gray-title-underline"><button class="btn btn-primary float-right btn-more" type="button" onclick="window.open('<?php echo $timeline['registration_link']; ?>','_blank')">Register</button></div>
            </div>
            