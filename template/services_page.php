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







<section id="section_2_1">
<div class="title_area">
    <h2><?php echo get_field('section_2_title'); ?></h2>
  </div>

<div class="main_solution">
  <div class="sub_solution">
  <?php $image = get_field('section_2__box_1_image');?>
      <img src="<?php echo $image;?>" alt="">
      <h4><?php echo get_field('section_2__box_1_title'); ?></h4>
      <p><?php echo get_field('section_2__box_1_title_description'); ?></p>
      <a href="#"><?php echo get_field('section_2__box_1_button'); ?> <i class="fa-solid fa-arrow-right"></i></a>
  </div>
  <div class="sub_solution">
  <?php $image = get_field('section_2__box_2_image');?>
      <img src="<?php echo $image;?>" alt="">
      <h4><?php echo get_field('section_2__box_2_title_'); ?></h4>
      <p><?php echo get_field('section_2__box_2_title_description'); ?></p>
      <a href="#"><?php echo get_field('section_2__box_2_button'); ?> <i class="fa-solid fa-arrow-right"></i></a>
  </div>
  <div class="sub_solution">
  <?php $image = get_field('section_2__box_3_image_');?>
      <img src="<?php echo $image;?>" alt="">
      <h4><?php echo get_field('section_2__box_3_title_'); ?></h4>
      <p><?php echo get_field('section_2__box_3_title_description_'); ?> </p>
      <a href="#"><?php echo get_field('section_2__box_3_button_'); ?> <i class="fa-solid fa-arrow-right"></i></a>
  </div>
</div>

<div class="main_solution2">
  <div class="sub_solution">
  <?php $image = get_field('section_2__box_4_image_');?>
      <img src="<?php echo $image;?>" alt="">
      <h4><?php echo get_field('section_2__box_4_title'); ?></h4>
      <p><?php echo get_field('section_2__box_4_title_description'); ?></p>
      <a href="#"><?php echo get_field('section_2__box_4_button'); ?> <i class="fa-solid fa-arrow-right"></i></a>
  </div>
  <div class="sub_solution">
  <?php $image = get_field('section_2__box_5_image');?>
      <img src="<?php echo $image;?>" alt="">
  <h4><?php echo get_field('section_2__box_5_title_'); ?></h4>
      <p><?php echo get_field('section_2__box_5_title_description_'); ?></p>
      <a href="#"><?php echo get_field('section_2__box_5_button_'); ?> <i class="fa-solid fa-arrow-right"></i></a>
  </div>
  <div class="sub_solution">
  <?php $image = get_field('section_2__box_6_image_');?>
      <img src="<?php echo $image;?>" alt="">
      <h4><?php echo get_field('section_2__box__6_title_'); ?></h4>
      <p><?php echo get_field('section_2__box_6_title_description_'); ?></p>
      <a href="#"><?php echo get_field('section_2__box_6_button'); ?> <i class="fa-solid fa-arrow-right"></i></a>
  </div>
</div>
</section>





<section id="section_3_1">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3><?php echo get_field('section_3_title_');?></h3>
        <p><?php echo get_field('section_3_title_description');?></p>
      </div>
      <div class="col-md-6">
        <div class="box1">
          <h2><?php echo get_field('section_3_box_1_title');?></h2>
          <p><?php echo get_field('section_3_box_1_title_description');?></p>
        </div>
        <div class="box1">
          <h2><?php echo get_field('section_3_box_2_title');?></h2>
          <p><?php echo get_field('section_3_box_2_title_description_');?></p>
        </div>
      </div>
    </div>
  </div>
</section>




<section id="section_4_1">
  <div class="title_area1">
    <h3><?php echo get_field('section_4_title'); ?></h3>
  </div>

  <div class="main_box1">
    <div class="sub_box1">
    <?php $image = get_field('section_4_box_1_image');?>
    <img src="<?php echo $image;?>" alt="">
      <h4><?php echo get_field('section_4_box_1_title'); ?></h4>
      <p><?php echo get_field('section_4_box_1_description'); ?></p>
    </div>
    <div class="sub_box1">
    <?php $image = get_field('section_4_box_2_image');?>
      <img src="<?php echo $image;?>" alt="">
      <h4><?php echo get_field('section_4_box_2_title'); ?></h4>
      <p><?php echo get_field('section_4_box_2_description'); ?></p>
    </div>
    <div class="sub_box1">
    <?php $image = get_field('section_4_box_3_image');?>
      <img src="<?php echo $image;?>" alt="">
      <h4><?php echo get_field('section_4_box_3_title'); ?></h4>
      <p><?php echo get_field('section_4_box_3_description'); ?></p>
    </div>
  </div> 
</section>




<?php get_footer(); ?>