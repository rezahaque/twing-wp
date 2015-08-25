<section id="<?php echo $id ?>" class="subscription">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="block">
                    <div class="section-title">
                        <h2><?php echo $contents['title']; ?></h2>
                        <p><?php echo $contents['description'] ?></p>
                    </div>
                    <div id="subscription-form">
                        <?php echo do_shortcode($contents['subscription_form']) ?>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
</section>