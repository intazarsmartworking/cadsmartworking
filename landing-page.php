<?php
/**
 * Template Name: Landing Page
 *
 * @package sws
 */

 get_header('second');
?>
<div class=" w-full relative">
  	<img class="bg-img absolute w-[150%] max-w-[initial] opacity-[0.6] left-[-20%] z-0 top-[-15%]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
  	<div class=" w-full relative z-10">
		
        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-[16px]">
                <div class="grid grid-cols-1 content-center gap-6 md:gap-32 relative z-10">
                    <div class="grid-item col-span-1">
                        <img class="!h-[23px] !w-[185px] ml-[-5px]" src="<?php echo get_template_directory_uri();?>/images/LogoSVG.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
		<?php if (have_rows('landing_block_section')) : ?>
		<?php while (have_rows('landing_block_section')) : the_row(); ?>
		<?php if (get_row_layout() == 'banner_section') : ?>
        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16 !pt-[90px]">
                <div class="grid grid-cols-1 lg:grid-cols-2 content-center gap-6 md:gap-32 relative z-10">
                        <div class="grid-item col-span-1">
						<?php if(get_sub_field('main_heading')): ?>
                            <h1 class="font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[74px]">
                                <?php echo get_sub_field('main_heading'); ?>
                                <span class="gradient-text"><?php echo get_sub_field('gradient_heading'); ?></span>
                                <span class="text-dark-orange"> <?php echo get_sub_field('orange_heading'); ?></span> 
                            </h1>
						<?php endif; ?>
						<?php if(get_sub_field('small_paragraph')): ?>
                            <p class=" text-white font-medium text-2xl pt-[10px] px-0 mb-10"><?php echo get_sub_field('small_paragraph'); ?></p>
						<?php endif; ?>	
						<?php if(get_sub_field('app_star_icon')): ?>
						   <div class="block get-app">
                                <img src="<?php echo get_sub_field('app_star_icon')['url']; ?>" alt="<?php echo get_sub_field('app_star_icon')['alt']; ?>">
                            </div>
						<?php endif; ?>		
                        </div>
                        <div class="grid-item col-span-1 content-center">
						<?php if(get_sub_field('form_part')): ?>
                            <div class=" w-[100%] max-w-[450px] min-h-[300px] ml-auto bg-[#fff] rounded-[10px] p-[30px]">
							    <h6 class="text-dark-orange font-bold text-2xl"> Let’s start building your team </h6>
								<?php echo get_sub_field('form_part'); ?>
							    <?php //echo do_shortcode('[contact-form-7 id="5476fb8" title="Landing Form"]'); ?>
                            </div>
							<?php endif; ?>		
						
                        </div>
                    </div>
            </div>
        </section>
		<?php endif; ?>
         
	
	
    <?php if (get_row_layout() == 'profile_section') : ?>	
        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="block">
				<?php if(get_sub_field('small_title')): ?>
                    <div class="text-center small-intro"><?php echo get_sub_field('small_title'); ?></div>
				<?php endif; ?>

				<?php if(get_sub_field('main_title')): ?>
                    <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[60px]">
                        <?php echo get_sub_field('main_title'); ?>	<span class="text-dark-orange block"><?php echo get_sub_field('orange_title'); ?></span> 
                    </h2>
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
                                <h2 class="text-sm font-medium text-white pb-5">Technologies</h2>
                                <div class=" block">
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
                    <span class="inline-block p-[10px] w-[50px] cursor-pointer rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle" id="prev-slide">
                        &gt;
                    </span>
                </div>
				

            </div>
        </section>
	<?php endif; ?> 	
	
    <?php if (get_row_layout() == 'box_section') : ?>	
        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="block">
				<?php if(get_sub_field('small_title')): ?>
                    <div class="text-center small-intro"><?php echo get_sub_field('small_title'); ?></div>
				<?php endif; ?>	
				<?php if(get_sub_field('main_title')): ?>	
                    <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[60px]">
                        <?php echo get_sub_field('main_title'); ?>
                    </h2>
				<?php endif; ?>
				
				<?php if(get_sub_field('paragraph')): ?>	
                    <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 mb-10"><?php echo get_sub_field('paragraph'); ?></p>
                <?php endif; ?>
				</div>
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-3 lg:gap-6">
				
				<?php if(have_rows('box_pattern')): ?>
				<?php while(have_rows('box_pattern')): the_row(); ?>
				<?php 
				  $heading = get_sub_field('heading'); 
				  $paragraph = get_sub_field('paragraph'); 
				  $box_color = get_sub_field('box_color'); 
				  $gap_class = get_sub_field('gap_class'); 
				?>
				
                    <div class="grid-item col-span-12 lg:<?php echo $box_color;?> p-7 rounded-[16px] min-h-[220px]" >
                        <div class="grid grid-cols-1 lg:grid-cols-12 <?php echo $gap_class;?> h-[100%] relative">
                            <div class="grid-item col-span-8">
                                <h5 class=" text-white text-[24px] font-semibold mb-4 leading-[30px]"><?php echo $heading;?></h5>
                                <p class=" text-white text-[16px] font-normal"><?php echo $paragraph;?></p>
                            </div>
                            <div class="grid-item col-span-4 relative">
							<?php $image_user = get_sub_field('image');
								if (!empty($image_user) && isset($image_user['url'])):
							?>
                                <img class=" relative md:absolute right-0 bottom-[-1.8rem] max-h-[200px] w-auto" src="<?php echo esc_url($image_user['url']); ?>">
							<?php endif; ?> 	
                            </div>
                        </div>
                    </div>
				<?php endwhile; ?>	
				<?php endif; ?>
                    

                </div>
				<?php if(get_sub_field('button_name')): ?>
                <div class="block text-center mt-12">
                    <a href="<?php echo get_sub_field('button_url'); ?>" class="button inline-block align-middle button-small rounded-[30px] px-8 py-4 border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange "><?php echo get_sub_field('button_name'); ?></a>
                </div>
				<?php endif; ?>
            </div>
        </section>
	<?php endif; ?> 

	<?php if (get_row_layout() == 'price_section') : ?>
	<section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="block">
				<?php if(get_sub_field('small_title')): ?>
                    <div class="text-center small-intro"><?php echo get_sub_field('small_title'); ?></div>
				<?php endif; ?> 
				
				<?php if(get_sub_field('main_heading')): ?>	
                    <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[60px]">
                        <?php echo get_sub_field('main_heading'); ?><br><span class="text-dark-orange"><?php echo get_sub_field('orange_heading'); ?></span>
                    </h2>
				<?php endif; ?> 
				
				<?php if(get_sub_field('paragraph')): ?>	
                    <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 mb-10"><?php echo get_sub_field('paragraph'); ?></p>
				<?php endif; ?> 	
                </div>

                <div class="block footer-background border border-[#3c1201] p-[30px] lg:p-[70px]">
                    <div class="grid grid-cols-1 lg:grid-cols-2 content-center gap-3 relative z-10 bg-white rounded-[25px] mx-auto max-w-[450px] p-8">
                            <!-- <img class=" absolute right-[-30px] top-[-30px] max-h-[80px] w-auto" src="<?php echo get_template_directory_uri();?>/images/price-img.png"> -->
                            <div class="grid-item col-span-2 relative content-center">
                                <?php if(get_sub_field('price')): ?>
                                    <h5 class="text-center font-extrabold text-[100px] text-dark-orange leading-[100px]"><?php echo get_sub_field('price'); ?></h5>
                                <?php endif; ?> 
                                
                                <?php if(get_sub_field('tagline')): ?>	
                                    <p class="text-center text-black font-bold text-[20px] md:text-[25px]"><?php echo get_sub_field('tagline'); ?></p>
                                <?php endif; ?> 
                                
                                <?php if(get_sub_field('extra_text')): ?>	
                                    <p class="text-center font-semibold text-[18px] text-black"><?php echo get_sub_field('extra_text'); ?></p>
                                <?php endif; ?> 	
                            </div>
                            <!-- <div class="grid-item col-span-1 content-center">
                                <div class="grid grid-cols-1">
                                
                                <?php if(have_rows('timing_section')): ?>
                                <?php while(have_rows('timing_section')): the_row(); ?>
                                <?php 
                                $heading = get_sub_field('heading'); 
                                $paragraph = get_sub_field('paragraph'); 
                                $box_color = get_sub_field('box_color'); 
                                $gap_class = get_sub_field('gap_class'); 
                                ?>
                                    <div class="grid-item col-span-1 relative pl-[80px] mb-8">
                                        <div class="absolute w-[60px] h-[60px] rounded-[50%] left-0 top-[calc(50%-30px)] overflow-hidden text-center">
                                        <?php $image_user = get_sub_field('icon');
                                            if (!empty($image_user) && isset($image_user['url'])):
                                        ?>
                                            <img class="w-[100%] inline-block" src="<?php echo esc_url($image_user['url']); ?>" alt="">
                                        <?php endif; ?> 		
                                        </div>
                                        <h6 class="font-semibold text-[25px] text-white"><?php echo $heading;?></h6>
                                        <p class="text-white text-[16px]"><?php echo $paragraph;?></p>
                                    </div>
                                <?php endwhile; ?>	
                                <?php endif; ?>	
                                    
                                </div>
                            </div> -->
                    </div>

                    <?php if(get_sub_field('button_name')): ?>
                        <div class="block text-center mt-10">
                            <a href="<?php echo get_sub_field('button_url'); ?>" class="button inline-block align-middle button-small rounded-[30px] px-12 py-4 border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange "><?php echo get_sub_field('button_name'); ?></a>
                        </div>
                    <?php endif; ?>	
                </div>

                
               
				
            </div>
    </section>
	<?php endif; ?> 
	
	
	<?php if (get_row_layout() == 'testimonial_section') : ?>
	<div class="my-0 mx-auto flex flex-col justify-center testimonial-section items-center py-16">
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
		<div class="w-full flex relative min-h-[520px] md:min-h-[620px] pr-3 lg:pr-0 pt-5 lg:pt-16 pb-2 md:pb-16 overflow-hidden">
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

		
	
	<?php if (get_row_layout() == 'simple_step_section') : ?> 
        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
			
			<div class="block">
			<?php if(get_sub_field('top_heading')): ?>
				<div class="text-center small-intro"><?php echo get_sub_field('top_heading'); ?></div>
			<?php endif; ?>
			
			<?php if(get_sub_field('main_heading')): ?>	
				<h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-10 text-white  lg:leading-[60px]">
					<?php echo get_sub_field('main_heading'); ?><br><span class="text-dark-orange"><?php echo get_sub_field('orange_heading'); ?></span>
				</h2>
			<?php endif; ?>	
			</div>
			
			
			<div class=" block footer-background border border-[#3c1201] p-[30px] lg:p-[70px]">
				<div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-14 mb-4">
				<?php if(have_rows('step_section')): ?>
				<?php while(have_rows('step_section')): the_row(); ?>
				<?php 
				  $heading = get_sub_field('heading'); 
				  $paragraph = get_sub_field('paragraph'); 
				?>
					<div class="grid-item col-span-12 lg:col-span-4 mb-10 lg:mb-0 content-center text-center">
						<div class="block mb-5">
							<span class="inline-block w-[60px] h-[60px] rounded-[10px] p-2 text-center">
							<?php $icon_user = get_sub_field('image');
							  if (!empty($icon_user) && isset($icon_user['url'])):
							?>
								<img class="w-[100%]" src="<?php echo esc_url($icon_user['url']); ?>" alt="">
							<?php endif; ?> 	
							</span>
						</div>
						<h6 class=" text-white text-[25px] font-semibold mb-3"><?php echo $heading;?></h6>
						<p class=" text-white text-[16px]"><?php echo $paragraph;?></p>
					</div>
				<?php endwhile; ?>	
				<?php endif; ?>	

                <?php if(get_sub_field('button_name')): ?>
                <div class="grid-item col-span-12 block text-center">
                    <a href="<?php echo get_sub_field('button_url'); ?>" class="button inline-block align-middle button-small rounded-[30px] px-12 py-4 border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange "><?php echo get_sub_field('button_name'); ?></a>
                </div>
                <?php endif; ?>	
					
				</div>
            </div>
			
            </div>
        </section>
		
		<?php endif; ?> 
	
		<?php if (get_row_layout() == 'review_section') : ?> 
		<section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="block">
				<?php if(get_sub_field('top_title')): ?>
                    <div class="text-center small-intro"><?php echo get_sub_field('top_title'); ?></div>
				<?php endif; ?>	
				
				<?php if(get_sub_field('first_title')): ?>
                    <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[60px]">
                       <span class="inline-block align-middle"><?php echo get_sub_field('first_title'); ?></span> 
					   
					  <?php $title_image = get_sub_field('title_image');
						if (!empty($title_image) && isset($title_image['url'])):
					  ?> 
					   <img class="h-[60px] w-auto inline-block align-middle" src="<?php echo esc_url($title_image['url']); ?>" alt="<?php echo esc_url($title_image['alt']); ?>">
					  <?php endif; ?>  
					   <span class="inline-block align-middle"><?php echo get_sub_field('second_title'); ?></span>
                    </h2>
				<?php endif; ?>	
				<?php if(get_sub_field('description')): ?>	
                    <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 mb-10"><?php echo get_sub_field('description'); ?></p>
                <?php endif; ?>
				</div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-10">
				
				<?php if(have_rows('review_box')): ?>
				<?php while(have_rows('review_box')): the_row(); ?>
				<?php 
					$name = get_sub_field('name'); 
					$description = get_sub_field('description'); 
				?>
                    <div class="trustpilot-bg">
                        <div class="flex">	
                            <div>
                                <?php if (!empty($name)): ?>
                                    <p class="font-bold text-base text-white"> <?php echo $name;?> </p>
                                <?php endif; ?>
								<div class="text-sm pilot-descri"> <?php echo $description;?> </div>
                                <?php $auth_image = get_sub_field('image');
                                    if (!empty($auth_image) && isset($auth_image['url'])):
                                ?>
                                    <div class="pr-4 mt-3">
                                        <img class="h-[20px] w-[110px]" src="<?php echo esc_url($auth_image['url']); ?>" alt="<?php echo esc_url($auth_image['alt']); ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>	
				<?php endif; ?>    
                   
                </div>
            </div>
        </section>
		<?php endif; ?>
		
		<?php if (get_row_layout() == 'cta_section') : ?>
		
		<section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-24">
                <div class=" block relative rounded-[24px] vetting-bg">
                    <img class="absolute h-[100%] w-[50%] right-[0px] top-[0px] z-1" src="<?php echo get_template_directory_uri();?>/images/bg-line-box.png">
                    <div class="grid grid-cols-1 lg:grid-cols-12 content-center gap-4 relative z-10 h-[100%]">
                        <div class="grid-item col-span-1 lg:col-span-5 content-center min-h-[500px] py-[32px] px-[5%]">
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
                            <div class="absolute right-0 top-[-115px] w-[100%] min-h-[500px] overflow-hidden rounded-[24px]">
							    <?php echo get_sub_field('calender'); ?>
							</div>
						<?php endif; ?>	
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<?php endif; ?> 
		<?php endwhile; ?>
		<?php endif; ?>
    </div>
</div>


<?php get_footer();?>