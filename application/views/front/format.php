
<!-- Main Content Section -->
<main class="main">
    <!-- <?php print_r($slider); ?> -->

    <section class="home-slider">
        <div class="flexslider">
            <ul class="slides">
                <?php foreach ($slider as $slide) { ?>
                <li class="has-overlay">
                    <img src="<?php echo base_url('uploads/contents/'.$slide->photo);?>" alt="Slider 1" />
                    <div class="slider-content">
                        <div class="container">
                            <h2> <?php echo @$slide->title;  ?></h2>
                            <?php echo @$slide->content; ?>
                        </div>
                    </div>
                </li> 
                <?php } ?>  
         </ul>
     </div>
 </section>    

</main>
<!-- Main Content Section --> 
