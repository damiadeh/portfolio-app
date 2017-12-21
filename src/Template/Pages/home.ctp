
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
 
    <?= $this->Html->meta('icon') ?> 
   <?php /* $this->Html->css('base.css'
    $this->Html->css('cake.css'
    $this->Html->css('home.css') */?>
    <?php echo $this->Html->css('bootstrap.min') ?>
    <?php echo $this->Html->css('plugins') ?>
    <?php echo $this->Html->css('roboto-railway-webfont') ?>
    <?php echo $this->Html->css('linearicons-web-font') ?>
    <?php echo $this->Html->css('magnific-popup') ?>
    <?php echo $this->Html->css('style') ?>
    <?php echo $this->Html->css('responsive') ?>
    <?php echo $this->Html->script('modernizr-2.8.3-respond-1.4.2.min') ?>
    <?php echo $this->Html->script('jquery-1.11.2.min') ?>
    <?php echo $this->Html->script('bootstrap.min') ?>
    <?php echo $this->Html->script('plugins') ?>
    <?php echo $this->Html->script('jquery.magnific-popup') ?>
    <?php echo $this->Html->script('modernizr') ?>
    <?php echo $this->Html->script('main') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body>

 <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
           <nav id="main-nav">
            <ul>
                <li><a href="#home"><span>Home</span></a></li>
                <li><a href="#features"><span>Features</span></a></li>
                <li><a href="#experience"><span>Experience</span></a></li>
                <li><a href="#portfolio"><span>Portfolio</span></a></li>
                <li><a href="#contact"><span>Contact</span></a></li>
                
            </ul>
            <a href="#0" class="cd-close-menu">Close<span></span></a>
        </nav>
