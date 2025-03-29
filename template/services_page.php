<?php
/**
 * Template Name: Services Page
 */

get_header(); ?>


<section id="hero_area">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
      <h3><?php echo get_field('hero_area_title'); ?></h3>
      <p><?php echo get_field('hero_area_title_description'); ?></p>
      <br>
      <a href="#"><?php echo get_field('hero_area_button'); ?></a>
      </div>
      <div class="col-md-3">
      <?php $image = get_field('hero_area_box_1_image');?>
      <img src="<?php echo $image;?>" alt="">
      </div>
      <div class="col-md-2">
      <?php $image = get_field('hero_area_box_2_image_');?>
      <img src="<?php echo $image;?>" alt="">
      </div>
      <div class="col-md-2">
      <?php $image = get_field('hero_area_box_3_image');?>
      <img src="<?php echo $image;?>" alt="">
      </div>
    </div>
  </div>
</section>



<section id="section_2">
  <div class="main_areas">
  <div class="title_area">
    <h2><?php echo get_field(''); ?> Better Agency/SEO Solution At <br> Your Fingertips</h2>
  </div>
  <div class="box_main">
    <div class="sub_box">
      <img src="<?php echo get_template_directory_uri(  ). '/img/fff.png' ?>" alt="">
      <h4><?php echo get_field(''); ?> Analytics And Reporting</h4>
      <p><?php echo get_field(''); ?> Increase your team's productivity <br> and save time with a bot that <br> answers and fields customer <br> inquiries</p>
      <br>
      <a href="#"><?php echo get_field(''); ?> Read details <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="sub_box">
    <img src="<?php echo get_template_directory_uri(  ). '/img/fff.png' ?>" alt="">
      <h4><?php echo get_field(''); ?> Analytics And Reporting</h4>
      <p><?php echo get_field(''); ?> Increase your team's productivity <br> and save time with a bot that <br> answers and fields customer <br> inquiries</p>
      <br>
      <a href="#"><?php echo get_field(''); ?> Read details <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="sub_box">
    <img src="<?php echo get_template_directory_uri(  ). '/img/fff.png' ?>" alt="">
      <h4><?php echo get_field(''); ?> Analytics And Reporting</h4>
      <p><?php echo get_field(''); ?> Increase your team's productivity <br> and save time with a bot that <br> answers and fields customer <br> inquiries</p>
      <br>
      <a href="#"><?php echo get_field(''); ?> Read details <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="sub_box">
    <img src="<?php echo get_template_directory_uri(  ). '/img/fff.png' ?>" alt="">
      <h4><?php echo get_field(''); ?> Analytics And Reporting</h4>
      <p><?php echo get_field(''); ?> Increase your team's productivity <br> and save time with a bot that <br> answers and fields customer <br> inquiries</p>
      <br>
      <a href="#"><?php echo get_field(''); ?> Read details <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="sub_box">
    <img src="<?php echo get_template_directory_uri(  ). '/img/fff.png' ?>" alt="">
      <h4><?php echo get_field(''); ?> Analytics And Reporting</h4>
      <p><?php echo get_field(''); ?> Increase your team's productivity <br> and save time with a bot that <br> answers and fields customer <br> inquiries</p>
      <br>
      <a href="#"><?php echo get_field(''); ?> Read details <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="sub_box">
    <img src="<?php echo get_template_directory_uri(  ). '/img/fff.png' ?>" alt="">
      <h4><?php echo get_field(''); ?> Analytics And Reporting</h4>
      <p><?php echo get_field(''); ?> Increase your team's productivity <br> and save time with a bot that <br> answers and fields customer <br> inquiries</p>
      <br>
      <a href="#"><?php echo get_field(''); ?> Read details <i class="fa-solid fa-arrow-right"></i></a>
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