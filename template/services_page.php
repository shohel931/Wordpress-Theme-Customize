<?php
/**
 * Template Name: Services Page
 */

get_header(); ?>


<section id="hero_area">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      <h3><?php echo get_field(''); ?> We Serve Lot Of <br> Services For <br> Cusrtomers</h3>
      <p><?php echo get_field(''); ?> An enim nullam tempor sapien gravida donec enim <br> ispum porta justo congue magna at</p>
      <a href="#"><?php echo get_field(''); ?> Get Start Now</a>
      </div>
      <div class="col-md-4">
      <img src="<?php echo get_template_directory_uri(  ). '/img/image.png' ?>" alt="">
      </div>
      <div class="col-md-2">
      <img src="<?php echo get_template_directory_uri(  ). '/img/image2.png' ?>" alt="">
      </div>
      <div class="col-md-2">
      <img src="<?php echo get_template_directory_uri(  ). '/img/image3.png' ?>" alt="">
      </div>
    </div>
  </div>
</section>



  <div class="main_area">
    <div class="sub_area">

    </div>
    <div class="image_area">
    </div>
    <div class="image_area1">
    
    </div>
    <div class="image_area2">
    
    </div>
  </div>









<?php get_footer(); ?>