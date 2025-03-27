<?php
/**
 * Template Name: About Page
 */

get_header(); ?>


<section id="hero_area">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2><?php echo get_field('hero_section_title');?></h2>
        <p><?php echo get_field('hero_section_title_description');?></p>
        <br>
        <a href="#"><?php echo get_field('hero_section_button');?></a>
      </div>
      <div class="col-md-6">
      <?php $image = get_field('hero_section_image');?>
      <img src="<?php echo $image;?>" alt="">
      </div>
    </div>
  </div>
</section>




<section id="section_2">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3><?php echo get_field('section_2_title');?></h3>
        <p><?php echo get_field('section_2_title_description');?></p>
      </div>
      <div class="col-md-6">
        <div class="box">
          <h2><?php echo get_field('section_2_box_1_title');?></h2>
          <p><?php echo get_field('section_2_box_1_title_description');?></p>
        </div>
        <div class="box">
          <h2><?php echo get_field('section_2_box_2_title');?></h2>
          <p><?php echo get_field('section_2_box_2_title_description');?></p>
        </div>
      </div>
    </div>
  </div>
</section>




<section id="section_3">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <?php $image = get_field('section_3_image');?>
      <img src="<?php echo $image;?>" alt="">
      </div>
      <div class="col-md-6">
         <h3><?php echo get_field('section_3_title');?></h3>
        <p><?php echo get_field('section_3_title_description');?></p>
        <div class="mini_box">
        <?php $image = get_field('section_3_box_1_image');?>
        <img src="<?php echo $image;?>" alt="">
          <h4><?php echo get_field('section_3_box_1_text');?></h4>
        </div>
        <div class="mini_box">
        <?php $image = get_field('section_3_box_2_image_');?>
      <img src="<?php echo $image;?>" alt="">
        <h4><?php echo get_field('section_3_box_2_text');?></h4>
        </div>
      </div>
    </div>
  </div>
</section>




<section id="section_4">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2><?php echo get_field('section_4_title');?></h2>
        <p><?php echo get_field('section_4_title_description');?></p>
        <br>
        <a href="#"><?php echo get_field('section_4_button');?></a>
      </div>
      <div class="col-md-6">
      <?php $image = get_field('section_4_image');?>
      <img src="<?php echo $image;?>" alt="">
      </div>
    </div>
  </div>
</section>







<section id="cover_item">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2><?php echo get_field('section_8_title'); ?></h2>
        <p><?php echo get_field('section_8_title_description'); ?></p>
        <input type="email" <?php echo get_field('section_8_email'); ?>>
        <button type="submit"><?php echo get_field('section_8_button'); ?></button>     
      </div>
    </div>
  </div>
</section>







<?php get_footer(); ?>