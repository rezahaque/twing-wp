<section id="<?php echo $id; ?>" class="call-to-action">
    <div class="overlay"></div>
    <div class="container">
        <div class="block text-center">
            <h3 class="wow fadeInUp" ><?php echo $contents['title']; ?></h3>
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo $contents['description']; ?></p>
            <a class="btn btn-download wow fadeInUp" data-wow-delay=".5s" href="<?php echo $contents['button_link'] ?>"><?php echo $contents['button_text']; ?></a>
        </div>
    </div>
</section>