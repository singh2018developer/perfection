<?php get_header(); ?>

<div class="row">
		
	<div class="col-xs-12">

	<div id="prefection-carousel" class="carousel slide" data-ride="carousel">

	<div class="carousel-inner" role="listbox">

		<?php 
			
			$args_cat = array(
				'include' => '30, 31, 32'
			);
			
			$categories = get_categories($args_cat);
			$count = 0;
			$bullets = '';

			foreach($categories as $category):
				
				$args = array( 
					'type' => 'post',
					'posts_per_page' => 1,
					'category__in' => $category->term_id,
					'category__not_in' => array( 10 ),
				);
				
				$lastBlog = new WP_Query( $args );
				
				if( $lastBlog->have_posts() ):
					
					while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

						<div class="carousel-item <?php if($count == 0): echo 'active'; endif; ?>">

							<?php the_post_thumbnail('full'); ?>
						   <div class="carousel-caption">
							   	<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>

								   <small><?php the_category(); ?></small>
							</div>
						</div>		
						
						<?php $bullets .= '<li data-target="#prefectrion-carousel" data-slide-to="' .$count. '"class="'; ?>
						<?php if($count == 0): $bullets .= 'active'; endif; ?>	
						
						<?php $bullets .= '"></li>'; ?>
					
					<?php endwhile;
					
				endif;
				
				wp_reset_postdata();

				$count++;
				
			endforeach;
		
		?>

		<!-- Indicator -->
		<ol class="carousel-indicators">
			<?php echo $bullets; ?>
		</ol>
		
	</div>

	<!-- controls -->
		<a class="carousel-control-prev" href="#prefectrion-carousel" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#prefectrion-carousel" data-slide="next">	
			<span class="carousel-control-next-icon"></span>
		</a>

		</div>

		</div>
		
</div>

<div class="row">
	
	<div class="col-xs-12 col-sm-8">

		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('templates/content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
		
		//PRINT OTHER 2 POSTS NOT THE FIRST ONE
/*
		$args = array(
			'type' => 'post',
			'posts_per_page' => 2,
			'offset' => 1,
		);
		
		$lastBlog = new WP_Query($args);
			
		if( $lastBlog->have_posts() ):
			
			while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
		
		wp_reset_postdata();
*/
				
		?>
		
		<!-- <hr> -->
		
		<?php
			
		//PRINT ONLY TUTORIALS
/*
		$lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=news');
			
		if( $lastBlog->have_posts() ):
			
			while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
		
		wp_reset_postdata();
*/
				
		?>
	
	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
</div>

<?php get_footer(); ?>