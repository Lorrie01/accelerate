<?php
/**
 * Template name: Custom About Page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Theme
 * @since Accelerate Theme 1.1
 */
get_header(); ?>

<section class="home-page">

   <div class="site-content">

    <?php while ( have_posts() ) : the_post();?>
      <h2 class="about-hero"> <span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
    </div>
</section>
<section class="our-services">
    <div class="site-content">

    <h4>Our Services</h4>
    <p>We take pride in our clients and the content we create for them.<br>
        Here's a brief overview of our offered services</p>
    </div>
</section>

  <?php 
      //while ( have_posts() ) : the_post();
      $service_image_1 = get_field('service_image_1');
      $service_title_1 = get_field('service_title_1');
      $service_description_1= get_field('service_description_1');
      $service_image_2 = get_field('service_image_2');
      $service_title_2 = get_field('service_title_2');
      $service_description_2= get_field('service_description_2');
      $service_image_2 = get_field('service_image_2');
      $service_title_3 = get_field('service_title_3');
      $service_description_3= get_field('service_description_3');
      $service_image_3 = get_field('service_image_3');
      $service_title_4 = get_field('service_title_4');
      $service_description_4= get_field('service_description_4');
      $service_image_4 = get_field('service_image_4');
      $size = "full";
      ?>

<div class="site-content">
    <section="all-services">
        <div class="row">
            <div class="col-lg-8" id="service-desc">
                <h2><?php echo $service_title_1; ?></h2>
                <p><?php echo $service_description_1; ?> </p>
            </div>

            <div class="service-image">
                <?php if($service_image_1) {
                echo wp_get_attachment_image ($service_image_1, $size); ?>
                <?php } ?>
            </div>
        </div>
            <div class="row">
            <div class="col-lg-8" id="service-desc">
                <h2><?php echo $service_title_2; ?></h2>
                <p><?php echo $service_description_2; ?> </p>
            </div>

            <div class="service-image">
                <?php if($service_image_2) {
                echo wp_get_attachment_image ($service_image_2, $size); ?>
                <?php } ?>
            </div>
        </div>
            <div class="row">
            <div class="col-lg-8" id="service-desc">
                <h2><?php echo $service_title_3; ?></h2>
                <p><?php echo $service_description_3; ?> </p>
            </div>

            <div class="service-image">
                <?php if($service_image_3) {
                echo wp_get_attachment_image ($service_image_3, $size); ?>
                <?php } ?>
            </div>
        </div>
            <div class="row">
            <div class="col-lg-8" id="service-desc">
                <h2><?php echo $service_title_4; ?></h2>
                <p><?php echo $service_description_4; ?> </p>
            </div>

            <div class="service-image">
                <?php if($service_image_4) {
                echo wp_get_attachment_image ($service_image_4, $size); ?>
                <?php } ?>
            </div>
        </div>
        <?php endwhile; // end of the loop. ?>

    </section>

    <section>
        <ul class="contact-button">

            <li><h3>Interested in working with us?</h3></li>
            <li><a class="button" href="#">Contact Us</a></li>
        </ul>
    </section>
</div><!-- .site-content -->


<?php get_footer(); ?>