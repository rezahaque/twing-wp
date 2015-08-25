<section  id="<?php echo $id; ?>" class="features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2><?php echo $contents['title']; ?></h2>
                    <p><?php echo $contents['description']; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10">
      			 <?php foreach($contents['items'] as $ii=>$feature): ?>
	            	<div class="col-sm-4 col-md-4 wow fadeInUp" data-wow-delay="<?php echo 0.5+0.3*$ii ?>s">
	                    <div class="media feature-item">
	                        <div class="icon pull-left">
	                            <?php if( op_is_image($feature['media'])):?>
									<img src="<?php echo $feature['media'] ?>" alt="<?php echo $feature['title']?>" />
								<?php else :?>
									<span class="<?php echo $feature['media'] ?>"></span>
								<?php endif;?>
	                        </div>

	                        
	                        <div class="media-body">
	                            <h4 class="media-heading"><?php echo $feature['title']?></h4>
	                            <p><?php echo $feature['description']?></p>
	                        </div>
	                    </div>
	                </div>
				<?php endforeach; ?>  		
			</div>
        </div>
    </div>
</section>
           
    



