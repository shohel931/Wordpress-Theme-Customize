<?php
/* Template Name: Home Page */
?>
<?php get_header(); ?>







<section id="homepage_section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1><?php echo get_field('hero_title'); ?></h1>
        <p><?php echo get_field('hero_description');  ?></p>
        <a href="#"><?php echo get_field('hero_button'); ?></a>
      </div>
      <div class="col-md-6">
        <?php $image = get_field('hero_image');?>
        <img src="<?php echo $image;?>" alt="">
      </div>
    </div>
  </div>
</section>





<section id="section_2">
  <div class="main_box">
    <div class="sub_box">
      <div class="icon">
      <?php $image = get_field('section_2_box_1_image');?>
      <img src="<?php echo $image;?>" alt="">
      </div>
      <div class="text">
        <h2><?php echo get_field('section_2_box_1_title'); ?></h2>
        <p><?php echo get_field('section_2_box_1_description'); ?></p>
      </div>
    </div>
    <div class="sub_box">
      <div class="icon">
      <?php $image = get_field('section_2_box_2_image');?>
        <img src="<?php echo $image;?>" alt="">
      </div>
      <div class="text">
      <h2><?php echo get_field('section_2_box_2_title_'); ?></h2>
      <p><?php echo get_field('section_2_box_2_description'); ?></p>
      </div>
    </div>
    <div class="sub_box">
      <div class="icon">
      <?php $image = get_field('section_2_box_3_image_');?>
        <img src="<?php echo $image;?>" alt="">
      </div>
      <div class="text">
      <h2><?php echo get_field('section_2_box_3_title'); ?></h2>
      <p><?php echo get_field('section_2_box_3_description'); ?></p>
      </div>
    </div>
  </div>
</section>





<section id="ultimate_goal">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3><?php echo get_field('section_3_title'); ?></h3>
        <p><?php echo get_field('section_3_description'); ?></p>
        
        <div class="small_box">
        <div class="icon"> <?php $image = get_field('section_3_box_1_image');?>
        <img src="<?php echo $image;?>" alt=""></div>
        <div class="text">
        <h4><?php echo get_field('section_3_box_title'); ?></h4>
        <p><?php echo get_field('section_3_box_description'); ?></p>
        </div>
        </div>
        <div class="small_box">
        <div class="icon"> <?php $image = get_field('section_3_box_2_image');?>
        <img src="<?php echo $image;?>" alt=""></div>
        <div class="text">
        <h4><?php echo get_field('section_3_box_title_2'); ?></h4>
        <p><?php echo get_field('section_3_box_description_2'); ?></p>
        </div>
        </div> 
         <div class="small_box">
        <div class="icon"> <?php $image = get_field('section_3_box_3_image');?>
        <img src="<?php echo $image;?>" alt=""></div>
        <div class="text">
        <h4><?php echo get_field('section_3_box_title_3'); ?></h4>
        <p><?php echo get_field('section_3_box_description_3'); ?></p>
        </div>
        </div>
      </div>
      <div class="col-md-6">
      <?php $image = get_field('section_3_image');?>
        <img src="<?php echo $image;?>" alt="">
      </div>
    </div>
  </div>
</section>


<section id="know_more">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <?php $image = get_field('section_4_image');?>
      <img src="<?php echo $image;?>" alt="">
      </div>
      <div class="col-md-6">
        <h2><?php echo get_field('section_4_title'); ?></h2>
        <p><?php echo get_field('section_4_title_description'); ?></p>
        <a href="#"><?php echo get_field('section_4_button'); ?></a>
      </div>
    </div>
  </div>
</section>

<section id="know_more">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2><?php echo get_field('section_5_title'); ?></h2>
        <p><?php echo get_field('section_5_title_description'); ?></p>
        <a href="#"><?php echo get_field('section_5_button'); ?></a>
    </div>
      <div class="col-md-6">
      <?php $image = get_field('section_5_image');?>
      <img src="<?php echo $image;?>" alt="">
      </div>
    </div>
  </div>
</section>


<section id="suppot">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1><?php echo get_field('section_6_title'); ?></h1>
      </div>
    </div>
  </div>
</section>

<section id="images">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <?php $image = get_field('section_7_image');?>
      <img src="<?php echo $image;?>" alt="">
      </div>
    </div>
  </div>
</section>







<?php get_footer(); ?>
