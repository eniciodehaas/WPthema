<?php
// HEADER
get_header();
// EINDE HEADER
?>
<div class="container">
  <main>
    <div>
<?php
// DE WORDPRESS LOOP
if(have_posts() ) :
  while (have_posts() ) : the_post() ?>
      <article class="blogItem">
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
      </article>
    <!-- einde container -->

      <?php endwhile;
      else :
        echo "<p>Er zijn geen berichten gevonden</p>";
      endif;
      // EINDE WORDPRESS LOOP
      ?>
    </div>
      <aside>
        <?php dynamic_sidebar( 'widget_aside' ); ?>
      </aside>
    </main>
  </div>
<?php
// FOOTER
get_footer();
// EINDE FOOTER
?>
