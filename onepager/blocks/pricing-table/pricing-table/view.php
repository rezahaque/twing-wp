
<section id="<?php echo $id; ?>" class="pricing-table">
    <div class="container">
        <div class="section-title">
            <h2>Pricing Table</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, ipsum.</p>
        </div>
        <div class="row">
        <?php foreach($contents['pricing'] as $price):?>
            <div class="col-md-<?php echo 12/count($contents['pricing']);?>">
                <ul class="pricing-item basic <?php echo ($price['highlight']) ? 'highlight' : '' ?>">
                    <li class="title">
                        <p><?php echo $price['title'];?></p>
                        <span><?php echo $price['price'];?></span>
                    </li>
                    <?php foreach($price['items'] as $item):?>
                    <li><p><?php echo $item ?></p></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
        </div>

</section>