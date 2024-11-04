<div class="w-full relative grid items-center py-16">
	<div class="container mx-auto md:px-0 px-10">
		<div class="mx-auto px-0 md:px-0 lg:px-10 pt-2">
		<?php if (have_rows('block')) : ?>
		<?php while (have_rows('block')) : the_row(); ?>
		<?php if (get_row_layout() == 'home_blog_heading') : ?>	
			<?php if(get_sub_field('small_heading')): ?>		
				<h4 class="text-center small-intro"> <?php echo get_sub_field('small_heading'); ?> </h4>
			<?php endif; ?>

			<?php if(get_sub_field('main_heading')): ?>		
				<h2 class=" text-3xl sm:text-4xl lg:text-5xl 3xl:text-58 font-medium gradient-text text-center px-0  md:leading-tight"><?php echo get_sub_field('main_heading'); ?> </h2>
			<?php endif; ?>

			<?php if(get_sub_field('small_paragraph')): ?>	
				<p class="text-white text-xl font-normal text-center mt-6 mb-10 px-0 "> <?php echo get_sub_field('small_paragraph'); ?> </p>
			<?php endif; ?>	
			
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?> 
		<div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8">
			<?php
				$blog_args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => 3,
				);
				$blog_posts = new WP_Query($blog_args);	
				while ($blog_posts->have_posts()) :
				$blog_posts->the_post();
				$image_id = get_post_thumbnail_id();
				$image_src = wp_get_attachment_image_src($image_id, 'full');
				$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);		
			?>
		
					<a href="<?php echo home_url( '/blog/' ) . basename( get_permalink() ); ?>">
						<div class="rounded">
						<?php if ($image_src): ?>
							<img class="w-[100%] rounded-lg" src="<?php echo esc_url($image_src[0]); ?>" alt="<?php echo esc_attr($image_alt); ?>">
						<?php endif; ?>
						<div class="py-4">
						
						<?php
						$author_posts  = get_field('author'); 
						if( $author_posts && is_array($author_posts) ) :
							$author_post = $author_posts[0];
							
						if( $author_post ) :
						$author_name = get_the_title($author_post->ID);
						?>
							<span class="inline-block py-3 font-bold text-sm text-dark-orange"> <?php echo $author_name; ?> ● </span>
							
						<?php
							else :?>
								<span class="inline-block py-3 font-bold text-sm text-dark-orange"> No Author ● </span>
						<?php endif;
							else :?>
								<span class="inline-block py-3 font-bold text-sm text-dark-orange"> No Author ● </span>
						<?	endif;
						?>
							<span class="inline-block py-3 font-bold text-sm text-dark-orange"> <?php echo get_the_date('F j, Y');?> </span>
							<div class="font-bold text-2xl mb-2 text-white"><?php echo wp_trim_words(get_the_title(), 7); ?> </div>
							<p class="home-blog-para text-base"> <?php echo wp_trim_words(get_the_content(), 20); ?></p>
						</div>
						
					</div>
				</a>
			<?php endwhile;  wp_reset_postdata();?>
			
			</div> 

			<div class="header-buttons mt-12 mb-0 text-center">
			<a href="/blog" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange ">VIEW ALL</a>
			</div>
		
		</div>
	</div>
</div>