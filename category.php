<?php
// HEADER
get_header();
// EINDE HEADER
?>
<div class="container">
  <main>
    <div>
      <h2>De berichten van de categorie <em class="zoek-term-in-kop"><?php single_cat_title(); ?></em>:</h2>
<?php
// DE WORDPRESS LOOP
if(have_posts() ) :
  while (have_posts() ) : the_post() ?>
      <article class="blogItem">
        <a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
        <?php the_content() ?>
      </article>
    <!-- einde container -->

      <?php endwhile;
      else :
        echo "Er zijn geen berichten gevonden voor deze categorie";?>
      <?php
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
