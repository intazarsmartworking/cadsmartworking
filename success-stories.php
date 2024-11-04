<?php
/**
 * Template Name: Success Stories
 *
 * @package sws
 */

 get_header();
?>

<div class=" w-full relative">
  	<img class="bg-img absolute w-[150%] max-w-[initial] opacity-[0.6] left-[-20%] z-0 top-[-15%]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
  	<div class=" w-full relative z-10">
		<?php if (have_rows('story_section')) : ?>
		<?php while (have_rows('story_section')) : the_row(); ?>
		<?php if (get_row_layout() == 'banner_section') : ?>
        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 py-0 md:py-14 gap-2 md:gap-80">
                    <div class="col-span-2 md:col-span-1 content-center">
					<?php if(get_sub_field('small_title')): ?>
                        <div class="small-intro !ml-0"><?php echo get_sub_field('small_title'); ?></div>
					<?php endif; ?>		
						
					<?php if(get_sub_field('main_title')): ?>
                        <h1 class="text-3xl sm:text-4xl lg:text-7xl 3xl:text-58 font-medium text-white lg:leading-tight"> <?php echo get_sub_field('main_title'); ?> <br>
                            <span class="gradient-text"> <?php echo get_sub_field('gradient_title'); ?></span> <br>
                            <span class="text-dark-orange"> <?php echo get_sub_field('orange_title'); ?></span> 
                        </h1>
					<?php endif; ?>	
					
					<?php if(get_sub_field('paragraph')): ?>	
                        <p class="text-white text-[20px] pt-[32px]"><?php echo get_sub_field('paragraph'); ?></p>
					<?php endif; ?>		
                    </div>
                    <div class="col-span-2 md:col-span-1">
					
					<?php if(have_rows('banner_image')): ?>
					<?php while(have_rows('banner_image')): the_row(); ?>
                        <div class="inline-block w-[100%] max-w-[210px] align-top <?php echo get_sub_field('margin'); ?>">
                            <div class="stories-img-box">
							<?php $first_image = get_sub_field('first_image');
								if (!empty($first_image) && isset($first_image['url'])):
							?>
                                <img class="w-[100%]" src="<?php echo esc_url($first_image['url']); ?>" alt="<?php echo esc_attr($first_image['alt']); ?>">
							<?php endif; ?>	
                                <div class="cover-box text-center" style="<?php echo get_sub_field('background_color'); ?>">
								<?php $second_image = get_sub_field('second_image');
									if (!empty($second_image) && isset($second_image['url'])):
								?>
                                    <img class="h-[100px] inline-block self-center" src="<?php echo esc_url($second_image['url']); ?>" alt="<?php echo esc_attr($second_image['alt']); ?>">
								<?php endif; ?>		
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>	
					<?php endif; ?>     
                        
                        
                    </div>
                </div>
            </div>
        </section>
		<?php endif; ?>		
		<?php endwhile; ?>
		<?php endif; ?>	

        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
			<?php
				$story_count = wp_count_posts('success-story')->publish;
				$posts_per_page = 10;
				$paged = 1;
				$args = array(
					'post_type' => 'success-story',
					'post_status' => 'publish',
					'paged' => $paged,
					'posts_per_page' => $posts_per_page
				);
				$story_query = new WP_Query($args);
			?>
                <div class="grid grid-cols-2 md:grid-cols-2 py-0 md:py-5 border-b border-[#431d0e] gap-2 md:gap-80">
                    <div class="col-span-1 md:col-span-1">
                        <p class="text-[15px] md:text-[20px] text-[#fff] leading-[28px]">Customer stories <span class="text-dark-orange"><?php echo esc_html($story_count); ?></span><p>
                    </div>
                    
                </div>
			<div class="story-container">	
				<?php if ($story_query->have_posts()) : ?>
				<?php while ($story_query->have_posts()) : $story_query->the_post();?>
				<?php $image_id = get_post_thumbnail_id();
					$image_src = wp_get_attachment_image_src($image_id, 'full');
					$terms = get_the_terms(get_the_ID(), 'successcategory');
					 $term_names = array();
					if ($terms && !is_wp_error($terms)) {
						foreach ($terms as $term) {
							$term_names[] = $term->name;
						}
					}
				?>
                <div class="grid grid-cols-1 md:grid-cols-2 py-14 border-b border-[#431d0e] gap-2 md:gap-80">
                    <div class="col-span-2 md:col-span-1">
                        <a href="<?php the_permalink(); ?>"> <h5 class="text-[28px] text-[#fff] font-semibold leading-[40px] mb-[50px]"><?php the_title(); ?></h5> </a>
                        <p class="text-[16px] text-[#fff] leading-[28px] mb-[20px]"><?php echo get_the_excerpt();?></p>
                        <p class="text-[12px] text-[#fff] leading-[16px]"> <?php echo implode(', ', $term_names); ?> • 500+<p>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <div class="stories-img-box">
                         <a href="<?php the_permalink(); ?>"> <img class="w-[100%]" src="<?php echo esc_url($image_src[0]); ?>" alt="<?php the_title(); ?>"> </a>
                            
                        </div>
                    </div>
                </div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
            </div>    

			<?php
				$total_pages = $story_query->max_num_pages;
				if ($total_pages > 1) : 
			?>
                <div class="block text-center mt-10">
                    <a href="#" id="load-more" class="button inline-block align-middle button-small rounded-[30px] px-12 py-4 border-2 border-[#fff] text-white text-[16px] hover:bg-dark-orange hover:[#fff] ">Load more</a>
                </div>
			<?php endif; ?>
			</div>
        </section>
		
		<?php if (have_rows('story_section')) : ?>
		<?php while (have_rows('story_section')) : the_row(); ?>
		<?php if (get_row_layout() == 'curious_section') : ?>
        <section class="calculator-box w-[100%] py-16">
            <div class="inner-box grid grid-cols-1 lg:grid-cols-10 content-center rounded-[60px] max-w-[90%] min-h-[350px] mx-auto px-[10px] md:px-[10%]">
                    <div class="grid-item col-span-5 py-[10%] lg:py-[100px]">
                        <div class="block mb-5">
						<?php if(get_sub_field('small_title')): ?>
                            <span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem] "><?php echo get_sub_field('small_title'); ?></span>
                        <?php endif; ?>
						</div>
						<?php if(get_sub_field('main_heading')): ?>	
                        <h5 class="text-[26px] lg:text-[36px] text-[#ffff] lg:leading-[30px] font-medium mb-4"><?php echo get_sub_field('main_heading'); ?></h5>
                        <?php endif; ?>
						<p class="text-white text-[15px] mb-[30px] lg:text-[24px] font-medium"><?php echo get_sub_field('subheading'); ?></p>
						<?php if(get_sub_field('button_name')): ?>
						<?php $calc_url =  get_sub_field('button_url'); ?>
                        <p class="mt-6">
                            <a href="<?php echo esc_url( $calc_url ); ?>" class="w-[300px] text-center button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange "><?php echo get_sub_field('button_name'); ?></a>
                        </p>
						<?php endif; ?>
                    </div>
                    <div class="grid-item col-span-5 relative py-[10%] lg:py-[100px]">
                        <div class="max-w-md relative z-10 rounded-3xl min-h-[300px] bg-white overflow-hidden shadow-lg mx-auto">
                            <div class="px-6 py-4">
							<?php if(get_sub_field('hourly_rate_title')): ?>
                            <div class="block">
                                <p class="text-[24px] text-[#64748b]"><?php echo get_sub_field('hourly_rate_title'); ?></p>
                            </div>
							<?php endif; ?>
							<?php if(get_sub_field('amount')): ?> 
                            <div class="block">
                                <p class="text-[54px] font-[500] "><?php echo get_sub_field('amount'); ?></p>
                            </div>
							<?php endif; ?>	
                            <div class="block w-100 mt-3 h-[110px] border-b border-gray-400">
                                <div class="sliderwrap">
                                    <input class="home-range-slider" id="range" type="range" max="100" value="60">
                                </div>
                            </div>
                            <div class="block pt-5">
                                <div class="flex">
								<?php if(get_sub_field('amount_save_title')): ?>
                                    <div class="grow">
                                        <span class="text-[18px] font-[400] text-gray-500 "><?php echo get_sub_field('amount_save_title'); ?></span>
                                    </div>
								<?php endif; ?>		
                                    <div class="grow text-end">
                                        <span id="price-value" class="text-[24px] font-[500] text-black">£ </span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
						<?php $curious_img = get_sub_field('main_image');
							if (!empty($curious_img) && isset($curious_img['url'])):
						?>
							<img class="calculater-bg absolute left-0 bottom-0 w-[100%] z-[0]" src="<?php echo esc_url($curious_img['url']); ?>">
						<?php endif; ?>
                    </div>
                </div>
        </section>
		<?php endif; ?>		
		
		<?php if (get_row_layout() == 'client_section') : ?>
        <section class="w-[100%] md:min-h-[300px] py-16">
            <div class="max-w-[600px] relative mx-auto text-center">
			<?php if(get_sub_field('top_title')): ?>
                <h3 class="text-center small-intro"><?php echo get_sub_field('top_title'); ?></h3>
			<?php endif; ?>	
			
			<?php if(get_sub_field('main_title')): ?>
                <h5 class=" text-2xl text-white sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium flex flex-col text-center px-0 lg:leading-[74px]">
                   <?php echo get_sub_field('main_title'); ?>	<span class="text-dark-orange block"> <?php echo get_sub_field('orange_title'); ?> </span>
                </h5>
			<?php endif; ?>	
            </div>
            <div class="w-[100%] px-[15px] md:px-[10%] mt-[50px]">
                    <div class="logo-slider">
                    <?php if(have_rows('clients')): ?>
                    <?php while(have_rows('clients')): the_row(); ?>
                        <div class="slide-item"><img src="<?php echo get_sub_field('client_image')['url']; ?>" /> </div>
                    <?php endwhile; ?>	
                    <?php endif; ?> 	
                    </div>
            </div>
        </section>
		
		<?php endif; ?>		
		
		<?php if (get_row_layout() == 'hire_developer_section') : ?>
        <section class="w-full relative grid items-center px-3  py-16">
            <div class="container mx-auto md:px-0 px-10 ready-hire-bg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="pl-7 pr-7 md:pl-48 md:pr-12 content-center">
					<?php if(get_sub_field('main_title')): ?>
                        <h2 class="text-left text-white text-[35px] md:text-5xl lg:text-[45px] font-medium  bg-title-text  md:leading-tight  md:mb-2">
                        <?php echo get_sub_field('main_title'); ?>
                        </h2>
					<?php endif; ?>	

					<?php if(get_sub_field('subheading')): ?>		
                        <p class="text-center text-[20px] md:text-left text-white"> <?php echo get_sub_field('subheading'); ?> </p>
                    <?php endif; ?>	
					<?php if(get_sub_field('button_name')): ?>
					<?php $hire_dev_btn_url =  get_sub_field('button_url'); ?>
					<div class="header-buttons mt-16 mb-10 text-center md:text-left">
					<a href="<?php echo esc_url( $hire_dev_btn_url ); ?>" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] text-dark-orange text-lg bg-white hover:bg-black hover:text-white"><?php echo get_sub_field('button_name'); ?></a>
					</div>
					<?php endif; ?>	
					
                    </div>
					
					<?php $hire_dev_main_img = get_sub_field('image');
						if (!empty($hire_dev_main_img) && isset($hire_dev_main_img['url'])):
					?>
                    <div class="px-6 py-10 lg:pr-[20%] content-center text-right">
                        <img src="<?php echo esc_url($hire_dev_main_img['url']); ?>" alt="<?php echo esc_attr($hire_dev_main_img['alt']); ?>" class="w-[100%] inline-block max-w-[450px]">
                    </div>
					<?php endif; ?>
                </div>
            </div>
        </section>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>	
	</div>
</div>

<?php get_footer();?>