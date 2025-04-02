<?php
/* Template Name: Contact Page */

get_header(); ?>


<section id="hero_area_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2><?php echo get_field('hero_area_title'); ?></h2>
        <p><?php echo get_field('hero_area_title_description'); ?></p>

        <br>
<div class="main_box">
<div class="box_text">
  <input type="text" name="" id="first_name" placeholder="First Name" required>
  <input type="text" name="" id="last_name" placeholder="Last Name" required><br>
  <input type="email" name="" id="email" placeholder="Email" required>
  <input type="number" name="" id="phone" placeholder="Phone" required><br>
  <input type="text" name="" id="message" placeholder="Message" required>
  </div>
  <div class="sub_box_text">
    <div class="contact">
      <p><?php echo get_field('address'); ?></p>
      <h3><?php echo get_field('address_title'); ?></h3>
    </div>
    <div class="contact">
    <p><?php echo get_field('support_'); ?></p>
    <h3><?php echo get_field('support_number'); ?></h3>
    <h3><?php echo get_field('support_email'); ?></h3>
    </div>
  </div>
  </div>
      </div>
    </div>
  </div>
</section>



<section id="section_4_1">
  <div class="title_area1">
    <h3><?php echo get_field('section_2_title'); ?></h3>
  </div>

  <div class="main_box1">
    <div class="sub_box1">
    <?php $image = get_field('section_2_box_1_image');?>
    <img src="<?php echo $image;?>" alt="">
      <h4><?php echo get_field('section_2_box_1_title'); ?></h4>
      <p><?php echo get_field('section_2_box_1_title_description'); ?></p>
    </div>
    <div class="sub_box1">
    <?php $image = get_field('section_2_box_2_image_');?>
      <img src="<?php echo $image;?>" alt="">
      <h4><?php echo get_field('section_2_box_2_title'); ?></h4>
      <p><?php echo get_field('section_2_box_2_title_description_'); ?></p>
    </div>
    <div class="sub_box1">
    <?php $image = get_field('section_2_box_3_image_');?>
      <img src="<?php echo $image;?>" alt="">
      <h4><?php echo get_field('section_2_box_3_title_'); ?></h4>
      <p><?php echo get_field('section_2_box_3_title_description_'); ?></p>
    </div>
  </div> 
</section>




<?php get_footer(); ?>