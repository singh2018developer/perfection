
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php if(has_post_thumbnail()): ?>
  
            <div class="img-thumbnail img-responsive"><?php the_post_thumbnail(); ?></div>

    <?php endif; ?>
    
  <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>

</article>