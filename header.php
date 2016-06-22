<header style="z-index:2000;">
                <div class="container">
                    <!-- Site Logo -->
                    <a href="<?php echo $site_url;?>index.php" class="site-logo">
                        <img class="header-scroll imageLogo" width="180" src="<?php echo $site_url;?>/img/logo.png">
                    </a>
                    <!-- END Site Logo -->
<?php if(!empty($_COOKIE['security_uid'])){?>


                    <ul class="nav navbar-nav-custom pull-right" style="margin-left: 20px;">
                    <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="img/placeholders/avatars/avatar9.jpg" alt="avatar">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-header">
                    <strong><?php echo $_SESSION['FULLNAME'];?></strong>
                    </li>
                    <li>
                    <a href="<?php echo $site_url;?>logout.php">
                    <i class="fa fa-power-off fa-fw pull-right"></i>
                    Log out
                    </a>
                    </li>
                    </ul>
                    </li>
                    </ul><?php } ?>
                    <!-- Site Navigation -->
                    <nav>
                        <!-- Menu Toggle -->
                        <!-- Toggles menu on small screens -->
                        <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">Menu</a>
                        <!-- END Menu Toggle -->

                        <!-- Main Menu -->
                        <ul class="site-nav">
                            <li>
                                <a href="<?php echo $site_url;?>index.php">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo $site_url;?>cerca_candidato.php">Cerca Candidato</a>
                            </li>
                            <li>
                                <a href="<?php echo $site_url;?>cerca_partito.php">Cerca Partito/Lista</a>
                            </li>
                            <li>
                                <a href="<?php echo $site_url;?>map">Mappa Sezioni Elettorali</a>
                            </li>  
                            <li>
                                <a href="<?php echo $site_url;?>progetto.php">Il Progetto</a>
                            </li>
                            
                            
                            <li>
                                <a href="<?php echo $site_url;?>contatti.php" class="featured">Contatti <i class="fa fa-arrow-right"></i></a>
                            </li>
                        </ul>
                        <!-- END Main Menu -->
                        
                    </nav>
                    <!-- END Site Navigation -->
                </div>
            </header>