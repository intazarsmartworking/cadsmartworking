<?php
/**
 * Template Name: Candidate Overview Page
 *
 * @package sws
 */

 get_header();
?>

<div class=" w-full relative">
  	<img class="bg-img absolute w-[100%] right-[0px] z-0 top-[-149px]" src="<?php echo get_template_directory_uri();?>/images/center-full-bg.svg" alt="">
  	<div class=" w-full relative z-10">
	<?php if (have_rows('candidate_section')) : ?>
	<?php while (have_rows('candidate_section')) : the_row(); ?>
	<?php if (get_row_layout() == 'career_section') : ?>
        <section class="w-full px-3">
            <div class="w-[100%] relative max-w-[1280px] mx-auto py-16">
			<?php if(get_sub_field('top_title')): ?>
                <div class="text-center small-intro"><?php echo get_sub_field('top_title'); ?></div>
			<?php endif; ?>	
			
			<?php if(get_sub_field('main_title')): ?>	
                <h1 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[74px]">
                    <?php echo get_sub_field('main_title'); ?>
                </h1>
			<?php endif; ?>	
			
			<?php if(get_sub_field('small_title')): ?>	
                <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 mb-10"> <?php echo get_sub_field('small_title'); ?> </p>
            <?php endif; ?>	
			
			<?php if(get_sub_field('button_name')): ?>	
				<div class="block text-center">
                    <a href="#job-list-item" class="button inline-block align-middle button-small rounded-[10px] px-12 py-4 border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange"><?php echo get_sub_field('button_name'); ?></a>
                </div>
			<?php endif; ?>		
            </div>
        </section>
		
        <section class="w-full px-3">
            <div class="w-[100%] relative max-w-[80%] text-center mx-auto py-16">
			<?php if(have_rows('all_images')): ?>
			<?php while(have_rows('all_images')): the_row(); ?>
                <div class="inline-block align-bottom m-2">
				<?php $all_image = get_sub_field('image');
					if (!empty($all_image) && isset($all_image['url'])):
				?>
                    <img class="w-[100%] max-w-[100%] h-auto rounded-[12px]" src="<?php echo esc_url($all_image['url']); ?>">
                <?php endif; ?>	 
				</div>
			<?php endwhile; ?>	
			<?php endif; ?>	
            </div>
        </section>
        <section class="w-full px-3">
            <div class="w-[100%] relative max-w-[1280px] mx-auto py-16">
			<?php if(have_rows('paragraph_section')): ?>
			<?php while(have_rows('paragraph_section')): the_row(); 
			 $para = get_sub_field('paragraph');
			?>
                <p class=" text-white font-medium text-[20px] mb-[20px]">
					<?php echo $para;?>
				</p>
			<?php endwhile; ?>	
			<?php endif; ?>	
                
                <div class="block pt-[40px]">
                    <div class="flex items-center">
					<?php if(get_sub_field('author_image')): ?>
                        <img class=" w-[70px] rounded-full mr-5" src="<?php echo get_sub_field('author_image')['url']; ?>">
					<?php endif; ?>	
                        <div>
						<?php if(get_sub_field('author_name')): ?>
                            <p class="text-[#fff] text-[16px]"> <?php echo get_sub_field('author_name'); ?> </p>
						<?php endif; ?>	
						<?php if(get_sub_field('author_profession')): ?>	
                            <p class="text-[#bbbbbb] text-[12px]"> <?php echo get_sub_field('author_profession'); ?> </p>
						<?php endif; ?>	
                        </div>
                    </div>
                </div>
            </div>
        </section>
	<?php endif; ?>		
	
	<?php if (get_row_layout() == 'second_section') : ?>
        <section class="w-full px-3 bg-[#fff]">
            <div class="w-[100%] relative max-w-[1280px] mx-auto py-16">
			<?php if(get_sub_field('main_title')): ?>
                 <h3 class="text-4xl font-bold text-[35px] md:text-[56px] mb-4 text-dark-orange  lg:leading-[74px]">
                 <?php echo get_sub_field('main_title'); ?>
                </h3>
			<?php endif; ?>		
			<?php if(get_sub_field('main_paragraph')): ?>	
                <p class=" text-black font-medium text-[16px] lg:text-[28px] mb-[20px]">
                    <?php echo get_sub_field('main_paragraph'); ?>
                </p>
			<?php endif; ?>		
            </div>
        </section>
        <section class="w-full px-3 bg-[#fff]">
            <div class="w-[100%] relative max-w-[1280px] mx-auto py-16">
                <div class="grid grid-cols-1 lg:grid-cols-10 gap-4 bg-[#1F0C04] border border-[#401A0A] rounded-[30px] p-[30px] lg:p-[60px]">
                        <div class="grid-item col-span-3">
						<?php if(get_sub_field('second_title')): ?>
                            <h3 class="text-4xl font-bold text-[35px] md:text-[56px] mb-4 text-dark-orange lg:leading-[74px]">
                                <?php echo get_sub_field('second_title'); ?>
                            </h3>
						<?php endif; ?>	
                        </div>
                        
                        <div class="grid-item col-span-7">
						<?php if(get_sub_field('second_paragraph')): ?>
                            <p class=" text-white font-medium text-[16px] lg:text-[28px] mb-[20px]">
                                <?php echo get_sub_field('second_paragraph'); ?>
                            <p>
						<?php endif; ?>	
                        </div>
                </div>
            </div>
        </section>
	<?php endif; ?>		
	
	<?php if (get_row_layout() == 'amazing_team_section') : ?>	
        <section class="w-full px-3">
            <div class="w-[100%] relative max-w-[1280px] mx-auto py-16">
                <div class="block mb-12">
				<?php if(get_sub_field('main_title')): ?>	
                    <h3 class="font-medium text-[35px] md:text-[56px] mb-4 text-dark-orange  lg:leading-[56px]">
                        <?php echo get_sub_field('main_title'); ?>
                    </h3>
				<?php endif; ?>		
				<?php if(get_sub_field('paragraph')): ?>	
                    <p class=" text-white font-medium text-[20px]">
                        <?php echo get_sub_field('paragraph'); ?>
                    </p>
				<?php endif; ?>		
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-9 gap-10">
					<?php if(have_rows('advantage')): ?>
					<?php while(have_rows('advantage')): the_row(); 
						$title = get_sub_field('title');
						$paragraph = get_sub_field('paragraph');
					?>
				
                        <div class="grid-item col-span-3">
                            <p class="font-bold text-[24px] md:text-[24px] mb-2 text-dark-orange">
                                <?php echo $title;?>
                            </p>
                            <p class="text-[16px] text-[#7e7d7d]">
                             <?php echo $paragraph;?>
                            </p>
                        </div>
                    <?php endwhile; ?>	
					<?php endif; ?>	    
                </div>
			</div>
        </section>
	<?php endif; ?>	
	
	<?php if (get_row_layout() == 'slider_section') : ?>	
        <!-- <section class="w-full px-3">
            <div class="w-[100%] relative max-w-[1280px] mx-auto py-16">
                <div class="grid grid-cols-1 lg:grid-cols-10 gap-10">
                    <div class="grid-item col-span-5 content-center">
                        <div class="block">
                            <div class="content-slider" id="content-slider">
							<?php if(have_rows('slider_part')): ?>
							<?php while(have_rows('slider_part')): the_row(); 
								$title = get_sub_field('title');
								$paragraph = get_sub_field('paragraph');
							?>
								<div class="slide-item">
                                    <p class="font-bold text-[24px] md:text-[24px] mb-2 text-white"><?php echo $title;?></p>
                                    <p class="text-[16px] text-[#fff]">
                                        <?php echo $paragraph;?>
                                    </p>
                                </div>
							<?php endwhile; ?>	
							<?php endif; ?>		
                                
                            </div>
                            <div class="buttons flex gap-3 mt-10">
                                <button class="text-white p-3 rounded-[10px] border border-[#464444] " id="prev-slide">←</button>
                                <button class="text-white p-3 rounded-[10px] border border-[#464444]" id="next-slide">→</button>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-span-5">
					<?php $image = get_sub_field('image');
						if (!empty($image) && isset($image['url'])):
					?>
                        <img class="w-[100%] h-auto" src="<?php echo esc_url($image['url']); ?>" alt="">
					<?php endif; ?>		
                    </div>
                </div>
            </div>
        </section> -->
	<?php endif; ?>
	
	<?php if (get_row_layout() == 'hiring_process') : ?>
        <section class="w-full px-3">
            <div class="w-[100%] relative max-w-[1280px] mx-auto py-16">
                <div class="grid grid-cols-1 lg:grid-cols-10 gap-10">
                    <div class="grid-item col-span-5 content-center">
					<?php if(get_sub_field('main_title')): ?>
                        <h3 class="font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[56px]">
                            <?php echo get_sub_field('main_title'); ?>
                        </h3>
					<?php endif; ?>	
					<?php if(get_sub_field('paragraph')): ?>	
                        <p class=" text-white font-medium text-[20px]">
                            <?php echo get_sub_field('paragraph'); ?>
                        </p>
					<?php endif; ?>	
                    </div>
                    <div class="grid-item col-span-5 content-center">

                        <ul class="hire-process">
						<?php if(have_rows('process')): ?>
						<?php while(have_rows('process')): the_row(); 
							$title = get_sub_field('title');
							$row_index = get_row_index();
						?>
                            <li><span class="icons-box"><?php echo $row_index; ?></span><span class="text-box"> <?php echo $title;?> </span></li>
						<?php endwhile; ?>	
						<?php endif; ?>		
                        </ul>

                    </div>
                </div>
            </div>
        </section>
	<?php endif; ?>		
	<?php endwhile; ?>	
	<?php endif; ?>		

        <section class="w-full px-3 bg-[#fff]" id="job-list-item">
            <div class="w-[100%] relative max-w-[1280px] mx-auto py-16">
                <div class="block mb-8">
                    <div class="grid grid-cols-1 lg:grid-cols-10 gap-4">
                        <div class="grid-item col-span-6 content-center">
                            <h3 class=" text-black font-bold text-[35px] md:text-[56px] mb-4">
                                Open positions
                            </h3>
                        </div>
                        
                    </div>
                </div>
                <div class="block job-list">
				<?php 
					$args = array(
						'post_type' => 'career',
						'posts_per_page' => -1, 
					);
					$career_query = new WP_Query($args);

					if ( $career_query->have_posts() ) : 
					while ( $career_query->have_posts() ) : 
					$career_query->the_post(); 

					$location = get_field('location'); 
					$type = get_field('type'); 
					$short_description = get_field('short_description'); 
					
					$categories = get_the_terms( get_the_ID(), 'careercategories' );
					$category_name = '';
					if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
						$category_name = $categories[0]->name; 
					}
				?>
                    <a class="block p-[15px] hover:bg-[#F6F6F6] mb-4" href="<?php the_permalink();?>">
                        <p class="text-[#050403] text-[18px] font-bold mb-3"><?php the_title(); ?> <span class="p-[6px] rounded-[10px] font-medium text-[14px] ml-2" style="background:#EFF8FF; color:#175CD3;padding: 6px 15px;">&#x2022; <?php echo esc_html( $category_name ); ?></span></p>
                        <p class="text-[#667085] text-[16px] font-normal mb-6"><?php echo esc_html( $short_description ); ?></p>
                        <div class="block">
                            <div class="inline-block text-[#667085] text-[16px] font-medium  mr-3">
                                <svg class="inline-block mr-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M17.5 8.33325C17.5 14.1666 10 19.1666 10 19.1666C10 19.1666 2.5 14.1666 2.5 8.33325C2.5 6.34413 3.29018 4.43647 4.6967 3.02995C6.10322 1.62343 8.01088 0.833252 10 0.833252C11.9891 0.833252 13.8968 1.62343 15.3033 3.02995C16.7098 4.43647 17.5 6.34413 17.5 8.33325Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10 10.8333C11.3807 10.8333 12.5 9.71396 12.5 8.33325C12.5 6.95254 11.3807 5.83325 10 5.83325C8.61929 5.83325 7.5 6.95254 7.5 8.33325C7.5 9.71396 8.61929 10.8333 10 10.8333Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <?php echo esc_html( $location ); ?>
                            </div>
                            <div class="inline-block text-[#667085] text-[16px] font-medium">
                                <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_2623_2733)">
                                        <path d="M9.99996 5.00008V10.0001L13.3333 11.6667M18.3333 10.0001C18.3333 14.6025 14.6023 18.3334 9.99996 18.3334C5.39759 18.3334 1.66663 14.6025 1.66663 10.0001C1.66663 5.39771 5.39759 1.66675 9.99996 1.66675C14.6023 1.66675 18.3333 5.39771 18.3333 10.0001Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2623_2733">
                                        <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <?php echo esc_html( $type ); ?>
                            </div>
                        </div>
                    </a>
                <?php endwhile; wp_reset_postdata(); endif; ?>    
                </div>

            </div>
        </section>

	<?php if (have_rows('candidate_section')) : ?>
	<?php while (have_rows('candidate_section')) : the_row(); ?>
	<?php if (get_row_layout() == 'cta_section') : ?>
        <section class="w-[100%] px-[5%] py-16">
                <div class="relative grid grid-cols-1 lg:grid-cols-2 content-center gap-0 rounded-[24px] vetting-bg py-[32px] px-[10%]">
                    <img class="absolute h-[100%] w-[50%] right-[0px] top-[0px]" src="<?php echo get_template_directory_uri();?>/images/bg-line-box.png">
                    <div class="pt-[60px]">
					<?php if(get_sub_field('main_title')): ?>
                        <h4 class=" text-white text-[32px] lg:text-[45px] lg:leading-[45px]"><?php echo get_sub_field('main_title'); ?></h4>
                    <?php endif; ?>
					<?php if(get_sub_field('paragraph')): ?>	
                        <p class=" text-white text-[16px] lg:text-[24px] lg:mt-[30px] mb-[30px]"> <?php echo get_sub_field('paragraph'); ?> </p>
                    <?php endif; ?>    
                    
                    <?php if(get_sub_field('button_name')): ?>                     
                        <a href="<?php echo get_sub_field('button_url'); ?>" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] text-dark-orange text-lg bg-white hover:bg-black hover:text-white"> <?php echo get_sub_field('button_name'); ?> </a>
                    <?php endif; ?>		
                    </div>
                    
                    <div class="text-end pt-[40px] lg:pt-[0px]">
					<?php $right_side_image = get_sub_field('right_side_image');
						if (!empty($right_side_image) && isset($right_side_image['url'])):
					?>
                        <img class="inline-block w-[100%] max-w-[500px]" src="<?php echo esc_url($right_side_image['url']); ?>">
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