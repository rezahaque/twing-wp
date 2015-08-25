<header id="<?php echo $id; ?>">
    <div class="navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <!-- Logo -->
                    <img class="logo" src="<?php echo $contents['logo']; ?>" alt="<?php echo site_url(); ?>">
                </a>
            </div>

            <!-- navigation -->
            <div class="collapse navbar-collapse navbar-right" id="navbar">

                <?php wp_nav_menu(array(
                    'menu' =>$contents['menu'] ,
                    'menu_class'=>'nav navbar-nav',
                )) ?>
            </div>
        </div>
    </div>

    <section id="hero-area" class="text-center">
        <div class="container">
            <div class="banner">
                <h2 class="wow fadeInUp" data-wow-delay="0.3s"><?php echo $contents['title']; ?></h2>
                <h3 class="wow fadeInUp" data-wow-delay="0.5s">
                  <?php echo $contents['description'] ?>
                </h3>
                <a href="<?php echo $contents['button_link'] ?>" class="btn btn-download wow fadeInUp" data-wow-delay="0.7s">
                    <?php echo $contents['button_text'] ?>
                </a>
            </div>
        </div>
    </section>
</header>

        <!-- Banner Start -->

        <!-- Banner End -->
