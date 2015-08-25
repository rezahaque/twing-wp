<!-- Feature-1 start -->
<section id="<?php echo $id;?>" class="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="showcase-img text-center wow ">
                    <img src="<?php echo $contents['image']; ?>" alt="">
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="content">
                	<?php if($contents['title']): ?>
                        <h2 class="mid-title"><?php echo $contents['title']; ?></h2>
	                <?php endif; ?>
                    <div class="desc">
                    	<?php echo $contents['description']; ?>
                    </div>
                    <div class="service-item">
                        <?php foreach($contents['featured_items'] as $item): ?>
                        <div class="media">
                            <div class="icon pull-left">
                                <span class="<?php echo $item['icon']?>"></span>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $item['title']?></h4>
                                
                                <?php echo $item['description']?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature-1 end -->