<?php foreach($admin as $admin); ?>

        <!--Home page style-->
        <header id="home" class="home home-main-content">
            <div class="overlay sections">
                <div class="container text-center">
                    <div class="row">
                        <div class="div-menu">
                            <header class="cd-header">
                                <div id="cd-logo">
                                    <a href="#"><h1 class="logo"><b><?= h($admin->logotext) ?></b></h1></a>
                                </div>
                                <a class="cd-menu-trigger" href="#main-nav"><span></span></a>
                            </header>
                        </div>


                        <div class="home-wrapper">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                <div class="home-content">
                                    <h1><?= h($admin->name) ?></h1>
                                    <p><?= h($admin->quote) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Sections -->
        <section id="about" class="sections3">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="about-wrapper">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="about-photo">
                                <?= $this->Html->image('man.png') ?>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="about-content text-left">
                                <h4><?= h($admin->about_heading) ?></h4>
                                <p><?= h($admin->first_paragraph) ?></p>
                                <p><?= h($admin->second_paragraph) ?></p>
                                <a href="#" class="btn btn-default">Hire Me !</a>
                            </div>
                        </div>

                    </div>
                </div>	
            </div> <!-- /container -->       
        </section>

        <!-- Sections -->
        <section id="features" class="sections lightbg">

            <div class="heading-content text-center">
                <h3>My Working Process</h3>
                    <p><?= h($admin->about_heading) ?></p>
            </div>

            <div class="container text-center">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="features-wrapper">

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="features-bg design">

                                <div class="features-item">
                                    <span class="fa fa-facebook"></span>
                                    <h6><a href="#">Web</a></h6>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="features-bg development">

                                <div class="features-item">
                                    <i class="lnr lnr-magic-wand"></i>
                                    <h6><a href="#">Games</a></h6>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="features-bg testing">

                                <div class="features-item">
                                   <?= $this->html->tag('span','',['class' => 'lnr lnr-dinner']) ?>
                                    <h6><a href="#">Security</a></h6>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="features-bg launch">

                                <div class="features-item">
                                    <i class="lnr lnr-rocket"></i>
                                    <h6><a href="#">Launch</a></h6>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- /container -->       
        </section>

        <!-- Sections -->
        <section id="experience" class="experience">
            <div class="overlay sections">
                <div class="container">
                    <div class="row">
                        <div class="experience-wrapper">

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="experience-content">

                                    <h4>Work Experience</h4>
                                    
                                    <?php foreach($experience as $experience): ?>
                                    
                                    <div class="content-details content-border">
                                        <h5><?= h($experience->company) ?></h5>
                                        <h6><?= h($experience->exp_duration) ?></h6>
                                        <p><?= h($experience->exp_description) ?></p>
                                    </div>
                                    <?php endforeach; ?>
                                   
                                    <!--<div class="content-details">
                                        <h5>Jumia</h5>
                                        <h6>OCT 2013 - june 2015</h6>
                                        <p>orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>-->

                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="experience-content">

                                    <h4>Education</h4>
                                    <?php foreach($education as $education): ?>
                                    <div class="content-details content-border">
                                        <h5><?= h($education->school_name) ?></h5>
                                        <h6><?= h($education->sch_duration) ?></h6>
                                        <p><?= h($education->sch_description) ?></p>
                                    </div>
                                    <?php endforeach; ?>
                                    
                                </div>
                            </div>

                        </div>	
                    </div>
                </div>
            </div>       
        </section>

        <!-- Sections -->
        <section id="portfolio" class="sections">
            <div class="container">

                <div class="heading-content text-center">
                    <h3>My Latest Works</h3>
                    <p><?= h($admin->about_heading) ?></p>
                </div>

                <!-- Example row of columns -->
                <div class="row">
                    <div class="portfolio-wrapper">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="portfolio-item">
                                <?= $this->Html->image('pf1.jpg') ?>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="portfolio-item">
                                <?= $this->Html->image('pf2.jpg') ?>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="portfolio-item">
                                <?= $this->Html->image('pf3.jpg') ?>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="portfolio-item">
                                <?= $this->Html->image('pf4.jpg') ?>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="portfolio-wrapper2">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="portfolio-item width-img">
                                <?= $this->Html->image('pf1.jpg') ?>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <?= $this->Html->image('pf2.jpg') ?>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="portfolio-item">
                                <?= $this->Html->image('pf3.jpg') ?>
                            </div>
                        </div>

                    </div>
                </div>
      
        </section>

       
        <!-- Sections -->
        <section id="contact" class="contact">
            <div class="overlay sections">
                <div class="container">
                    <div class="row">
                        <div class="contact-wrapper">

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="contact-area">

                                    <h4>Leave a message</h4>
  
                                    <?= $this->Form->create($form) ?>
                                            <?= $this->Form->input(('name'),['label' => false, 'class' => 'form-control', 'placeholder' => 'Name']); ?>
                                            <?= $this->Form->input(('email'), ['label' => false, 'class' => 'form-control', 'placeholder' => 'Email']); ?>
                                            <?= $this->Form->input(('subject'), ['label' => false, 'class' => 'form-control', 'placeholder' => 'Subject']); ?>
                                            <?= $this->Form->textarea(('message'), ['class' => 'form-control', 'placeholder' => 'Message']); ?>
                                       
                                        <?= $this->Form->button(('SEND'), ['class' => 'btn btn-default btn-danger pull-right']) ?>
                                        <?= $this->Form->end() ?>

                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="contact-details-area">

                                    <div class="contact-details">
                                        <h4>Address</h4>
                                        <p><?= h($admin->address) ?></p>
                                    </div>

                                    <div class="contact-details">
                                        <h4>Phone</h4>
                                        <p>+880 1912 109670</p>
                                        <p>+880 1670 863946</p>
                                    </div>

                                    <div class="contact-details">
                                        <h4>Web</h4>
                                        <p>Mail: <?= h($admin->email) ?></p>
                                        <p>Website: <?= h($admin->website) ?></p>
                                    </div>

                                </div>
                            </div>

                        </div>	
                    </div>
                </div>
            </div>       
        </section>

<!-- footer-->
<footer class="bg-danger">
       
        <div class="container text-center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="main-footer">

                            <div class="social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa dribbble fa-dribbble"></i></a>
                            </div>

                            <p>Developed with CakePHP 3 by Damilare Adepoju</p>

                        </div>
                    </div>
                </div>
            </div>
    </footer>




<?php echo $this->Html->script('jquery-1.11.2.min') ?>
    <?php echo $this->Html->script('bootstrap.min') ?>
    <?php echo $this->Html->script('plugins') ?>
    <?php echo $this->Html->script('jquery.magnific-popup') ?>
    <?php echo $this->Html->script('modernizr') ?>
    <?php echo $this->Html->script('main') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</body>
</html>
