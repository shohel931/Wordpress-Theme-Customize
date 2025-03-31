<?php
/**
 * Template Name: Blog Page
 */

get_header(); ?>


<section id="blog_area">
  <div class="main_blog">
  <div class="sub_blog">
    <h2><?php echo get_field(''); ?>Analytics & Reporting <br> Service For Your <br> Business</h2>
    <p><?php echo get_field(''); ?>An enim nullam tempor sapien gravida donec enim <br> ipsum porta justo congue magna at</p>
    <a href="#"><?php echo get_field(''); ?>Get Start Now</a>
  </div>
  <div class="sub_blog2">
  <?php $image = get_field('');?>
  <img src="<?php echo $image;?>" alt="">
    <img src="<?php echo get_template_directory_uri(  ). '/img/work.png' ?>" alt="">
  </div>
  </div>
</section>




<?php get_footer(); ?>