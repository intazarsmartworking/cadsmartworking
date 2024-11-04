<?php
/**
 * Template Name: Hire Page
 *
 * @package sws
 */

 get_header();
?>
<div class=" w-full relative">
  	<img class="bg-img absolute w-[100%] right-[0px] z-0 top-[-149px]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-right-color.svg" alt="">
  	<div class=" w-full relative z-10">
	
	<?php if (have_rows('hire_role_section')) : ?>
	<?php while (have_rows('hire_role_section')) : the_row(); ?>
	<?php if (get_row_layout() == 'banner_section') : ?>
        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <div class="col-span-2 md:col-span-1 content-center">
					<?php if(get_sub_field('main_heading')): ?>
                        <h1 class="font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[74px]">
                                <?php echo get_sub_field('main_heading'); ?><br><span class="gradient-text"> <?php echo get_sub_field('gradient_heading'); ?> </span> <br><span class="text-dark-orange"> <?php echo get_sub_field('orange_heading'); ?> </span> 
                        </h1>
					<?php endif; ?>	
					<?php if(get_sub_field('paragraph')): ?>
                        <p class=" text-white font-medium text-[20px] pt-[10px] px-0 mb-16"><?php echo get_sub_field('paragraph'); ?></p>
                    <?php endif; ?>	    
						<div class="block">
						<?php if(get_sub_field('button_name_1')): ?>
                            <a href="<?php echo get_sub_field('button_url_1'); ?>" class="button inline-block align-middle button-small rounded-[10px] px-12 py-4 border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange mr-4 "><?php echo get_sub_field('button_name_1'); ?></a>
                        <?php endif; ?>	
						
						<?php if(get_sub_field('button_name_2')): ?>
							<a href="<?php echo get_sub_field('button_url_2'); ?>" class="button mobile-m-0 inline-block button-small rounded-[10px] px-[10px] md:px-[20px] py-4 border-little-orange border-2 text-[16px] text-white radial-gradient-login mr-0 lg:mr-[20px] hover:bg-dark-orange"><?php echo get_sub_field('button_name_2'); ?></a>
                        <?php endif; ?>	
						</div>
                    </div>
					<?php if(get_sub_field('right_side_image')): ?>
                    <div class="col-span-2 md:col-span-1 content-center text-right">
						<div class="w-[100%] relative max-w-[550px] inline-block p-[60px]">
							<img class="absolute w-[150px] left-[0px] z-0 top-[0]" src="<?php echo get_template_directory_uri();?>/images/cut-star.svg" alt="">
							<img class="absolute w-[95px] right-[0px] z-0 top-[0]" src="<?php echo get_template_directory_uri();?>/images/three-arrow.svg" alt="">
							<img class="absolute w-[95px] right-[calc(50%-60px)] z-[12] bottom-[50px]" src="<?php echo get_template_directory_uri();?>/images/round-arrow.svg" alt="">
							<!-- <img class="w-[100%] relative z-[10]" src="<?php echo get_template_directory_uri();?>/images/design-img.png" alt=""> -->
							<img class="w-[100%] relative z-[10]" src="<?php echo get_sub_field('right_side_image')['url']; ?>" alt="<?php echo get_sub_field('right_side_image')['alt']; ?>">
							 <div class="w-[100%] text-right absolute z-[15] right-[0px] max-w-[220px] bottom-[120px]">
								<?php if(have_rows('image_text')): ?>
								<?php while(have_rows('image_text')): the_row(); 
								  $text = get_sub_field('text'); 
								  $class = get_sub_field('class'); 
								?>
								<div class=" bg-white <?php echo $class;?> inline-block text-center rounded-[15px] text-[#01191E] text-[14px] font-bold p-[15px]">
									<?php echo $text;?>
								</div>
							    <?php endwhile; ?>	
								<?php endif; ?>	
							 </div>
						</div>
                        
                    </div>
					<?php endif; ?>
                </div>
            </div>
        </section>
	<?php endif; ?>
	<?php if (get_row_layout() == 'vetted_profile') : ?>
        <section class="w-full px-3">
            <div class="w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="block">
				<?php if(get_sub_field('small_title')): ?>
                    <div class="text-center small-intro"><?php echo get_sub_field('small_title'); ?></div>
				<?php endif; ?>
				
				<?php if(get_sub_field('main_title')): ?>
                    <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white lg:leading-[60px]"><?php echo get_sub_field('main_title'); ?><span class="text-dark-orange block"><?php echo get_sub_field('orange_title'); ?></span></h2>
				<?php endif; ?>
				
				<?php if(get_sub_field('paragraph')): ?>
                    <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 mb-10"><?php echo get_sub_field('paragraph'); ?></p>
                <?php endif; ?>
				</div>
                <div class="block w-[100%]">
                    <div class="slider-main-box" id="vetted-profiles-slider">
					
					<?php if(have_rows('vetted_box')): ?>
					<?php while(have_rows('vetted_box')): the_row(); ?>
					<?php 
					  $developer_name = get_sub_field('developer_name'); 
					  $profile = get_sub_field('profile'); 
					  $experience = get_sub_field('experience'); 
					  $avai = get_sub_field('avai'); 
					?> 
                        <div class="slider-itme">
                            <div class="custom-bg custom-border">
                                <div class="flex items-center">
									<?php $poet_image = get_sub_field('image');
										if (!empty($poet_image) && isset($poet_image['url'])):
									?>
										<img src="<?php echo esc_url($poet_image['url']); ?>" alt="Author" class="w-16 h-16 rounded-full mr-4">
									<?php endif; ?>	    
									<div>
										<span class="text-white text-2xl font-medium block"><?php echo $developer_name;?></span>
										<span class="text-white text-sm font-normal block"><?php echo $profile;?></span>
									</div>
								</div>

                                <div class="grid grid-cols-1 custom-grid-bg sm:grid-cols-2 gap-4 my-7 px-4 py-3 rounded-lg">
                                <div class="flex flex-col sm:flex-row">
                                    <img src="<?php echo get_template_directory_uri();?>/images/Bag.svg" alt="Experience 1" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
                                    <div>
                                        <h3 class="text-sm font-normal pb-2 text-white">Experience</h3>
                                        <p class="text-white text-base font-medium"><?php echo $experience;?></p>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row">
                                    
                                </div>
								</div>
                                <h2 class="text-sm font-medium text-white pb-5">Skills</h2>
                                <div class="block">
									<ul class="card-skills-item">
										<?php if(have_rows('technology')): ?>
										<?php while(have_rows('technology')): the_row(); ?>
										<?php 
										$tech_name = get_sub_field('name'); 
										?>
											<li>
												<?php echo $tech_name;?>

												<?php $tech_image = get_sub_field('image');
													if (!empty($tech_image) && isset($tech_image['url'])):
												?>
													<img src="<?php echo esc_url($tech_image['url']); ?>" alt="Technology 1" class="w-4 h-4 absolute right-[8px] top-[7px] rounded-full">
												<?php endif; ?> 
											</li>
										<?php endwhile; ?>	
										<?php endif; ?>
									</ul>
									
                                </div>

                                <?php  
								 $interview_screening_value = get_sub_field('interview_screening');
								 $interview_screening_percent = get_sub_field('interview_screening');
								 $interview_screening_multiply = $interview_screening_percent* 10;
								 $interview_screening_color = get_sub_field('interview_screening_color');
								?>
								<div class="w-full py-4">
									<p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Coding Ability</p>
									<div class="w-full bg-gray-200 rounded-full h-2 mb-1 dark:bg-gray-700 relative">
										<span class="tooltip-box" style="background:<?php echo $interview_screening_color;?>; left:calc(<?php echo $interview_screening_multiply;?>% - 16px)">
											<?php echo $interview_screening_value;?>								
											<svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
												<path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="<?php echo $interview_screening_color;?>"></path>
											</svg>
										</span>
										<div class="h-2 rounded-full dark:bg-blue-500" style="width: <?php echo $interview_screening_multiply;?>%; background:<?php echo $interview_screening_color;?>;"></div>
									</div>
									<p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
								</div>

                                <?php  
								 $technical_assignment_value = get_sub_field('technical_assignment');
								 $technical_assignment_percent = get_sub_field('technical_assignment');
								 $technical_assignment_multiply = $technical_assignment_percent* 10;
								 $technical_assignment_color = get_sub_field('technical_assignment_color');
								?>
								<div class="w-full py-4">
									<p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Problem Solving</p>
									<div class="w-full bg-gray-200 rounded-full h-2 mb-1 dark:bg-gray-700 relative">
										<span class="tooltip-box" style="background:<?php echo $technical_assignment_color;?>; left:calc(<?php echo $technical_assignment_multiply;?>% - 16px)">
											<?php echo $technical_assignment_value;?>								
											<svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
											<path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="<?php echo $technical_assignment_color;?>"></path>
											</svg>
										</span>
										<div class="h-2 rounded-full dark:bg-blue-500" style="width: <?php echo $technical_assignment_multiply;?>%; background:<?php echo $technical_assignment_color;?>;"></div>
									</div>
									<p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
								</div>

                                <?php 
								 $language_proficiency_value = get_sub_field('language_proficiency');
								 $language_proficiency_percent = get_sub_field('language_proficiency');
								 $language_proficiency_multiply = $language_proficiency_percent* 10;
								 $language_proficiency_color = get_sub_field('language_proficiency_color');
								?>
								<div class="w-full py-4">
									<p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Communication Skills</p>
									<div class="w-full bg-gray-200 rounded-full h-2 mb-1 dark:bg-gray-700 relative">
										<span class="tooltip-box" style="background:<?php echo $language_proficiency_color;?>; left:calc(<?php echo $language_proficiency_multiply;?>% - 16px)">
											<?php echo $language_proficiency_value;?>								
											<svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
											<path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="<?php echo $language_proficiency_color;?>"></path>
											</svg>
										</span>
										<div class="h-2 rounded-full dark:bg-blue-500" style="width: <?php echo $language_proficiency_multiply;?>%; background:<?php echo $language_proficiency_color;?>;"></div>
									</div>
									<p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
								</div>

                                <div class="flex flex-wrap -mx-2 mt-4">
									<div class="w-1/2 px-2 mb-4">
									<?php if(get_sub_field('per_hour')): ?>
										<p class="font-medium text-2xl text-white"><?php echo get_sub_field('per_hour'); ?></p>
									<?php endif; ?>	
									</div>
									<?php if(get_sub_field('button_name')): ?>
									<div class="w-1/2 px-2 mb-4 text-right">
										<a href="<?php echo get_sub_field('button_url'); ?>"> <button class="profile-button-custom hover:bg-dark-orange"> <?php echo get_sub_field('button_name'); ?> </button> </a>
									</div>
									<?php endif; ?>
								</div>
                            </div>
                        </div>
                    <?php endwhile; ?>	
					<?php endif; ?>     
                        
                        
                    </div>
                </div>
                <div class="block text-center mt-10">
                    <span class="inline-block p-[10px] w-[50px] cursor-pointer rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle mr-3" id="next-slide">
                        &lt;
                    </span>
                    <span class="inline-block p-[10px] w-[50px] cursor-pointer rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle"  id="prev-slide">
                        &gt;
                    </span>
                </div>


            </div>
        </section>
	<?php endif; ?>		
	<?php endwhile; ?>	
	<?php endif; ?>	
        <section class="w-full px-3">
            <div class="w-[100%] relative max-w-[1280px] mx-auto py-16">
			<img class="absolute w-[400px] right-[-180px] z-0 top-[165px]" src="<?php echo get_template_directory_uri();?>/images/squr-roted.png" alt="">
			<?php if (have_rows('hire_role_section')) : ?>
			<?php while (have_rows('hire_role_section')) : the_row(); ?>
			<?php if (get_row_layout() == 'explore_section') : ?>
                <div class="block">
				<?php if(get_sub_field('top_title')): ?>
                    <div class="text-center small-intro"><?php echo get_sub_field('top_title'); ?></div>
				<?php endif; ?>	
				<?php if(get_sub_field('main_heading')): ?>	
                    <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white lg:leading-[60px]"><?php echo get_sub_field('main_heading'); ?> <span class="text-dark-orange block"><?php echo get_sub_field('orange_heading'); ?></span></h2>
                <?php endif; ?>
				</div>
			<?php endif; ?>		
			<?php endwhile; ?>	
			<?php endif; ?>	
                <div class="relative z-10 footer-background !rounded-[24px] p-[32px] border border-[#3c1201]">
                    <div class="block bg-[#fff] p-[40px] rounded-[24px] mb-10">
					<?php if (have_rows('hire_role_section')) : ?>
					<?php while (have_rows('hire_role_section')) : the_row(); ?>
					<?php if (get_row_layout() == 'explore_section') : ?>
					<?php if(get_sub_field('box_heading')): ?>
                        <p class=" text-[#050403] font-bold text-[20px] px-0 mb-5 text-center"><?php echo get_sub_field('box_heading'); ?></p>
					<?php endif; ?>		
					<?php endif; ?>		
					<?php endwhile; ?>	
					<?php endif; ?>	
                        <?php if (have_rows('hire_role_section')) : ?>
						<?php while (have_rows('hire_role_section')) : the_row(); ?>
						<?php
						 
							 $selected_role_id  = get_sub_field('select_role_category');
							 if ( $selected_role_id  ) {
								 $args = array(
									'post_type' => 'hire',
									'tax_query' => array(
										array(
											'taxonomy' => 'rolecategory',
											'field'    => 'term_id', 
											'terms'    => $selected_role_id, 
										),
									),
								);
								$query = new WP_Query( $args );
								if ( $query->have_posts() ) {
						?>
							<div class="block max-w-[860px] mx-auto">
								<ul class="skill-list">
								<?php
								while ( $query->have_posts() ) {
									$query->the_post();
									
								$hire_image_id = get_post_thumbnail_id();
								$hire_image_src = wp_get_attachment_image_src($hire_image_id, 'full');
								$permalink = get_permalink();
								$modified_permalink = rtrim($permalink, '/') . '-developer/';	
								?>
									<li>
										<a href="<?php echo get_permalink(); ?>">
											<img class=" absolute top-[12px] left-[15px] w-[23px]" src="<?php echo esc_url($hire_image_src[0]) ;?>" alt="<?php the_title();?>"> 
											<?php the_title();?>
										</a>
									</li>
									
								<?php }?>	
								</ul>
							</div>
							
							<?php } else  { echo 'No Developers found for this role'; }
									wp_reset_postdata(); 
						 } else { echo '';}?>
						<?php endwhile; ?>		
						<?php endif; ?>		
						
                    </div>
					<?php if (have_rows('hire_role_section')) : ?>
					<?php while (have_rows('hire_role_section')) : the_row(); ?>
					<?php if (get_row_layout() == 'explore_section') : ?>
					<?php if(get_sub_field('button_name')): ?>	
                    <div class="block text-center">
                        <a href="<?php echo get_sub_field('button_url'); ?>" class="button inline-block align-middle button-small rounded-[10px] px-12 py-4 border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange"><?php echo get_sub_field('button_name'); ?></a>
                    </div>
					<?php endif; ?>		
					<?php endif; ?>		
					<?php endwhile; ?>	
					<?php endif; ?>
                </div>
            </div>
        </section>
		
		<?php if (have_rows('hire_role_section')) : ?>
		<?php while (have_rows('hire_role_section')) : the_row(); ?>
		<?php if (get_row_layout() == 'process_section') : ?>
			<section class="w-full px-3 py-16">
				<div class="container mx-auto">
					<div class="block">
						<?php if(get_sub_field('small_title')): ?>  
							<div class="text-center small-intro"><?php echo get_sub_field('small_title'); ?></div>
						<?php endif; ?>

						<?php if(get_sub_field('main_heading')): ?>	
							<h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white lg:leading-[60px]"><?php echo get_sub_field('main_heading'); ?><br><span class="text-dark-orange block"><?php echo get_sub_field('orange_heading'); ?></span></h2>
						<?php endif; ?>
					</div>


					<div class="grid grid-cols-12 md:grid-cols-12 gap-3 mt-16">
						<div class="col-span-12 md:col-span-5 content-center">
							<div class="slider slider-nav thumb-image">


							<?php if(have_rows('process_section')): ?>
								<?php while(have_rows('process_section')): the_row(); ?>
								<?php 
									$small_title = get_sub_field('small_title'); 
									$main_title = get_sub_field('main_title'); 
									$paragraph = get_sub_field('paragraph');
									$row_index = get_row_index();				
								?>

								<div class="thumbnail-image">
									<span class="absolute !text-black text-center pt-[10px] text-[13px] font-bold left-[25px] top-[31px] w-[40px] h-[40px] bg-[#fff] rounded-[50%]"><?php echo $row_index; ?></span>
									<!-- <?php echo $main_title;?>	 -->
									<h5 class=" text-white font-light md:text-[30px] leading-[40px]">Step <?php echo $row_index; ?></h5>
								</div>

								<?php endwhile; ?>	
							<?php endif; ?>  
								
							</div>
						</div>
						<div class="col-span-12 md:col-span-7 content-center pl-0 md:pl-[10rem] pr-3 md:pr-10">

								<div class="slider slider-for">
									<?php if(have_rows('process_section')): ?>
										<?php while(have_rows('process_section')): the_row(); ?>
										<?php 
											$small_title = get_sub_field('small_title'); 
											$main_title = get_sub_field('main_title'); 
											$paragraph = get_sub_field('paragraph');
											$row_index = get_row_index();				
										?> 
											<div class="slider-banner-image">
												<!-- <div class="block text-[16px] text-[#D0511B] font-semibold mb-5">
													<?php if(get_sub_field('icon')): ?>
														<img class="!w-[24px] !h-[24px] align-top !inline-block mr-2" src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['alt']; ?>">
													<?php endif; ?>
													<span class="!inline-block align-top"><?php echo $small_title;?></span></div>
												</siv> -->
												<!-- <span class="inline-block align-top"><?php echo $small_title;?></span> -->
												<h5 class=" text-white text-[1.5rem] font-normal md:text-[3rem] leading-[1.5rem] md:leading-[3rem] mb-7 "><?php echo $main_title;?></h5>
												<p class="text-white text-[16px]"><?php echo $paragraph;?></p>
											</div>
											
										<?php endwhile; ?>	
										<?php endif; ?> 


										
								</div>


							
							<!-- End User this HTML for Slider -->
						</div>
					</div>



					
				</div>
			</section>

        
		<?php endif; ?>

			

		
		
		
		
		
		<?php if (get_row_layout() == 'calculator_section') : ?>
        <section class="calculator-box w-[100%] py-16" style="clear: both;">
            <div class="inner-box grid grid-cols-1 lg:grid-cols-10 content-center rounded-[60px] max-w-[90%] min-h-[350px] mx-auto px-4 md:px-[10%]">
                <div class="grid-item col-span-5 py-[10%] lg:py-[100px] content-center">
				<?php if(get_sub_field('box_top_heading')): ?>  
                    <div class="block mb-5">
                        <span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem]"><?php echo get_sub_field('box_top_heading'); ?></span>
                    </div>
				<?php endif; ?> 	
				<?php if(get_sub_field('box_main_heading')): ?>  
                    <h3 class="text-[26px] lg:text-[36px] text-[#ffff] lg:leading-[30px] font-medium mb-4"><?php echo get_sub_field('box_main_heading'); ?> <span class="text-dark-orange"> <?php echo get_sub_field('box_orange_heading'); ?> </span></h3>
				<?php endif; ?> 	
				<?php if(get_sub_field('box_paragraph')): ?>  	
                    <p class="text-white text-[15px] mb-[30px] lg:text-[24px] font-medium"><?php echo get_sub_field('box_paragraph'); ?></p>
				<?php endif; ?> 	
				<?php if(get_sub_field('button_name')): ?>
				<?php $calc_url =  get_sub_field('button_url'); ?>
				<p>
					<a href="<?php echo esc_url( $calc_url ); ?>" class="w-[100%] max-w-[300px] text-center button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange"><?php echo get_sub_field('button_name'); ?></a>
				</p>
				<?php endif; ?>
                </div>
                <div class="grid-item col-span-5 content-end relative py-[10%] lg:py-[100px]">

						<div class=" w-[100%] max-w-[450px] min-h-[400px] bg-[#ff4d04] p-[15px] md:p-[30px] rounded-[40px] relative overflow-hidden ml-auto">
							<p class="text-[30px] font-semibold text-[#fff]"> <?php echo get_sub_field('hourly_rate_title'); ?></p>
							<p class="text-[50px] font-bold text-[#fff]"><?php echo get_sub_field('amount'); ?></p>
							<p class="text-[50px] font-bold text-[#fff] leading-[40px]"><span class="text-[20px] inline-block align-bottom leading-[25px]">to</span><?php echo get_sub_field('amount_save_title'); ?>  <span class="text-[20px] inline-block align-bottom leading-[25px]"> £/yearly</span></p>
							<p class="text-[20px] text-[#fff] mt-[20px]"><?php echo get_sub_field('equivalent_text'); ?></p>
							<div class="w-[100%] absolute h-[110px] bg-[rgba(255,255,255,0.4)] left-0 bottom-0 p-[20px] md:px-[30px]">
								<p class="text-[20px] text-[#fff]"><?php echo get_sub_field('save_text'); ?></p>
								<p class="text-[13px] text-[#fff]"><?php echo get_sub_field('expense_include'); ?></p>
							</div>
						</div>

					
                    <!-- <div class="max-w-md relative z-10 rounded-3xl min-h-[300px] bg-white overflow-hidden shadow-lg mx-auto">
                        <div class="px-6 py-4">
                            <div class="block">
								<p class="text-[24px] text-[#64748b]"><?php echo get_sub_field('hourly_rate_title'); ?></p>
							</div>
							
							<?php if(get_sub_field('amount')): ?> 
							<div class="block">
								<p class="text-[54px] font-[500] "><?php echo get_sub_field('amount'); ?></p>
							</div>
							<?php endif; ?>	

                            <div class="block w-100 mt-3 h-[110px] border-b border-gray-400">
                                <div class="sliderwrap">
                                    <input class="home-range-slider" id="range" type="range" max="100" value="60" />
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
                    </div> -->
                    <!-- <img class="calculater-bg absolute left-0 bottom-0 w-[100%] z-[0]" src="https://smartworking.io/wp-content/uploads/2024/06/calcbg.svg"> -->
                </div>
            </div>
        </section>
		<?php endif; ?>		
		
		<?php if (get_row_layout() == 'after_calculator_section') : ?>	
        <section class="w-full px-3">
            <div class="w-[100%] max-w-[1280px] mx-auto py-16">
                <!-- <div class="grid grid-cols-12 md:grid-cols-12 gap-3">
                    <div class="col-span-12 md:col-span-7">
					<?php if(get_sub_field('main_heading')): ?>
                        <h5 class="font-medium text-[25px] md:text-[48px] text-white md:leading-[55px] mb-5"><?php echo get_sub_field('main_heading'); ?></h5>
					<?php endif; ?>	
					
					<?php if(get_sub_field('paragraph')): ?>	
                        <p class=" text-white text-[16px] md:text-[20px]"><?php echo get_sub_field('paragraph'); ?></p>
                     <?php endif; ?>	  
                    </div>
                    <div class="col-span-12 md:col-span-5 text-right">
					<?php if(get_sub_field('right_image')): ?>
                        <div class="w-[100%] max-w-[450px] p-3 bg-[#1F0C04] border border-[#401A0A] relative dot-color-bg rounded-[12px] ml-auto">
                            <img class="w-[100%] inline-block relative z-10" src="<?php echo get_sub_field('right_image')['url']; ?>" alt="<?php echo get_sub_field('right_image')['alt']; ?>">
                        </div>
                    <?php endif; ?>    
                    </div>
                </div> -->
				<div class="grid grid-cols-12 md:grid-cols-12 py-14 gap-5 mt-14">
					<?php if(have_rows('content_section')): ?>
					<?php while(have_rows('content_section')): the_row(); ?>
					<?php 
						$heading = get_sub_field('heading'); 
						$paragraph = get_sub_field('paragraph');	
					?>
						<div class="col-span-12 md:col-span-6">
							<div class="rounded-3xl relative mb-5 h-[100%] pl-[80px]">
								<div class=" text-center w-[50px] h-[50px] pt-[10px] absolute bg-black border border-[#FF4D02] rounded-full left-[30px] top-[30px]">
									<img class="w-[35px] h-[22px] inline-block" src="https://smartworking.io/wp-content/uploads/2024/07/No-hidden-Fee.svg">
								</div>
								<div class="flex">
									<div class="w-[100%] px-6 py-6">
										<div class="mt-0">
											<h5 class="text-white text-[25px] font-bold leading-tight mb-5"> <?php echo $heading;?> </h5>
											<p class="text-white text-base"><?php echo $paragraph;?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>	
					<?php endif; ?>
				
                </div>
			</div>
        </section>
		<?php endif; ?>
		

        <?php if (get_row_layout() == 'testimonial_section') : ?>
			<div class="my-0 relative mx-auto flex flex-col justify-center testimonial-section items-center py-16">
				<?php if(get_sub_field('small_heading')): ?>
					<div class ="container mx-auto md:px-0 px-10">
						<h3 class="text-white text-[12px] lg:text-[16px] text-center flex items-center justify-center small-intro mt-48"><?php echo get_sub_field('small_heading'); ?></h3>
					</div>
				<?php endif; ?>
				
				<?php if(get_sub_field('main_heading')): ?>
					<div class="flex flex-col items-center justify-center">
						<h2 class="text-[35px] sm:text-[40px] lg:text-[56px] 3xl:text-[58px] font-medium text-white text-center px-0  md:leading-tight"><?php echo get_sub_field('main_heading'); ?></h2>
					</div>
				<?php endif; ?>
				<img class="absolute w-[400px] right-[300px] z-0 top-[20px]" src="<?php echo get_template_directory_uri();?>/images/sqr-circule.png" alt="">
				<div class="w-full flex relative z-10 min-h-[520px] md:min-h-[620px] pr-3 lg:pr-0 pt-5 lg:pt-16 pb-2 md:pb-16 overflow-hidden">
				<div class="flex w-0 lg:w-1/12">&nbsp;</div>
				<div class="slider-wrapper w-full min-h-[400px] lg:min-h-[500px] pt-[30px] relative card-container overflow-visible">
					<div class="slider-overlay">

					
				
					<?php if(have_rows('testimonial_card')): ?>
					<?php while(have_rows('testimonial_card')): the_row(); ?>
					<?php 
						$testimonial = get_sub_field('testimonial'); 
						$author_name = get_sub_field('name'); 
						$author_designation = get_sub_field('designation'); 
						$background = get_sub_field('background_color'); 
						$linkedin = get_sub_field('linkedin');
					?>


				
						<div class="bg-[<?php echo esc_attr($background); ?>] slider-item w-100 lg:w-[600px] h-[450px] rounded-3xl absolute card-placement card" style="background:<?php echo esc_attr($background); ?>;" >
							<div class="p-4 lg:p-10 flex flex-col ">
								<div class="flex justify-between items-center mb-6">
									<img class=" h-[55px]" src="<?php echo get_sub_field('logo')['url']; ?>">
									<img src="<?php echo get_sub_field('rating')['url']; ?>">
								</div>
								<p class="text-[20px] text-[#050403] leading-6"> <?php echo $testimonial;?> </p>

								<div class=" absolute bottom-[20px] left-0 w-[100%] flex justify-between items-center px-[2.5rem]">
									<div class="flex items-center">
										<img class=" w-[70px] rounded-full mr-5" src="<?php echo get_sub_field('author_pic')['url']; ?>">
										<div>
											<p class="text-[#050403] text-[24px]"> <?php echo esc_attr($author_name);?> </p>
											<p class="text-[#050403] text-[16px]"> <?php echo esc_attr($author_designation);?> </p>
										</div>
									</div>

									<!-- <a href="<?php echo $linkedin;?>" target="_blank"> <img src="<?php echo get_template_directory_uri();?>/images/linkedin_card_logo.svg" /> </a> -->
								</div>
							</div>
						</div>
						<?php endwhile; ?>	
					<?php endif; ?> 
					
				</div>
				</div>
			</div>
			<div>
				<div class="buttons flex gap-3">
					<button class="text-white p-3 rounded-[10px] border border-[#464444] disabled:opacity-[0.3]" disabled id="nextButton">&#8592;</button>
					<button class="text-white p-3 rounded-[10px] border border-[#464444] disabled:opacity-[0.3]" id="prevButton" >&#8594;</button>
				</div>
			</div>

			</div>			
		<?php endif; ?>	
		<?php endwhile; ?>	
		<?php endif; ?>
		<div class="w-full relative pt-16">
			<h4 class="text-center small-intro"> Blogs </h4>
			<h2 class=" text-3xl sm:text-4xl lg:text-5xl 3xl:text-58 font-medium gradient-text text-center px-0  md:leading-tight">Our  Blogs </h2>
			<p class="text-white text-xl font-normal text-center mt-6 mb-0 px-0 "> Interviews, tips, guides, industry best practices, and news. </p>
			<?php get_template_part( 'template-parts/home-blog' );?>
		</div>
        

        <?php if (have_rows('hire_role_section')) : ?>
		<?php while (have_rows('hire_role_section')) : the_row(); ?>
		<?php if (get_row_layout() == 'faq_section') : ?>
		<div class="w-full relative grid items-center z-10 py-16">
			<div class="container mx-auto md:px-0 px-10">
			<?php if(get_sub_field('small_title')): ?>
			<h3 class="text-center small-intro"> <?php echo get_sub_field('small_title'); ?> </h3>
			<?php endif; ?>
			
			<?php if(get_sub_field('main_title')): ?>
			<h5 class=" text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium text-white text-center px-0  md:leading-tight"><?php echo get_sub_field('main_title'); ?><br><span class="text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 text-dark-orange"><?php echo get_sub_field('orange_title'); ?> </span></h5>
			<?php endif; ?>
			
				<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-14">
					<?php if(have_rows('faq')): ?>
					<?php while(have_rows('faq')): the_row(); ?>
					<?php 
					  $question = get_sub_field('question'); 
					  $answer = get_sub_field('answer'); 
					  $row_index = get_row_index();
					  
					?> 

					<div>
					<div class="accordian-sec-bg mb-5">
						<button class="w-full text-left py-1 px-4  focus:outline-none flex justify-between items-center" onclick="toggleAccordion(<?php echo $row_index; ?>)">
							<span id="accordion-label-<?php echo $row_index; ?>" class="text-xl pt-6 pb-6 font-medium text-white"><?php echo $question;?></span>
							<svg id="arrow-down-<?php echo $row_index; ?>" class="h-4 w-4 text-gray-500 rounded-full" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M6 9l4 4 4-4"></path>
							</svg>
							<svg id="arrow-up-<?php echo $row_index; ?>" class="h-4 w-4 hidden text-gray-500 rounded-full" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M6 9l4-4 4 4"></path>
							</svg>
						</button>
						<div id="accordion-section-<?php echo $row_index; ?>" class="overflow-hidden transition-max-height duration-300 rounded-xl" style="max-height:0;">
						<p class="p-4 text-base text-white"><?php echo  $answer;?></p>
						</div>
					</div>
					</div>
					<?php endwhile; ?>	
					<?php endif; ?> 
				</div>

			</div>
		</div>
		<?php endif; ?>
		
		<?php if (get_row_layout() == 'cta_section') : ?>
        
		
			<section class="w-full py-24">
				<div class=" w-[100%] container !p-0 mx-auto">
					<div class=" block relative rounded-[24px] vetting-bg">
						<img class="absolute h-[100%] w-[50%] right-[0px] top-[0px] z-1" src="<?php echo get_template_directory_uri();?>/images/bg-line-box.png">
						<div class="grid grid-cols-1 lg:grid-cols-12 content-center gap-4 relative z-10 h-[100%]">
							<div class="grid-item col-span-1 lg:col-span-5 content-center min-h-[500px] py-[32px] pl-[30px] lg:pl-[150px]">
							<p><img class="h-[25px] w-[260px] ml-[-5px] mb-5" src="<?php echo get_template_directory_uri();?>/images/white-black-logo.svg" alt=""></p>
							<?php if(get_sub_field('heading')): ?>
								<h5 class=" text-white font-bold text-[32px] lg:text-[40px] lg:leading-[45px]"><?php echo get_sub_field('heading'); ?></h5>
							<?php endif; ?>	
							
							<?php if(get_sub_field('paragraph')): ?>
								<p class=" text-white text-[16px] mt-[30px] mb-[30px]"><?php echo get_sub_field('paragraph'); ?></p>
							<?php endif; ?>		
								<div class="block text-left mt-10">
									<span class=" inline-block relative align-middle">
										<span class=" text-[14px] text-[#fff] block text-start font-bold">Excellent</span>
									</span>
									<span class=" inline-block relative align-middle ml-[5px]">
										<svg role="img" viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 25px;">
											<title id="starRating-aab4m6af90i" lang="en-US">4.6 out of 5 star rating on Trustpilot</title>
											<g class="tp-star">
												<path class="tp-star-full" fill="#dcdce6" d="M0 46.330002h46.375586V0H0z"></path>
												<path class="tp-star__shape" d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z" fill="#FFF"></path>
											</g>
											<g class="tp-star">
												<path class="tp-star-full" fill="#dcdce6" d="M51.24816 46.330002h46.375587V0H51.248161z"></path>
												<path class="tp-star__shape" d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z" fill="#FFF"></path>
											</g>
											<g class="tp-star">
												<path class="tp-star-full" fill="#dcdce6" d="M102.532209 46.330002h46.375586V0h-46.375586z"></path>
												<path class="tp-star__shape" d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z" fill="#FFF"></path>
											</g>
											<g class="tp-star">
												<path class="tp-star-full" fill="#dcdce6" d="M153.815458 46.330002h46.375586V0h-46.375586z"></path>
												<path class="tp-star__shape" d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
											</g>
											<g class="tp-star">
												<path fill="#dcdce6" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
												<path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
												<path class="tp-star__shape" d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
											</g>
										</svg>
									</span>
									<span class=" inline-block relative align-middle ml-[5px]">
										<svg role="img" viewBox="0 0 126 31" xmlns="http://www.w3.org/2000/svg" fill="#fff" style="height: 20px; width: auto;">
												<title id="trustpilotLogo-r4vc8wem16l">Trustpilot</title>
												<path fill="#ffffff" class="tp-logo__text" d="M33.074774 11.07005H45.81806v2.364196h-5.010656v13.290316h-2.755306V13.434246h-4.988435V11.07005h.01111zm12.198892 4.319629h2.355341v2.187433h.04444c.077771-.309334.222203-.60762.433295-.894859.211092-.287239.466624-.56343.766597-.79543.299972-.243048.633276-.430858.999909-.585525.366633-.14362.744377-.220953 1.12212-.220953.288863 0 .499955.011047.611056.022095.1111.011048.222202.033143.344413.04419v2.408387c-.177762-.033143-.355523-.055238-.544395-.077333-.188872-.022096-.366633-.033143-.544395-.033143-.422184 0-.822148.08838-1.199891.254096-.377744.165714-.699936.41981-.977689.740192-.277753.331429-.499955.729144-.666606 1.21524-.166652.486097-.244422 1.03848-.244422 1.668195v5.39125h-2.510883V15.38968h.01111zm18.220567 11.334883H61.02779v-1.579813h-.04444c-.311083.574477-.766597 1.02743-1.377653 1.369908-.611055.342477-1.233221.51924-1.866497.51924-1.499864 0-2.588654-.364573-3.25526-1.104765-.666606-.740193-.999909-1.856005-.999909-3.347437V15.38968h2.510883v6.948968c0 .994288.188872 1.701337.577725 2.1101.377744.408763.922139.618668 1.610965.618668.533285 0 .96658-.077333 1.322102-.243048.355524-.165714.644386-.37562.855478-.65181.222202-.265144.377744-.596574.477735-.972194.09999-.37562.144431-.784382.144431-1.226288v-6.573349h2.510883v11.323836zm4.27739-3.634675c.07777.729144.355522 1.237336.833257 1.535623.488844.287238 1.06657.441905 1.744286.441905.233312 0 .499954-.022095.799927-.055238.299973-.033143.588836-.110476.844368-.209905.266642-.099429.477734-.254096.655496-.452954.166652-.198857.244422-.452953.233312-.773335-.01111-.320381-.133321-.585525-.355523-.784382-.222202-.209906-.499955-.364573-.844368-.497144-.344413-.121525-.733267-.232-1.17767-.320382-.444405-.088381-.888809-.18781-1.344323-.287239-.466624-.099429-.922138-.232-1.355432-.37562-.433294-.14362-.822148-.342477-1.166561-.596573-.344413-.243048-.622166-.56343-.822148-.950097-.211092-.386668-.311083-.861716-.311083-1.436194 0-.618668.155542-1.12686.455515-1.54667.299972-.41981.688826-.75124 1.14434-1.005336.466624-.254095.97769-.430858 1.544304-.541334.566615-.099429 1.11101-.154667 1.622075-.154667.588836 0 1.15545.066286 1.688736.18781.533285.121524 1.02213.320381 1.455423.60762.433294.276191.788817.640764 1.07768 1.08267.288863.441905.466624.98324.544395 1.612955h-2.621984c-.122211-.596572-.388854-1.005335-.822148-1.204193-.433294-.209905-.933248-.309334-1.488753-.309334-.177762 0-.388854.011048-.633276.04419-.244422.033144-.466624.088382-.688826.165715-.211092.077334-.388854.198858-.544395.353525-.144432.154667-.222203.353525-.222203.60762 0 .309335.111101.552383.322193.740193.211092.18781.488845.342477.833258.475048.344413.121524.733267.232 1.177671.320382.444404.088381.899918.18781 1.366542.287239.455515.099429.899919.232 1.344323.37562.444404.14362.833257.342477 1.17767.596573.344414.254095.622166.56343.833258.93905.211092.37562.322193.850668.322193 1.40305 0 .673906-.155541 1.237336-.466624 1.712385-.311083.464001-.711047.850669-1.199891 1.137907-.488845.28724-1.04435.508192-1.644295.640764-.599946.132572-1.199891.198857-1.788727.198857-.722156 0-1.388762-.077333-1.999818-.243048-.611056-.165714-1.14434-.408763-1.588745-.729144-.444404-.33143-.799927-.740192-1.05546-1.226289-.255532-.486096-.388853-1.071621-.411073-1.745528h2.533103v-.022095zm8.288135-7.700208h1.899828v-3.402675h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155542.486096.07777.132572.199981.232.366633.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.13332-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222zm8.454788 0h2.377562V16.9253h.04444c.355523-.662858.844368-1.12686 1.477644-1.414098.633276-.287239 1.310992-.430858 2.055369-.430858.899918 0 1.677625.154667 2.344231.475048.666606.309335 1.222111.740193 1.666515 1.292575.444405.552382.766597 1.193145.9888 1.92229.222202.729145.333303 1.513527.333303 2.3421 0 .762288-.099991 1.50248-.299973 2.20953-.199982.718096-.499955 1.347812-.899918 1.900194-.399964.552383-.911029.98324-1.533194 1.31467-.622166.33143-1.344323.497144-2.18869.497144-.366634 0-.733267-.033143-1.0999-.099429-.366634-.066286-.722157-.176762-1.05546-.320381-.333303-.14362-.655496-.33143-.933249-.56343-.288863-.232-.522175-.497144-.722157-.79543h-.04444v5.656393h-2.510883V15.38968zm8.77698 5.67849c0-.508193-.06666-1.005337-.199981-1.491433-.133321-.486096-.333303-.905907-.599946-1.281527-.266642-.37562-.599945-.673906-.988799-.894859-.399963-.220953-.855478-.342477-1.366542-.342477-1.05546 0-1.855387.364572-2.388672 1.093717-.533285.729144-.799928 1.701337-.799928 2.916578 0 .574478.066661 1.104764.211092 1.59086.144432.486097.344414.905908.633276 1.259432.277753.353525.611056.629716.99991.828574.388853.209905.844367.309334 1.355432.309334.577725 0 1.05546-.121524 1.455423-.353525.399964-.232.722157-.541335.97769-.905907.255531-.37562.444403-.79543.555504-1.270479.099991-.475049.155542-.961145.155542-1.458289zm4.432931-9.99812h2.510883v2.364197h-2.510883V11.07005zm0 4.31963h2.510883v11.334883h-2.510883V15.389679zm4.755124-4.31963h2.510883v15.654513h-2.510883V11.07005zm10.210184 15.963847c-.911029 0-1.722066-.154667-2.433113-.452953-.711046-.298287-1.310992-.718097-1.810946-1.237337-.488845-.530287-.866588-1.160002-1.12212-1.889147-.255533-.729144-.388854-1.535622-.388854-2.408386 0-.861716.133321-1.657147.388853-2.386291.255533-.729145.633276-1.35886 1.12212-1.889148.488845-.530287 1.0999-.93905 1.810947-1.237336.711047-.298286 1.522084-.452953 2.433113-.452953.911028 0 1.722066.154667 2.433112.452953.711047.298287 1.310992.718097 1.810947 1.237336.488844.530287.866588 1.160003 1.12212 1.889148.255532.729144.388854 1.524575.388854 2.38629 0 .872765-.133322 1.679243-.388854 2.408387-.255532.729145-.633276 1.35886-1.12212 1.889147-.488845.530287-1.0999.93905-1.810947 1.237337-.711046.298286-1.522084.452953-2.433112.452953zm0-1.977528c.555505 0 1.04435-.121524 1.455423-.353525.411074-.232.744377-.541335 1.01102-.916954.266642-.37562.455513-.806478.588835-1.281527.12221-.475049.188872-.961145.188872-1.45829 0-.486096-.066661-.961144-.188872-1.44724-.122211-.486097-.322193-.905907-.588836-1.281527-.266642-.37562-.599945-.673907-1.011019-.905907-.411074-.232-.899918-.353525-1.455423-.353525-.555505 0-1.04435.121524-1.455424.353525-.411073.232-.744376.541334-1.011019.905907-.266642.37562-.455514.79543-.588835 1.281526-.122211.486097-.188872.961145-.188872 1.447242 0 .497144.06666.98324.188872 1.458289.12221.475049.322193.905907.588835 1.281527.266643.37562.599946.684954 1.01102.916954.411073.243048.899918.353525 1.455423.353525zm6.4883-9.66669h1.899827v-3.402674h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155541.486096.077771.132572.199982.232.366634.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.133321-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222z"></path>
												<path class="tp-logo__star" fill="#00B67A" d="M30.141707 11.07005H18.63164L15.076408.177071l-3.566342 10.892977L0 11.059002l9.321376 6.739063-3.566343 10.88193 9.321375-6.728016 9.310266 6.728016-3.555233-10.88193 9.310266-6.728016z"></path>
												<path class="tp-logo__star-notch" fill="#005128" d="M21.631369 20.26169l-.799928-2.463625-5.755033 4.153914z"></path>
											</svg>
									</span>
								</div>	
							
							</div>
							<div class="grid-item col-span-1 lg:col-span-7 content-center relative">
							<?php if(get_sub_field('calender')): ?>
								<div class="absolute right-0 top-[-100px] w-[100%] min-h-[500px] overflow-hidden rounded-[24px]">
									<?php echo get_sub_field('calender'); ?>
								</div>
							<?php endif; ?>	
							</div>
						</div>
					</div>
				</div>
			</section>
		
		
		
		
		<?php endif; ?>
        
		
		<?php if (get_row_layout() == 'hire_offshore') : ?>
        <div class="w-full relative grid items-center py-16">
		<div class="container mx-auto">
          <div class="d-block">
		  <?php if(get_sub_field('top_title')): ?>
            <h3 class="text-center small-intro"> <?php echo get_sub_field('top_title'); ?> </h3>
		  <?php endif; ?>  

			<?php if(get_sub_field('main_title')): ?>
            <h5 class=" text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium text-white text-center px-0  md:leading-tight"><?php echo get_sub_field('main_title'); ?><br><span class="text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 text-dark-orange">
            <?php echo get_sub_field('orange_title'); ?></span></h5>
			<?php endif; ?>  
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-10 gap-5 content-center mt-5">
              <div class="grid-item col-span-8 content-center">
				<?php if(get_sub_field('title')): ?>
                  <h5 class="text-[22px] lg:text-[36px] text-[#fff] font-medium"> <?php echo get_sub_field('title'); ?> </h5>
				<?php endif; ?> 

				<?php if(get_sub_field('paragraph')): ?>	
                  <p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[20px] text-[#ffffff] font-normal ">
                    <?php echo get_sub_field('paragraph'); ?>
                  </p>
				<?php endif; ?>   
                  <p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[20px] text-[#FF4F04] font-normal "> 
                    <svg id="change-icons" class=" inline-block change-icons  mr-3" xmlns="http://www.w3.org/2000/svg" width="28" height="29" viewBox="0 0 28 29" fill="none">
                    	<path fill-rule="evenodd" clip-rule="evenodd" d="M15.0769 23.1698V9.88162C16.3929 11.1965 18.1849 12.0344 20.0953 12.0344H21.1722V9.88054H20.0953C17.4687 9.88054 15.0769 7.48762 15.0769 4.86208V3.78516H12.923V4.86208C12.923 7.48762 10.5312 9.88054 7.90458 9.88054H6.82766V12.0344H7.90458C9.81504 12.0344 11.607 11.1965 12.923 9.88162L12.923 23.1698H15.0769Z" fill="#FF4F04"/>
                    </svg>
					<span class="cursor-pointer " id="show-more">Show more</span></p>
              </div>
               <?php $right_image = get_sub_field('right_image');
					if (!empty($right_image) && isset($right_image['url'])):
				?>
					<div class="grid-item col-span-2 content-center text-end pt-5">				
						<img class="img-3 inline w-[214px]" src="<?php echo esc_url($right_image['url']); ?>">
					</div>	
				<?php endif; ?>
          </div>
        </div>
		</div>
		</div>
		</div>
		
		<div class="w-full relative" id="sticky-details">
		<div class="container mx-auto">
          <div class="show-more-box pt-[0px]">
            <div class="grid grid-cols-1 lg:grid-cols-10 gap-5 mt-5">
              <div class="grid-item col-span-2 content-start" id="fix-side-box">
                <div class="stickysidenav">
                  <ul class="scroll-menu">
				  
				  <?php if(have_rows('table_content')): ?>
				  <?php $section_count = 1; ?>
					<?php while(have_rows('table_content')): the_row(); ?>
					<?php 
					  $main_title = get_sub_field('main_title'); 
					  $unique_id = 'target' . $section_count;
					?>
                    <li><a class=" cursor-pointer" data-location="<?php echo $unique_id; ?>"> <?php echo $main_title;?> </a></li>
                    
					
					<?php $section_count++;?>
					<?php endwhile; ?>	
					<?php endif; ?>
                  </ul>
                </div>
              </div>
              <div class="grid-item col-span-6 content-start">
                
				
				<?php if(have_rows('table_content')): ?>
				  <?php $section_count = 1; ?>
					<?php while(have_rows('table_content')): the_row(); ?>
					<?php 
					  $main_title = get_sub_field('main_title'); 
					  $unique_id = 'target' . $section_count;
					?>
				<div class="scroll-section" id="<?php echo $unique_id; ?>">
                  <h3 class="text-[36px] text-white font-semibold"><?php echo $main_title;?></h3>
                  <?php if(have_rows('description')): ?>
				  <?php while(have_rows('description')): the_row(); ?>
				  
					<?php echo get_sub_field('main_description') ;?>
					
                  <?php endwhile; ?>	
				  <?php endif; ?>
				  
				</div>
				<?php $section_count++;?>
				<?php endwhile; ?>	
				<?php endif; ?>
                
                
                
                
              </div>
			  <?php if(get_sub_field('right_cta_heading')): ?>
              <div class="grid-item col-span-2 content-start">
                <div class="bg-[#c282fa] rounded-[10px] min-h-[100px] p-5 stickysidenav">
                    <h3 class="text-[22px] lg:text-[24px] text-[#fff] font-medium"><?php echo get_sub_field('right_cta_heading'); ?></h3>
					<?php if(get_sub_field('right_cta_button_name')): ?>
                    <a href="<?php echo get_sub_field('right_cta_button_link'); ?>" class="bg-[#fff] inline-block py-4 text-center text-[18px] px-5 rounded-[14px] border text-[#FF4D02] mt-[30px]"><?php echo get_sub_field('right_cta_button_name'); ?> 
                      <svg class="inline-block ml-[35px] " xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38461 12.0058H15.7745C14.6474 10.8779 13.9292 9.34187 13.9292 7.70433V6.78125H15.7754V7.70433C15.7754 9.95571 17.8265 12.0058 20.0769 12.0058H21V13.852H20.0769C17.8265 13.852 15.7754 15.9021 15.7754 18.1535V19.0766H13.9292V18.1535C13.9292 16.516 14.6474 14.98 15.7745 13.852H4.38461V12.0058Z" fill="#FF4D02"/>
                      </svg>
                    </a>
					<?php endif; ?>
                </div>
              </div>
			  <?php endif; ?>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
		<?php endif; ?>  
		<?php endwhile; ?>
		<?php endif; ?>
</div>
</div>

<script type="text/javascript">

	jQuery(window).bind("load", function() {
		callFunction()
	});
</script>

<?php get_footer();?>