
<footer id="footer_area">

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


<section id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
      <?php dynamic_sidebar( 'footer-1' ); ?>
      </div>
      <div class="col-md-3">
      <?php dynamic_sidebar( 'footer-2' ); ?>
      </div>
      <div class="col-md-3">
      <?php dynamic_sidebar( 'footer-3' ); ?>
      </div>
      <div class="col-md-3">
      <?php dynamic_sidebar( 'footer-4' ); ?>
      </div>
    </div>
  </div>
  </section>


</section>



<section id="copyright_area">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <a href=""><?php echo  get_theme_mod('copyright_section'); ?></a>
      </div>
      <div class="col-md-6">
        <p><?php echo  get_theme_mod('copyright'); ?></p>
      </div>
    </div>
  </div>
</section>
</footer>


<?php wp_footer(); ?>
</body>
</html>