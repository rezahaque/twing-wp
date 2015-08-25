<section id="<?php echo $id; ?>" class="counter">
    <div class="container">
        <div class="row">
			<?php foreach($contents['items'] as $ii=>$feature): ?>
            <div class="col-xs-6 col-md-3">
                <div class="block counter-item wow fadeInLeft" data-wow-delay="<?php echo 0.5+0.3*$ii ?>s">
                	<i class="<?php echo $feature['icon'] ?>"></i>
					<span data-to="<?php echo $feature['counter']; ?>">0</span>
                    <p><?php echo $feature['title']?></p>
                </div>
            </div>
            <?php endforeach; ?>  
        </div>
    </div>
</section>
