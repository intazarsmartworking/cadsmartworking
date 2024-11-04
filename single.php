<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sws
 */

get_header();
?>

<div class=" w-full relative">
  	<img class="bg-img absolute w-[150%] max-w-[initial] opacity-[1] left-[-20%] z-0 top-[-1100px]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
  	<div class=" w-full relative px-[20px] md:px-[0px] z-10">

		<section class="w-[100%] min-h-[600px] py-[4rem] lg:py-[5rem]" onload="callFunction()">
			<div class="w-[100%] max-w-[1280px] mx-auto px-[20px] lg:px-[0px]">
			
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
					$image_id = get_post_thumbnail_id();
					$image_src = wp_get_attachment_image_src($image_id, 'full');
				?>
			
				<div class="max-w-[900px] relative mx-auto text-center">
					<p class="text-[#FF4D02] text-[16px] font-bold ">Published <?php echo get_the_date('F j, Y');?></p>
					<h1 class="text-white main-title text-[25px] lg:text-[48px] font-bold mb-0"><?php the_title();?></h1>
					
					
				</div>

				<div class="grid grid-cols-1 lg:grid-cols-10 bg-white rounded-[30px] overflow-hidden mt-[50px]">
					<div class="grid-item col-span-10">
						<img class="w-[100%] max-h-[600px]" src="<?php echo esc_url($image_src[0]); ?>">
					</div>
				</div>
				
				
				<?php
					endwhile;
				else :
				?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php
				endif;
				?>

				<div class="w-full relative block" id="sticky-details" >
					<div class="max-w-[100%] w-full mx-auto">
						<div class="show-more-box mt-[60px]"  id="single-box-content">
						
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post();
						?>
						
						
						
							<div class="grid grid-cols-1 lg:grid-cols-10 gap-5 mt-5">
								<div class="grid-item col-span-2 text-white content-start" id="fix-side-box">
									<div class="stickysidenav blog-data-show">
										<p class="text-[20px] text-white font-medium !mb-2">In this article</p>
										<?php if(have_rows('table_content')): ?>
										<?php 
										$section_count = 1; 
										while(have_rows('table_content')): the_row(); 
											$title_name = get_sub_field('main_title');
											$unique_id = 'target' . $section_count; 
										?>
										<ul class="scroll-menu">
											<li><a class=" cursor-pointer" data-location="<?php echo $unique_id; ?>">
											<!-- <?php echo $section_count;?> -->
												<span>&#9679</span> 
												<?php echo $title_name;?> </a></li>
										<?php $section_count++; endwhile; ?>	
										<?php endif; ?>	
										</ul>
									</div>
								</div>
								<div class="grid-item col-span-6 text-white single-blog content-start ">
									<p class="text-white font-medium "> <?php echo  get_the_content();?> </p>
									
									<?php if(have_rows('table_content')): ?>
									<?php $section_count = 1; ?>
									<?php while(have_rows('table_content')): the_row(); ?>
									<?php 
									$main_title = get_sub_field('main_title'); 
									$unique_id = 'target' . $section_count;
									$table_content_img = get_sub_field('image');
									?>
									<div class="scroll-section" id="<?php echo $unique_id; ?>">
										<h3><?php echo $main_title;?></h3>
										<?php if(have_rows('main_description')): ?>
										<?php while(have_rows('main_description')): the_row(); ?>
										<?php echo get_sub_field('description') ;?>
										<?php endwhile; ?>	
										<?php endif; ?>
										
										<?php if (!empty($table_content_img) && isset($table_content_img['url'])):?>
											<img class="w-[100%] rounded-[20px] " src="<?php echo esc_url($table_content_img['url']); ?>" alt="<?php echo esc_url($table_content_img['alt']); ?>">
										<?php endif; ?>
									
									</div>
									<?php $section_count++; endwhile; ?>	
									<?php endif; ?>	
									
									
									<?php
									$author_posts  = get_field('author'); 
									
									if( $author_posts && is_array($author_posts) ) :
										$author_post = $author_posts[0];
										
										if( $author_post ) :
										// Retrieve the custom fields from the author CPT
										$author_name = get_the_title($author_post->ID);
										$author_designation = get_field('author_designation', $author_post->ID);
										$linkedin_url = get_field('linkedin_url', $author_post->ID);
										$author_short_description = get_the_excerpt($author_post->ID);
										$author_image_url  = get_the_post_thumbnail_url($author_post->ID, 'thumbnail'); // Retrieves the featured image
										$author_permalink = get_permalink($author_post->ID);
										// Display the author's information
										?>
									<div class="blog-bio py-[10px] border-t border-[#eaecf04d] mt-10 pt-[24px]">
										<div class="grid grid-cols-1 lg:grid-cols-10">
											<div class="grid-item col-span-5">
												<div class="flex flex-row">
													<div class="basis">
														<div class=" w-[50px] h-[50px] rounded-[50%] overflow-hidden ">
															<a href="<?php echo esc_url($author_permalink); ?>"> <img class="w-[100%] rounded-full " src="<?php echo esc_url($author_image_url); ?>"> </a>
														</div>
													</div>
													<div class="basis pl-3">
														<a href="<?php echo esc_url($author_permalink); ?>"> <p><?php echo $author_name; ?></p> </a>
														<?php if( $author_designation ) : ?>
														 <p class="text-[#AAA] font-normal"><?php echo $author_designation; ?></p> 
														<?php endif; ?>
													</div>
												</div>
											</div>
											<div class="grid-item col-span-5 text-end">
												<?php if( $linkedin_url ) : ?>
												<span class=" inline-block p-[10px]  rounded-[8px] border bottom-[#fff] align-top mr-3">
													<a href="<?php echo esc_url($linkedin_url); ?>" target="_blank"> <img class="w-[100%] rounded-full " src="<?php echo get_template_directory_uri();?>/images/linkin-icon.png"> </a>
												</span>
												<?php endif; ?>
											</div>
										</div>
										<?php if( $author_short_description ) : ?>
										<div class="w-full">
										<a href="<?php echo esc_url($author_permalink); ?>"> <p class=" text-white font-normal"> <?php echo $author_short_description; ?> </p> </a>
										</div>
										<?php endif; ?>
									</div>
									
									<div class="blog-bio py-[10px] border-t border-[#eaecf04d] mt-10 pt-[24px]">
										<div class="w-full">
										  <div class="basis">
										    <h3 class="text-[#AAA] font-normal"> References </h3>
											<?php if(have_rows('references')): ?>
											<?php while(have_rows('references')): the_row(); ?>
											<?php 
												$add_reference = get_sub_field('add_reference'); 
											?>
											
											 <p>  <?php echo $add_reference;?> </p>
	
											<?php endwhile; ?>	
											<?php endif; ?>	 
											
										  </div>
										</div>
									
									</div>
									
									
									
									<?php
										else :
											echo '<p>Author information is not available.</p>';
										endif;
										else :
											echo '<p>No author assigned to this post.</p>';
										endif;
									?>	
									
								</div>
								<div class="grid-item col-span-2 text-white content-start">
									<div class=" bg-transparent rounded-[10px] min-h-[300px] p-3 stickysidenav">
										
									<div>
								</div>
							</div>
						</div>
					</div>
					
					
					<?php
						endwhile;
					else :
					?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php
					endif;
					?>
					
					
				</div>

				<div class=" w-full mt-[80px]">
					<div class="grid grid-cols-1 lg:grid-cols-10 rounded-[30px] mt-[120px]">
						<div class="grid-item col-span-5">
							<p class="text-white text-[25px] lg:text-[48px] get-latest font-bold mb-0">Related Blogs</p>
						</div>
						<div class="grid-item col-span-5 text-end ">
							<span class=" inline-block p-[10px] w-[50px] cursor-pointer rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle mr-3" id="prev-blog">
								<
							</span>
							<span class=" inline-block p-[10px] w-[50px] cursor-pointer rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle" id="next-blog">
								>
							</span>
						</div>
					</div>
					<div class=" w-full mt-5">
						<div class="relatedBlogs">
						
							<?php
							$blog_args = array(
								'post_type' => 'post',
								'post_status' => 'publish',
								'posts_per_page' => 10,
							);
							$blog_posts = new WP_Query($blog_args);	
							while ($blog_posts->have_posts()) :
							$blog_posts->the_post();
							$image_id = get_post_thumbnail_id();
							$image_src = wp_get_attachment_image_src($image_id, 'full'); 
							?>
								<div class="slide-item !bg-transparent">
									<div class="block text-white">
										<div class="mb-6">
										<a href="<?php echo home_url( '/blog/' ) . basename( get_permalink() ); ?>"><img class="w-[100%] h-[250px] rounded-lg" src="<?php echo esc_url($image_src[0]); ?>"> </a>
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
										<a href="<?php echo home_url( '/blog/' ) . basename( get_permalink() ); ?>"><p class="text-[24px] text-[#ffffff] font-bold mb-4" > <?php echo wp_trim_words(get_the_title(), 7); ?> </p></a>
										<a href="<?php echo home_url( '/blog/' ) . basename( get_permalink() ); ?>"><p class="text-[16px] text-[#ffffff] mb-4" ><?php echo wp_trim_words(get_the_content(), 40); ?></p></a>
										
									</div>
								</div>
							<?php endwhile;  wp_reset_postdata();?>
								
						</div>
					</div>
				</div>

				
				
			</div>
		</section>



		<?php if(get_field('cta_heading')): ?>
		<section class="w-[100%] px-[5%] mb-[60px]">
			<div class="relative grid grid-cols-1 lg:grid-cols-2 content-center gap-0 rounded-[24px] vetting-bg py-[32px] px-[10%]">
				<img class="absolute h-[100%] w-[50%] right-[0px] top-[0px]" src="<?php echo get_template_directory_uri();?>/images/bg-line-box.png" />
				<div class="pt-[60px]">
					<h3 class=" text-white text-[32px] lg:text-[56px] lg:leading-[56px]"><?php echo get_field('cta_heading'); ?></h3>
					
					<?php if(get_field('cta_paragraph')): ?>
					<p class=" text-white text-[16px] lg:text-[24px] lg:mt-[30px] mb-[30px]"> <?php echo get_field('cta_paragraph'); ?></p>
					<?php endif; ?>
					
					<?php if(get_field('cta_button_name')): ?>
					<?php $cta_btn_url =  get_field('cta_button_url'); ?>
					<a href="<?php echo esc_url( $cta_btn_url ); ?>" class="uppercase button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] text-dark-orange text-lg bg-white hover:bg-black hover:text-white"> <?php echo get_field('cta_button_name'); ?> </a>
					<?php endif; ?>
				</div>
				
				<?php $cta_right_image = get_field('cta_right_image');
					if (!empty($cta_right_image) && isset($cta_right_image['url'])):
				?>
				<div class="text-end pt-[40px] lg:pt-[0px]">
					<img class="inline-block w-[100%] max-w-[500px]" src="<?php echo esc_url($cta_right_image['url']); ?>" alt="<?php echo esc_attr($cta_right_image['alt']); ?>" />
				</div>
				<?php endif; ?>
				
			</div>
		</section>
		<?php endif; ?>
	</div>
</div>



<script type="text/javascript">

	jQuery(window).bind("load", function() {
		callFunction()
	});
	
	jQuery(document).ready(function() {
		jQuery('a.see-footnote').on('click', function(event) {
		event.preventDefault();

        jQuery('html, body').animate({
          scrollTop: $($(this).attr('href')).offset().top
        }, 800); 
      });
	});	
</script>
<?php
get_footer();
