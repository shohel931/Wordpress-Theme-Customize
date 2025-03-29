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






<section id="section_5">
  <div class="title_line">
  <h3><?php echo get_field('section_5_title');?></h3>
  <p><?php echo get_field('section_5_title_description');?></p>
  </div>
<div class="main_box">
  <div class="sub_box">
  <h3><?php echo get_field('section_5_box_1_title'); ?></h3>
        <p><?php echo get_field('section_5_box_1_title_description'); ?></p>
        <ul>
          <li><?php echo get_field('section_5_box_1_text_1'); ?></li>
          <li><?php echo get_field('section_5_box_1_text_2'); ?></li>
          <li><?php echo get_field('section_5_box_1_text_3'); ?></li>
          <li><?php echo get_field('section_5_box_1_text_4'); ?></li>
        </ul>
        <br>
        <br>
        <br>
        <br>
        <a class="btn_1" href="#"><?php echo get_field('section_5_box_1_button'); ?></a>
  </div>
  <div class="sub_box">
  <h3><?php echo get_field('section_5_box_2_title_'); ?></h3>
      <h2><?php echo get_field('section_5_box_2price'); ?></h2>
        <p><?php echo get_field('section_5_box_2_title_description_'); ?></p>
        <ul>
          <li><?php echo get_field('section_5_box_2_text_1'); ?></li>
          <li><?php echo get_field('section_5_box_2_text_2'); ?></li>
          <li><?php echo get_field('section_5_box_2_text_3'); ?></li>
          <li><?php echo get_field('section_5_box_2_text_4'); ?></li>
        </ul>
        <br>
        <a href="#"><?php echo get_field('section_5_box_2_button'); ?></a>
  </div>
  <div class="sub_box">
  <h3><?php echo get_field('section_5_box_3_title_'); ?></h3>
      <h2><?php echo get_field('section_5_box_3_price'); ?></h2>
        <p><?php echo get_field('section_5_box_3_title_description_'); ?></p>
        <ul>
          <li><?php echo get_field('section_5_box_3_text_1'); ?></li>
          <li><?php echo get_field('section_5_box_3_text_2'); ?></li>
          <li><?php echo get_field('section_5_box_3_text_3'); ?></li>
          <li><?php echo get_field('section_5_box_3_text_4'); ?></li>
        </ul>
        <br>
        <a href="#"><?php echo get_field('section_5_box_3_button'); ?></a>
  </div>
</div>
</section>











<?php get_footer(); ?>