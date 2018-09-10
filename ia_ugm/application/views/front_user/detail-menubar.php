    <title><?php echo $title ?></title>
<body>
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
                        <div class="form-group">
                            <label for="search-field">
                                <i class="fa fa-search"></i>
                            </label>
                            <input class="form-control" type="search" name="search" id="search-tab">
                        </div>
                    </form>
            </div>
            </div>
        </nav>
        </div>