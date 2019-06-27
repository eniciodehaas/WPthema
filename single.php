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
      <div class="postMetaData">
        Geplaatst door: <?php the_author(); ?>
        <br>
        Op: <?php the_date(); ?>
        <br>
        In de categorie: <?php the_category();
        echo get_the_tag_list('<br>tags: ',' | ');
         ?>
      </div>
    <!-- einde container -->

      <?php endwhile;
      else :
        echo "<p>Er zijn geen berichten gevonden</p>";
      endif;
      // EINDE WORDPRESS LOOP
      comments_template( '', true );
      ?>
    </div>
      <aside>
        <?php dynamic_sidebar( 'widget_aside' ); ?>
        <?php
        $vorige_post = get_previous_post();
        if (!empty( $vorige_post )): ?>
          <h4>Vorige bericht</h4>
          <a href="<?php echo esc_url( get_permalink( $vorige_post->ID ) ); ?>">&#129092; <?php echo esc_attr( $vorige_post->post_title ); ?></a>
        <?php endif; ?>

        <?php
        $next_post = get_next_post();
        if (!empty( $next_post )): ?>
          <h4>Volgende bericht</h4>
          <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo esc_attr( $next_post->post_title ); ?> &#129094;</a>
        <?php endif; ?>
      </aside>
    </main>
  </div>
<?php
// FOOTER
get_footer();
// EINDE FOOTER
?>
