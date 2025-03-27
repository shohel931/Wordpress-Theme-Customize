
<footer id="footer_area">
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