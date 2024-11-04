<?php
/**
 * Template Name: Blog
 *
 * @package sws
 */

 get_header();
?>
<div class=" w-full relative">
	<!-- <div class=" w-[30px] bg-white h-[30px] fixed z-[300] right-0 top-[calc(50vh-15px)]" onclick="setLightMode()">Light</div> -->
  	<img class="bg-img absolute w-[150%] max-w-[initial] opacity-[1] left-[-20%] z-0 top-[-1100px]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
  	<div class=" w-full relative z-10">

		<section class="w-[100%] min-h-[600px] py-[4rem] lg:py-[3rem]">
			<div class="w-[100%] max-w-[1280px] mx-auto px-[20px] lg:px-[0px]">
				<div class="max-w-[900px] relative mx-auto text-center">
					<div class="block mb-5"><span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem] " >BLOGS</span></div>
					<h1 class="text-white text-[25px] lg:text-[56px] main-title font-medium mb-0">Our ideas and insights</h1>
					<h6 class="text-[#FF4D02] text-[25px] lg:text-[56px] font-medium ">on Hire Developers</h6>
				</div>

				
				<?php
				$args = array(
					'posts_per_page' => 1,
					'post_status'    => 'publish', 
				);
				$latest_post_query = new WP_Query($args);
				$latest_post_id = null;
				if ($latest_post_query->have_posts()) :
					while ($latest_post_query->have_posts()) : $latest_post_query->the_post();
					$latest_post_id = get_the_ID();
					$image_id = get_post_thumbnail_id();
					$image_src = wp_get_attachment_image_src($image_id, 'full');
				?>
				
				<div class="grid grid-cols-1 lg:grid-cols-10 bg-white rounded-[30px] overflow-hidden mt-[20px]">
					<div class="grid-item col-span-6">
						<a href="<?php echo home_url( '/blog/' ) . basename( get_permalink() ); ?>"> <img class="w-[100%] h-[100%]" src="<?php echo esc_url($image_src[0]); ?>" alt="<?php the_title(); ?>"> </a>
					</div>
					<div class="grid-item col-span-4 p-[40px]">
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
							<?php endif;
							?>
							<span class="inline-block py-3 font-bold text-sm text-dark-orange"> <?php echo get_the_date('F j, Y');?> </span>
						<a href="<?php echo home_url( '/blog/' ) . basename( get_permalink() ); ?>"> <p class="text-[24px] text-[#050403] font-bold mb-4" ><?php the_title(); ?></p> </a>
						<a href="<?php echo home_url( '/blog/' ) . basename( get_permalink() ); ?>"> <p class="text-[16px] text-[#050403] mb-4" > <?php echo wp_trim_words(get_the_content(), 40); ?> </p> </a>
						
						<div class="d-block">
							<a href="<?php echo home_url( '/blog/' ) . basename( get_permalink() ); ?>" class="inline-block px-[30px] py-[10px] mr-3 text-[14px] rounded-[30px] border border-[#050403] text-[#050403] hover:bg-[#050403] hover:text-[#ffffff]" >Read more</a>
						</div>
					</div>
				</div>
				
				
				<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>

				<div class="grid grid-cols-1 lg:grid-cols-10 gap-5 items-center mt-[100px]">
					<div class="grid-item col-span-6">
						<h4 class="text-white text-[25px] lg:text-[56px] get-latest font-medium mb-0">Get the latest</h4>
					</div>
					
				</div>

				
				
				<?php
				$all_posts_args = array(
					'posts_per_page' => -1,
					'post__not_in'   => array($latest_post_id),
					'post_status'    => 'publish',
				);
				$all_posts_query = new WP_Query($all_posts_args);
				?>
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 blog-box mt-[65px]" id="post-container">
				<?php if ($all_posts_query->have_posts()) : ?>
				<?php while ($all_posts_query->have_posts()) : $all_posts_query->the_post(); ?>
				<?php $image_id = get_post_thumbnail_id();
					$image_src = wp_get_attachment_image_src($image_id, 'full');
				?>
				
					<div class="blog-item rounded-[20px] overflow-hidden">
						<div class="block">
							<div class="mb-6">
							<a href="<?php echo home_url( '/blog/' ) . basename( get_permalink() ); ?>"> <img class="w-[100%] h-[250px] rounded-lg" src="<?php echo esc_url($image_src[0]); ?>" alt="<?php the_title(); ?>"> </a>
							</div>
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
							<?php endif;
							?>
							<span class="inline-block py-3 font-bold text-sm text-dark-orange"> <?php echo get_the_date('F j, Y');?> </span>
							<a href="<?php echo home_url( '/blog/' ) . basename( get_permalink() ); ?>"> <p class="text-[24px] text-[#ffffff] font-bold mb-4" > <?php echo wp_trim_words(get_the_title(), 7); ?>  </p> </a>
							<a href="<?php echo home_url( '/blog/' ) . basename( get_permalink() ); ?>"> <p class="text-[16px] text-[#ffffff] mb-4" > <?php echo wp_trim_words(get_the_content(), 40); ?> </p> </a>
							
						</div>
					</div>
					
				<?php endwhile; ?>
				<?php else : ?>
					<p>No posts found.</p>
				<?php endif; ?>
					
				</div>

				
				
			</div>
		</section>


		<section class="w-[100%] px-[5%] mb-[60px]">
			<div class="relative grid grid-cols-1 lg:grid-cols-2 content-center gap-0 rounded-[24px] vetting-bg py-[32px] px-[10%]">
				<img class="absolute h-[100%] w-[50%] right-[0px] top-[0px]" src="<?php echo get_template_directory_uri();?>/images/bg-line-box.png" />
				<div class="pt-[60px]">
					<h5 class=" text-white text-[32px] lg:text-[45px] lg:leading-[45px]">Check Our Vetting Process Now</h5>
					<p class=" text-white text-[16px] lg:text-[24px] lg:mt-[30px] mb-[30px]"> How we make sure which candidate would be able to add values to your projects?</p>
					
					<a href="/contact-us/" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] text-dark-orange text-lg bg-white hover:bg-black hover:text-white"> CHECK NOW </a>
				</div>
				
				<div class="text-end pt-[40px] lg:pt-[0px]">
					<img class="inline-block w-[100%] max-w-[500px]" src="<?php echo get_template_directory_uri();?>/images/about-bottom-img.png" />
				</div>
				
			</div>
		</section>

	</div>
</div>



<?php get_footer();?>