<?php
/**
 * Template Name: Hire Developer
 *
 * @package sws
 */

 get_header();
?>

<div class=" w-full relative">
  	<img class="bg-img absolute w-[150%] max-w-[initial] opacity-[0.6] left-[-20%] z-0 top-[-12%]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
  	<div class=" w-full relative z-10">

		<?php if (have_rows('section_block')) : ?>
			<?php while (have_rows('section_block')) : the_row(); ?>
			<?php if (get_row_layout() == 'first_section') : ?>
				<section class="flex flex-col items-center justify-center py-16">
					<div class="flex flex-col items-center justify-center mb-20">
					<?php if(get_sub_field('main_title')): ?>    
						<h1 class="font-medium text-center text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[74px]">
							<?php echo get_sub_field('main_title'); ?><br>
							<span class="text-dark-orange"><?php echo get_sub_field('orange_title'); ?></span>
					</h1> 
					<?php endif; ?> 

					<?php if(get_sub_field('small_paragraph')): ?>      
						<p class="text-white text-xl font-normal text-center py-6 mb-10 px-0 "> <?php echo get_sub_field('small_paragraph'); ?> </p>
					<?php endif; ?> 

					<?php if(get_sub_field('button_name')): ?> 
					<?php $bb_url =  get_sub_field('button_url'); ?>
					<div class="header-buttons mb-20">
						<a href="<?php echo esc_url( $bb_url ); ?>" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange"><?php echo get_sub_field('button_name'); ?></a>
					</div>
					<?php endif; ?> 
					
					<?php $mainimg = get_sub_field('main_image');
						if (!empty($mainimg) && isset($mainimg['url'])):
					?>
					<img src="<?php echo esc_url($mainimg['url']); ?>">
					<?php endif; ?>
					</div>

				</section>   
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<!-- Explore Section -->
		
		<section class=" w-full py-16">
			<div class="mx-auto w-[100%] max-w-[1280px]">
					<h3 class="text-center small-intro">Explore</h3>
					<div class="flex flex-col items-center justify-center">
						<h5 class="text-[35px] text-center  lg:text-[56px] mb-4 text-white">Need top notch developers?</h5> 
						<span class="text-dark-orange  text-[35px] text-center  lg:text-[56px]">You are in the right place.</span> 
						<h3 class="text-white text-xl font-normal text-center py-6 mb-10 px-0 lg:max-w-[60%] "> 
							With Smart Working, find pre-vetted remote software developers proficient in all programming languages, framework, and technologies. Check out our popular remote developer specializing below.
						</h3>
					</div>


					<div class="grid grid-cols-1 md:grid-cols-1 gap-4 my-8  md:mb-3 assemble-section-bg rounded-3xl relative">
					<img class=" w-[100%] max-w-[320px] absolute right-[-12%] top-[-30%]" src="<?php echo get_template_directory_uri();?>/images/squr-roted.png">
					<div class="bg-white py-4 md:py-10 px-4 md:px-10 rounded-xl relative z-10">
						<h3 class="text-dark-black text-xl font-bold text-center pb-10"> Find and hire software engineers by skills </h3>
						

						<div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center pr-5">
						
							

							<?php 
								$hire_args = array( 'post_type' => 'hire');
								$hire_query	= new WP_Query($hire_args);
								
							?>
							<?php while ($hire_query->have_posts()) : $hire_query->the_post();?>
							<?php 
								$hire_image_id = get_post_thumbnail_id();
								$hire_image_src = wp_get_attachment_image_src($hire_image_id, 'full');
								$permalink = get_permalink();
								$modified_permalink = rtrim($permalink, '/') . '-developer/';
							?>
							
								<a href="<?php echo get_permalink(); ?>">
									<div class="flex flex-col md:flex-row items-center min-h-[55px] content-center  py-2 px-2 rounded-lg skill-border cursor-pointer">
										<div class="w-full flex justify-center md:justify-end md:w-auto">
											<img src="<?php echo esc_url($hire_image_src[0]) ;?>">
										</div>
										<div class="w-full flex justify-center md:justify-start md:w-auto pl-2">
											<h4 class="text-xs font-bold text-dark-black"> <?php the_title();?> </h4>
										</div>
									</div>
								</a>
							<?php endwhile; wp_reset_postdata();?>
						</div>
						
					</div>
					<div class="header-buttons my-5 text-center">
								<a href="/contact-us/" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange">Hire Developers</a>
						</div>
					</div>	
			</div>	

		</section>   


		<!-- Smart Working Section -->
		<?php if (have_rows('section_block')) : ?>
			<?php while (have_rows('section_block')) : the_row(); ?>
			<?php if (get_row_layout() == 'second_section') : ?>
			<div class="w-full relative grid items-center pb-32">
				<div class="mx-auto w-[100%] max-w-[1280px] md:px-0 px-10">
					<?php if(get_sub_field('small_title')): ?>	
						<h3 class="text-center small-intro"> <?php echo get_sub_field('small_title'); ?> </h3>
					<?php endif; ?>

					<?php if(get_sub_field('main_title')): ?>
						<h5 class=" text-2xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium flex flex-col text-center px-0 md:leading-tight"> <span class="text-white"><?php echo get_sub_field('main_title'); ?></span><span class="text-dark-orange"><?php echo get_sub_field('orange_title'); ?></span> </h5>
					<?php endif; ?>
					<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-28">

					<?php if(have_rows('box_section')): ?>
						<?php while(have_rows('box_section')): the_row(); ?>
						<?php 
							$title_name = get_sub_field('title'); 
							$subtitle_name = get_sub_field('small_text'); 
						?>    


						<div class="europe-box rounded-3xl mb-5">
							<div class="flex">
								<div class="px-6 py-6">
									<img src="<?php echo get_sub_field('icon')['url']; ?>"  class="mb-12">
									<div class="mt-12">
										<h3 class="text-white text-xl font-bold leading-tight mb-3"> <?php echo $title_name;?> </h3>
										<span class="text-white text-base"> <?php echo $subtitle_name;?> </span>
									</div>
								</div>

							</div>
						</div>

							<?php endwhile; ?>	
						<?php endif; ?> 

						
					</div>
				</div>
			</div>
			<?php endif; ?>

		<?php if (get_row_layout() == 'expect_section') : ?>
		<section class="smart-hire py-[4rem]">
			<div class="mx-auto w-[100%] max-w-[1280px]">

				
				<div class="grid grid-cols-1 lg:grid-cols-10 content-center mb-[6rem] relative">
					<div class=" w-[100%] max-w-[320px] absolute left-[-12%] top-[-6%]">
						<svg width="100%" height="auto" viewBox="0 0 480 480" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path id="motionPath" fill="none" stroke="#504F4F" stroke-miterlimit="20" d="
								M 174, 174
								m -20, 65
								a 87,87 0 0,0 174,0
								a 87,87 0 0,0 -174,0
								"/>
							<path id="motionPath2" fill="none" stroke="#504F4F" stroke-miterlimit="20" d="
								M 244, 244
								m -126, -6
								a 122,122 0 1,0 244,0
								a 122,122 0 1,0 -244,0
								"/>  
								
							<path id="motionPath3" fill="none" stroke="#504F4F" stroke-miterlimit="20" d="
								M 440, 440
								m -420, -200
								a 220,220 0 1,0 440,0
								a 220,220 0 1,0 -440,0
								"/>

							<circle cx="" cy="" r="8" fill="#504F4F">
								<animateMotion dur="2.8s" repeatCount="indefinite">
								<mpath xlink:href="#motionPath"></mpath>
								</animateMotion>
							</circle>
							<circle cx="" cy="" r="8" fill="#504F4F">
								<animateMotion dur="3s" repeatCount="indefinite">
								<mpath xlink:href="#motionPath2"></mpath>
								</animateMotion>
							</circle>
							<circle cx="" cy="" r="8" fill="#504F4F">
								<animateMotion dur="3s" repeatCount="indefinite">
								<mpath xlink:href="#motionPath3"></mpath>
								</animateMotion>
							</circle>
						</svg>
					</div>
					<?php $hire_dev_main_img = get_sub_field('left_side_image');
						if (!empty($hire_dev_main_img) && isset($hire_dev_main_img['url'])):
					?>
					<div class="grid-item col-span-5 relative">
						<img class=" w-[100%] max-w-[100%] rounded-[20px]" src="<?php echo esc_url($hire_dev_main_img['url']); ?>" alt="<?php echo esc_attr($hire_dev_main_img['alt']); ?>">
					</div>
					<?php endif; ?>
					<div class="grid-item col-span-5 relative lg:pl-[40px]">
					<?php if(get_sub_field('heading')): ?>
						<h5 class="text-[25px] font-bold lg:text-[48px] mb-4 text-white"><?php echo get_sub_field('heading'); ?></h5>
					<?php endif; ?>	
					
					<?php if(have_rows('list_part')): ?>
					<?php while(have_rows('list_part')): the_row(); ?>
						<div class=" border-l-[5px] border-[rgba(239,80,12,0.30)] pl-4 mb-[40px]">
							<p class="text-[22px] font-semibold lg:text-[24px] mb-4 text-white"><?php echo get_sub_field('heading'); ?></p>
							<p class="text-[18px] lg:text-[18px] mb-4 text-white"> <?php echo get_sub_field('paragraph'); ?> </p>
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


		<!-- Curios Section  -->
		<?php if (have_rows('block')) : ?>
		<?php while (have_rows('block')) : the_row(); ?>
		<?php if (get_row_layout() == 'curious_section') : ?>

			<section class="calculator-box w-[100%] mt-[50px] lg:mb-[50px]">
				<div class="inner-box grid grid-cols-1 lg:grid-cols-10 content-center rounded-[60px] max-w-[90%] min-h-[350px] mx-auto px-[10%]">
						<div class="grid-item col-span-5 py-[10%] lg:py-[100px]">
							<div class="block mb-5">
									<?php if(get_sub_field('small_title')): ?>
										<span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem] " ><?php echo get_sub_field('small_title'); ?></span>
									
									<?php endif; ?>
								
							</div>
							<?php if(get_sub_field('main_heading')): ?>	
								<h5 class="text-[26px] lg:text-[36px] text-[#ffff] lg:leading-[30px] font-medium mb-4"><?php echo get_sub_field('main_heading'); ?></h5>
							<?php endif; ?>
							<p class="text-white text-[15px] mb-[30px] lg:text-[24px] font-medium"><?php echo get_sub_field('subheading'); ?></p>
							<?php if(get_sub_field('button_name')): ?>
								<?php $calc_url =  get_sub_field('button_url'); ?>
								<p>
									<a href="<?php echo esc_url( $calc_url ); ?>" class="w-[100%] max-w-[300px] text-center button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange"><?php echo get_sub_field('button_name'); ?></a>
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
													<span id="price-value" class="text-[24px] font-[500] text-black">$ </span>
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

		<?php get_template_part( 'template-parts/client-testimonial' );?>

		<?php endwhile; ?>
		<?php endif; ?>


		<?php get_template_part( 'template-parts/assemble-team' );?>
		<?php get_template_part( 'template-parts/home-blog' );?>

		<!-- FAQ Section  -->
		<?php if (have_rows('section_block')) : ?>
		<?php while (have_rows('section_block')) : the_row(); ?>
		<?php if (get_row_layout() == 'faq_section') : ?>
		<div class="w-full relative grid items-center z-10 lg:pt-[100px]">
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
        <?php endwhile; ?>
		<?php endif; ?>

		<!-- Ready To Hire  -->
		<?php if (have_rows('block')) : ?>
		<?php while (have_rows('block')) : the_row(); ?>
			<?php if (get_row_layout() == 'hire_developer_section') : ?>
				<div class="w-full relative grid items-center set-margin">
					<div class="container mx-auto md:px-0 px-10 ready-hire-bg">
						<div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-10">
							
								<div class="pl-7 pr-7 md:pl-48 md:pr-12 justify-self-center self-center">
								<?php if(get_sub_field('main_title')): ?>
								<h5 class="text-left text-white text-3xl md:text-5xl lg:text-[72px] 3xl:text-58 font-medium  bg-title-text  md:leading-tight mb-9"><?php echo get_sub_field('main_title'); ?></h5>
								<?php endif; ?>	

								<?php if(get_sub_field('subheading')): ?>	
								<span class="text-center md:text-left text-white text-base"> <?php echo get_sub_field('subheading'); ?> </span>
								<?php endif; ?> 

								<?php if(get_sub_field('button_name')): ?>
								<?php $hire_dev_btn_url =  get_sub_field('button_url'); ?>
									<div class="header-buttons mt-16 mb-10 text-center md:text-left">
										<a href="<?php echo esc_url( $hire_dev_btn_url ); ?>" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] text-dark-orange text-lg bg-white hover:bg-black hover:text-white"><?php echo get_sub_field('button_name'); ?></a>
									</div>
								<?php endif; ?>	
								</div>
								<?php $hire_dev_main_img = get_sub_field('background_image');
								if (!empty($hire_dev_main_img) && isset($hire_dev_main_img['url'])):
								?>
									<div class="px-6 py-10 flex justify-self-center">
										<img src="<?php echo esc_url($hire_dev_main_img['url']); ?>" alt="<?php echo esc_attr($hire_dev_main_img['alt']); ?>" class="w-auto">
									</div>
								<?php endif; ?>
							
						</div>
					</div>
				</div>
			<?php endif; ?>		
			<?php endwhile; ?>
		<?php endif; ?>	
		
		
		
		<?php if (have_rows('section_block')) : ?>
 <?php while (have_rows('section_block')) : the_row(); ?>
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
                    <h3  class="text-[22px] lg:text-[24px] text-[#fff] font-medium"><?php echo get_sub_field('right_cta_heading'); ?></h3>
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

<?php get_footer();?>