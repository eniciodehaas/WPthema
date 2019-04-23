<?php
// HEADER
get_header();
// EINDE HEADER

// DE WORDPRESS LOOP
if(have_posts() ) :
  while (have_posts() ) : the_post() ?>

  <article class="blogItem">
    <div class="container">
      <a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
      <?php the_content() ?>
    </div>
  </article>
  <!-- einde container -->

<?php endwhile;
else :
  echo "<p>Er zijn geen berichten gevonden</p>";
endif;
// EINDE WORDPRESS LOOP

// FOOTER
get_footer();
// EINDE FOOTER
?>
