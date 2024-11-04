<?php  get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if (have_rows('hire_block_section')) : ?>
<?php while (have_rows('hire_block_section')) : the_row(); ?>
<?php if (get_row_layout() == 'banner_section') : ?>
<div class=" w-full relative">
  	<img class="bg-img absolute w-[150%] max-w-[initial] opacity-[0.6] left-[-20%] z-0 top-[-12%]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
  	<div class=" w-full relative z-10">
<div class="w-full   md:flex py-16">
<div class="container mx-auto relative z-10">
<div class="grid lg:flex lg:justify-between gap-10 lg:gap-15 items-center relative">
  <div class="absolute top-[-30px] lg:top-0 left-0">
    <button class="flex items-center justify-center"><img class="mr-3" src="<?php echo get_template_directory_uri();?>/images/back_arrow.svg" alt="back" >
     <span class="text-white">Services</span></button>
  </div>
  <div class="w-full ">
    <div class="grid gap-8 relative pr-5">

      <?php if(get_sub_field('main_title')): ?>
        <h1 class="font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[74px]"> <?php echo get_sub_field('main_title'); ?> &nbsp; <br> 
	  	<span class="text-dark-orange"> <?php echo get_sub_field('orange_title'); ?> </span> </h1>
      <?php endif; ?> 

      <?php if(get_sub_field('main_paragraph')): ?>
      <p class="flex text-white font-normal text-xl"><?php echo get_sub_field('main_paragraph'); ?></p>
      <?php endif; ?> 

      <div class="header-buttons mt-6">
	  <?php echo do_shortcode('[contact-form-7 id="75a4af4" title="Hire Developer Form"]');?>
        <!--<input type="email" placeholder="Enter email address" class="custom-input text-white focus:outline-none mr-3">
        <a href="https://smartworking.io/" class="button inline-block button-small rounded-md px-8 py-4 border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange ">Hire Now</a>  -->
      </div>
      
    </div>
  </div>
  <div class="w-full relative">
	<div class="w-[100%] landing-dev-box min-h-[450px] p-[30px] rounded-[30px] bg-white max-w-[330px] md:max-w-[450px] border-[10px] border-[#fff] lg:ml-auto">
	
	<?php if(have_rows('banner_right_box')): ?>
	<?php while(have_rows('banner_right_box')): the_row(); ?>
	<?php 
	  $heading_name = get_sub_field('heading_name'); 
	  $heading_value = get_sub_field('heading_value'); 
	?>
	  <div class="w-[100%] py-[10px] pl-[65px] pr-[10px] relative mb-[20px]">
	  
		  <?php $main_image = get_sub_field('icon');
			if (!empty($main_image) && isset($main_image['url'])):
		  ?>
			  <div class="w-[52px] h-[52px] absolute left-0 top-[10px] rounded-[50%] text-center bg-[#FF4D02] overflow-hidden pt-[0px]">
				<img  src="<?php echo esc_url($main_image['url']); ?>" alt="">
			  </div>
		  <?php endif; ?>
		  <?php if($heading_name): ?>
		  <span class="block text-[12px] md:text-[16px] text-[#08111F] "><?php echo $heading_name;?></span>
		  <?php endif; ?>
		  
		  <?php if($heading_value): ?>
		  <span class="block text-[18px] md:text-[24px] text-[#08111F] font-[700]"><?php echo $heading_value;?></span>
		  <?php endif; ?>
	  </div>
	<?php endwhile; ?>	
	<?php endif; ?>  
	</div>
  </div>
</div>
</div>
</div>
<?php endif; ?>



<!-- Vetted Profile Section -->

<?php if (get_row_layout() == 'vetted_profile') : ?>
<section class="flex flex-col items-center justify-center py-16">
	<?php if(get_sub_field('top_title')): ?>
		<h3 class="text-center small-intro"><?php echo get_sub_field('top_title'); ?></h3>
	<?php endif; ?> 
	
    <div class="flex flex-col items-center justify-center">
	<?php if(get_sub_field('main_title')): ?>
		<h5 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[74px]">
			<?php echo get_sub_field('main_title'); ?>
			<span class="text-dark-orange block"><?php echo get_sub_field('orange_title'); ?></span> 
		</h5> 
      
	  <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 mb-10"> No hidden costs, timezone aligned and able to hire in one week. </p>
	<?php endif; ?>  
    </div>
	<div class="container mx-auto p-4">
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
                    <span class="inline-block p-[10px] w-[50px] cursor-pointer rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle mr-3"  id="next-slide">
                        &lt;
                    </span>
                    <span class="inline-block p-[10px] w-[50px] cursor-pointer rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle" id="prev-slide">
                        &gt;
                    </span>
                </div>
    </div>	
		
		
</section>
<?php endif; ?> 


<!-- Top Section -->

<?php if (get_row_layout() == 'top_find_section') : ?>
<section class="w-full relative py-16">
<div class="container mx-auto max-w-[1280px]">
<?php if(get_sub_field('top_title')): ?>  
  <h3 class="text-center small-intro"><?php echo get_sub_field('top_title'); ?></h3>
<?php endif; ?>
      <div class="flex flex-col items-center justify-center">
        <?php if(get_sub_field('main_title')): ?> 
          <h5 class="text-4xl font-medium text-center text-[35px] md:text-[56px] mb-4 text-white lg:leading-[74px]">
			<?php echo get_sub_field('main_title'); ?>
			<span class="text-dark-orange block"><?php echo get_sub_field('orange_title'); ?></span> 
		</h5> 
          
        <?php endif; ?>  
		<?php if(get_sub_field('small_paragraph')): ?> 
        <p class="mb-12 text-[13px] md:text-lg w-max gradient-paragraph rounded-full p-3 text-white"><?php echo get_sub_field('small_paragraph'); ?></p>
      <?php endif; ?>  
      </div>

       
        <div class="grid grid-cols-1 lg:grid-cols-9 gap-6 relative">
		<?php if(have_rows('step_section')): ?>
		<?php while(have_rows('step_section')): the_row(); ?>
		<?php 
		  $step_title = get_sub_field('step_title'); 
		  $title = get_sub_field('title'); 
          $position = get_sub_field('position'); 
		?>  
             <div class="grid-item col-span-3 pt-[50px] relative" style="margin-top:<?php echo $position;?>">
               <h2 class="text-[44px] absolute z-0 top-0 left-0 gradient-text-dev-landing"><?php echo $step_title;?></h2>
               <div class="min-w-[100%] md:min-w-[405px] p-[24px] relative z-10 dev-gradient-bg min-h-[500px]">
               <img class="mb-3" src="<?php echo get_sub_field('icon')['url']; ?>" alt="" />
                   <h3 class="text-[24px] font-semibold mb-2 text-white"><?php echo $title;?></h3>
                  <p class="mb-4 text-[16px] text-white"><?php echo get_sub_field('small_paragraph'); ?></p>
                    <div class=" relative w-[100%] text-center left-0 bottom-[0px]">
                    	<img class="max-w-[100%] inline-block" src="<?php echo get_sub_field('image')['url']; ?>" alt="">
                   </div>
               </div>
			 </div>
        <?php endwhile; ?>	
        <?php endif; ?>  
        </div>

        <div class="min-w-[405px] h-[90px] w-[100%] text-center pt-[20px] mt-10">
           <a href="/contact-us/"> <button class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange ">Hire Now</button> </a>
        </div>
</div>		
</section>
<?php endif; ?>


<!-- Benefit Section -->
<?php if (get_row_layout() == 'benefit_section') : ?>
<section class="flex flex-col items-center justify-center py-16 w-full">
	<?php if(get_sub_field('top_title')): ?>
		<h3 class="text-center small-intro"><?php echo get_sub_field('top_title'); ?></h3>
	<?php endif; ?> 
      <div class="flex flex-col items-center justify-center">
	  <?php if(get_sub_field('main_title')): ?>
        <h5 class="font-medium text-[40px] md:text-[56px] mb-4 li text-center text-white lg:leading-[74px]">
			<?php echo get_sub_field('main_title'); ?>
			<span class="text-dark-orange font-medium block"><?php echo get_sub_field('orange_title'); ?></span> 
		</h5> 
        
		<?php endif; ?>   
      </div>
        
	  <div class="relative mb-16 md:mb-28 w-[100%] lg:mt-[50px]">
            <div class="grid grid-cols-1 relative justify-center content-center">
               <div class="solution_bg_bg-wrap w-[100%] max-w-[1280px] min-h-[650px]">
                  <img class="w-[100%] h-[100%] absolute top-0 z-[1] left-0 opacity-[0.2] " src="<?php echo get_template_directory_uri();?>/images/chip-bg.png" alt="" />
                  <img class="w-[380px] absolute top-[246px] z-[99] left-[calc(50%-160px)] " src="<?php echo get_template_directory_uri();?>/images/sw-logo.png" alt="" />
                  <div class="solution_path-img" style="mask-image: url('<?php echo get_template_directory_uri();?>/images/bg-line.png')">
                    <div class="solution_path-gradient"></div>
                  </div>
                  <img class="w-[80px] absolute top-0 z-[99] left-[20px]" src="<?php echo get_template_directory_uri();?>/images/you-1.png" alt="" />
                  <img class="w-[134px] absolute top-[30px] z-[99] right-[20px]" src="<?php echo get_template_directory_uri();?>/images/top-1.png" alt="" />
               </div>
             </div>
        </div>
		
		<div class="container mx-auto md:px-0 px-10">
		<div class="grid grid-cols-1 md:grid-cols-10 gap-6 justify-center relative">
			<?php if(get_sub_field('big_box_title')): ?>
				<div class="grid-item col-span-10">
					<div class="flex flex-col justify-center items-center text-center align-middle relative orangepart px-3 py-7 md:px-12 md:py-12">
					  <img class="mb-3 w-28" src="<?php echo get_sub_field('big_box_image')['url']; ?>" alt="" />
					  <h2 class="text-2xl text-white font-bold mb-4 text-center"><?php echo get_sub_field('big_box_title'); ?></h2>
					</div>
				</div>
			<?php endif; ?>
			
			<?php if(have_rows('box_section')): ?>
			<?php while(have_rows('box_section')): the_row(); ?>
			<?php 
			  $title = get_sub_field('title'); 
			  $paragraph = get_sub_field('paragraph'); 
			  $background_name = get_sub_field('background_name'); 
			?>
				<div class="grid-item col-span-10 md:col-span-5">
					<div class="flex flex-col rounded-[12px] justify-center relative <?php echo $background_name;?> px-10 py-5">
					  <div class="grid items-center grid-cols-9 gap-0">
						  <div class="col-span-2 md:col-span-1"> 
							<img class="mb-3" src="<?php echo get_sub_field('icon')['url']; ?>" alt="" /> 
						  </div>
						  <div class="col-span-7 md:col-span-8 pl-2">
							<h4 class="text-2xl text-white font-bold mb-2"><?php echo $title;?></h4>
							<h5 class="text-sm text-white font-normal"><?php echo $paragraph;?></h5>
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


 <!-- Calculate Section -->
<?php if (get_row_layout() == 'why_smartworking_section') : ?>
<?php if(get_sub_field('main_heading')): ?>
 <div class="mx-auto text-center pt-10">
	<h5 class="text-white text-[25px] lg:text-[56px] font-medium mb-0"><?php echo get_sub_field('main_heading'); ?></h5>
</div>
<?php endif; ?>
<div class="w-full relative calculate-sec grid items-center py-16" style="background-image: url('<?php echo get_template_directory_uri();?>/images/calc-bg.png');">
    <div class="container mx-auto md:px-0 px-10 min-h-[300px]">
      <div class="block mt-5 w-[100%] min-h-[300px] p-3 lg:p-[120px] calc-sec-bg">
          <div class="grid grid-cols-1 lg:grid-cols-10 gap-5 content-center">
              <div class="grid-item col-span-6 content-center">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 content-center">
                  <div class="flex flex-row">
                      <div class="pr-3">
                        <div class=" w-[40px] rounded-[50%] h-[40px] border border-[#FF4D02] bg-black text-center text-white text-[20px] pt-1">
						 <img class=" w-[35px] h-[22px] pt-1.5" src="<?php echo get_sub_field('box_image_1')['url']; ?>">
						</div>
                      </div>
                      <div>
					  <?php if(get_sub_field('box_heading_1')): ?>
                        <h3 class=" text-white text-[18px] font-medium"><?php echo get_sub_field('box_heading_1'); ?></h3>
					  <?php endif; ?>	
					  
					  <?php if(get_sub_field('box_paragraph_1')): ?>
                        <p class=" text-white text-[16px] font-medium "><?php echo get_sub_field('box_paragraph_1'); ?></p>
					  <?php endif; ?>	
                      </div>
                  </div>
                  <div class="flex flex-row">
                      <div class="pr-3">
                        <div class=" w-[40px] rounded-[50%] h-[40px] border border-[#FF4D02] bg-black text-center text-white text-[20px] pt-1">
						  <img class=" w-[35px] h-[22px] pt-1.5" src="<?php echo get_sub_field('box_image_2')['url']; ?>">
						</div>
                      </div>
                      <div>
					  <?php if(get_sub_field('box_heading_2')): ?>
                        <h3 class=" text-white text-[18px] font-medium"><?php echo get_sub_field('box_heading_2'); ?></h3>
					  <?php endif; ?>
					  
					  <?php if(get_sub_field('box_paragraph_2')): ?>	
                        <p class=" text-white text-[16px] font-medium "><?php echo get_sub_field('box_paragraph_2'); ?></p>
					  <?php endif; ?>	
                      </div>
                  </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mt-[60px] content-center">
                  <div class="flex flex-row">
                      <div class="pr-3">
                        <div class=" w-[40px] rounded-[50%] h-[40px] border border-[#FF4D02] bg-black text-center text-white text-[20px] pt-1">
						 <img class=" w-[35px] h-[22px] pt-1.5" src="<?php echo get_sub_field('box_image_3')['url']; ?>">
						</div>
                      </div>
                      <div>
					  <?php if(get_sub_field('box_heading_3')): ?>
                        <h3 class=" text-white text-[18px] font-medium"><?php echo get_sub_field('box_heading_3'); ?></h3>
					  <?php endif; ?>	
						
					  <?php if(get_sub_field('box_paragraph_3')): ?>	
                        <p class=" text-white text-[16px] font-medium "><?php echo get_sub_field('box_paragraph_3'); ?></p>
					  <?php endif; ?>	
                      </div>
                  </div>
                  <div class="flex flex-row">
                      <div class="pr-3">
                          <div class=" w-[40px] rounded-[50%] h-[40px] border border-[#FF4D02] bg-black text-center text-white text-[20px] pt-1">
						    <img class=" w-[35px] h-[22px] pt-1.5" src="<?php echo get_sub_field('box_image_4')['url']; ?>">
						  </div>
                      </div>
                      <div>
					  <?php if(get_sub_field('box_heading_4')): ?>
                        <h3 class=" text-white text-[18px] font-medium"><?php echo get_sub_field('box_heading_4'); ?></h3>
					  <?php endif; ?>	
						
					  <?php if(get_sub_field('box_paragraph_4')): ?>	
                        <p class=" text-white text-[16px] font-medium "><?php echo get_sub_field('box_paragraph_4'); ?></p>
					  <?php endif; ?>	
                      </div>
                  </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-1 gap-5 content-center mt-[70px]">
                  <div>
                      <p class=" text-white text-center text-nowrap ">
                        Excellent
                        <svg class=" inline-block" xmlns="http://www.w3.org/2000/svg" width="142" height="25" viewBox="0 0 142 25" fill="none">
                          <g clip-path="url(#clip0_1696_1934)">
                            <path d="M22.1288 0.429688H2.12878C1.02421 0.429688 0.128784 1.32512 0.128784 2.42969V22.4297C0.128784 23.5343 1.02421 24.4297 2.12878 24.4297H22.1288C23.2334 24.4297 24.1288 23.5343 24.1288 22.4297V2.42969C24.1288 1.32512 23.2334 0.429688 22.1288 0.429688Z" fill="#00B67A"/>
                            <path d="M11.6288 3.42969L13.8714 10.3051H21.1288L15.2575 14.5543L17.5001 21.4297L11.6288 17.1805L5.75746 21.4297L8.0001 14.5543L2.12878 10.3051H9.38613L11.6288 3.42969Z" fill="white"/>
                            <path d="M51.1288 0.429688H31.1288C30.0242 0.429688 29.1288 1.32512 29.1288 2.42969V22.4297C29.1288 23.5343 30.0242 24.4297 31.1288 24.4297H51.1288C52.2334 24.4297 53.1288 23.5343 53.1288 22.4297V2.42969C53.1288 1.32512 52.2334 0.429688 51.1288 0.429688Z" fill="#00B67A"/>
                            <path d="M41.6288 3.42969L43.8714 10.3051H51.1288L45.2575 14.5543L47.5001 21.4297L41.6288 17.1805L35.7575 21.4297L38.0001 14.5543L32.1288 10.3051H39.3862L41.6288 3.42969Z" fill="white"/>
                            <path d="M81.1288 0.429688H60.1288C59.0242 0.429688 58.1288 1.32512 58.1288 2.42969V22.4297C58.1288 23.5343 59.0242 24.4297 60.1288 24.4297H81.1288C82.2334 24.4297 83.1288 23.5343 83.1288 22.4297V2.42969C83.1288 1.32512 82.2334 0.429688 81.1288 0.429688Z" fill="#00B67A"/>
                            <path d="M70.6288 3.42969L72.8714 10.3051H80.1288L74.2575 14.5543L76.5001 21.4297L70.6288 17.1805L64.7575 21.4297L67.0001 14.5543L61.1288 10.3051H68.3862L70.6288 3.42969Z" fill="white"/>
                            <path d="M110.129 0.429688H90.1288C89.0242 0.429688 88.1288 1.32512 88.1288 2.42969V22.4297C88.1288 23.5343 89.0242 24.4297 90.1288 24.4297H110.129C111.233 24.4297 112.129 23.5343 112.129 22.4297V2.42969C112.129 1.32512 111.233 0.429688 110.129 0.429688Z" fill="#00B67A"/>
                            <path d="M100.629 3.42969L102.872 10.3051H110.129L104.258 14.5543L106.5 21.4297L100.629 17.1805L94.7575 21.4297L97.0001 14.5543L91.1288 10.3051H98.3862L100.629 3.42969Z" fill="white"/>
                            <path d="M139.129 0.429688H119.129C118.024 0.429688 117.129 1.32512 117.129 2.42969V22.4297C117.129 23.5343 118.024 24.4297 119.129 24.4297H139.129C140.233 24.4297 141.129 23.5343 141.129 22.4297V2.42969C141.129 1.32512 140.233 0.429688 139.129 0.429688Z" fill="#00B67A"/>
                            <path d="M129.629 3.42969L131.872 10.3051H139.129L133.258 14.5543L135.5 21.4297L129.629 17.1805L123.758 21.4297L126 14.5543L120.129 10.3051H127.386L129.629 3.42969Z" fill="white"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_1696_1934">
                              <rect width="141" height="24" fill="white" transform="translate(0.128784 0.429688)"/>
                            </clipPath>
                          </defs>
                        </svg>

                        <svg class=" inline-block" xmlns="http://www.w3.org/2000/svg" width="98" height="25" viewBox="0 0 98 25" fill="none">
                          <g clip-path="url(#clip0_1696_1946)">
                          <path d="M25.8105 8.93555H35.7056V10.7819H31.8151V21.1601H29.6755V10.7819H25.802V8.93555H25.8105ZM35.283 12.3085H37.1119V14.0165H37.1463C37.2127 13.7636 37.3279 13.5262 37.4853 13.3176C37.6541 13.0838 37.8545 12.8746 38.0808 12.6961C38.3165 12.5076 38.5779 12.3537 38.8571 12.239C39.1341 12.1273 39.4297 12.0688 39.7283 12.0667C39.9543 12.0667 40.1165 12.0752 40.2029 12.0842C40.2893 12.0932 40.3752 12.1102 40.4701 12.1187V13.9995C40.3323 13.9735 40.1939 13.9566 40.0475 13.9391C39.9073 13.9221 39.7662 13.9134 39.6249 13.9131C39.3039 13.913 38.9864 13.9806 38.6933 14.1114C38.4 14.2446 38.1405 14.4422 37.9339 14.6894C37.7042 14.971 37.5287 15.2928 37.4164 15.6385C37.282 16.0594 37.2178 16.4996 37.2266 16.9414V21.1511H35.2768V12.3085H35.283ZM49.4314 21.1596H47.5161V19.9262H47.4816C47.2361 20.3787 46.8646 20.7502 46.4121 20.9957C45.9726 21.2549 45.4731 21.3948 44.9629 21.4014C43.7985 21.4014 42.9527 21.1189 42.4352 20.5386C41.8632 19.7926 41.5868 18.8617 41.6589 17.9245V12.3085H43.6086V17.7324C43.5496 18.3181 43.7094 18.9049 44.0572 19.3799C44.2193 19.5448 44.4148 19.6732 44.6305 19.7565C44.8462 19.8398 45.0772 19.8761 45.3081 19.8629C45.6601 19.8758 46.0106 19.811 46.3347 19.6731C46.5944 19.5604 46.8225 19.3859 46.9991 19.1646C47.1768 18.9416 47.3035 18.6824 47.3703 18.4053C47.4491 18.0923 47.4871 17.7704 47.4833 17.4476V12.3147H49.4331L49.4314 21.1596ZM52.7529 18.3211C52.7586 18.5578 52.8202 18.7897 52.9326 18.9981C53.045 19.2065 53.2051 19.3853 53.3998 19.52C53.812 19.7563 54.2808 19.8757 54.7558 19.8652C54.9636 19.862 55.171 19.8477 55.3773 19.8222C55.6019 19.7963 55.8222 19.7412 56.0326 19.6584C56.2289 19.5846 56.4037 19.4631 56.5411 19.3047C56.6761 19.1337 56.7409 18.9178 56.7225 18.7008C56.7215 18.5851 56.6964 18.4709 56.6488 18.3654C56.6012 18.26 56.5322 18.1656 56.4462 18.0883C56.2555 17.917 56.0328 17.785 55.7908 17.7002C55.4923 17.5948 55.1867 17.5112 54.8761 17.4499C54.5309 17.3809 54.1857 17.303 53.832 17.2239C53.4761 17.1456 53.1247 17.0477 52.7795 16.9307C52.4553 16.8243 52.1502 16.6669 51.8755 16.4645C51.6059 16.2725 51.3868 16.0179 51.2371 15.7227C51.0638 15.375 50.9807 14.9894 50.9953 14.6012C50.9816 14.1712 51.1055 13.748 51.3489 13.3933C51.5828 13.0684 51.8865 12.8001 52.2377 12.6079C52.613 12.4059 53.0174 12.2633 53.4365 12.1853C53.852 12.1087 54.2734 12.0682 54.6959 12.0644C55.1371 12.064 55.577 12.1133 56.0072 12.2113C56.4097 12.2994 56.7926 12.4602 57.1372 12.6859C57.4738 12.905 57.7592 13.1941 57.9739 13.5334C58.2089 13.9155 58.3535 14.3462 58.3965 14.7927H56.3626C56.341 14.5959 56.2715 14.4072 56.1602 14.2434C56.0489 14.0795 55.8992 13.9454 55.7242 13.8526C55.3623 13.6849 54.9669 13.6022 54.5682 13.6108C54.4038 13.6111 54.2395 13.6227 54.0767 13.6453C53.8944 13.67 53.7151 13.7133 53.5416 13.7746C53.3822 13.8346 53.2379 13.9289 53.119 14.0509C53.0016 14.1804 52.9398 14.3509 52.9467 14.5255C52.9432 14.6344 52.9638 14.7426 53.0071 14.8425C53.0504 14.9425 53.1152 15.0316 53.197 15.1035C53.3886 15.265 53.6078 15.3907 53.8439 15.4747C54.1424 15.58 54.4481 15.6636 54.7586 15.725C55.1038 15.7939 55.4575 15.8719 55.8197 15.951C56.1733 16.0284 56.5185 16.1323 56.8637 16.2442C57.1921 16.3485 57.5011 16.506 57.7785 16.7103C58.0444 16.9058 58.265 17.1563 58.4254 17.4448C58.6007 17.7827 58.6868 18.1598 58.6757 18.5403C58.69 19.0121 58.564 19.4775 58.3135 19.8776C58.0743 20.2406 57.7557 20.5445 57.3818 20.7663C56.9851 20.9992 56.5542 21.1681 56.105 21.2669C55.6491 21.3692 55.1834 21.4213 54.7162 21.4223C54.1926 21.4283 53.6704 21.3644 53.1637 21.2324C52.7213 21.1187 52.3033 20.9258 51.9297 20.6629C51.5878 20.4096 51.3076 20.0822 51.1099 19.7053C50.9024 19.2806 50.7933 18.8146 50.7907 18.342H52.7518L52.7529 18.3211ZM59.1887 12.3079H60.6616V9.65252H62.6113V12.3079H64.3713V13.7656H62.6113V18.4934C62.6101 18.6721 62.6188 18.8507 62.6373 19.0284C62.6513 19.1619 62.6924 19.2911 62.7582 19.4081C62.8232 19.5155 62.9229 19.5976 63.0407 19.6409C63.2068 19.6992 63.3824 19.7255 63.5583 19.7183C63.6961 19.7183 63.8345 19.7183 63.9724 19.7098C64.112 19.7024 64.2506 19.6821 64.3865 19.6494V21.159C64.1707 21.185 63.9554 21.2019 63.7566 21.2279C63.5475 21.2526 63.3371 21.2641 63.1266 21.2624C62.7074 21.2734 62.2888 21.2239 61.8836 21.1155C61.6046 21.0402 61.3509 20.8914 61.1492 20.6844C60.9669 20.4855 60.8418 20.2412 60.787 19.977C60.7194 19.6564 60.6816 19.3301 60.674 19.0025V13.7831H59.1988V12.3085L59.1887 12.3079ZM65.7538 12.3079H67.6002V13.5068H67.6346C67.8809 13.0194 68.2855 12.6301 68.7821 12.4029C69.2831 12.175 69.8278 12.0594 70.3782 12.0639C71.0053 12.0478 71.6278 12.1747 72.1986 12.4351C72.7025 12.6661 73.1456 13.0116 73.4924 13.4441C73.8424 13.8906 74.103 14.4002 74.2602 14.9453C74.436 15.5389 74.5232 16.1551 74.519 16.7741C74.5209 17.3573 74.4425 17.9379 74.2862 18.4996C74.1436 19.0319 73.9069 19.5344 73.5873 19.9833C73.2753 20.413 72.8678 20.7644 72.3969 21.0098C71.8717 21.2792 71.2874 21.4127 70.6974 21.398C70.4109 21.3979 70.125 21.372 69.8431 21.3206C69.5612 21.2687 69.2862 21.1847 69.0234 21.0703C68.7619 20.9592 68.5177 20.8109 68.2985 20.6302C68.0808 20.453 67.8918 20.2434 67.738 20.0087H67.7036V24.4257H65.7538V12.3079ZM72.5692 16.7419C72.5696 16.3486 72.5174 15.957 72.4138 15.5775C72.3188 15.2191 72.1609 14.8803 71.9477 14.5769C71.7465 14.2901 71.4843 14.0515 71.1799 13.878C70.7 13.6282 70.1489 13.5501 69.6185 13.6568C69.088 13.7635 68.61 14.0485 68.264 14.4645C67.8197 15.1381 67.6019 15.936 67.6425 16.7419C67.6371 17.162 67.6923 17.5806 67.8064 17.9849C67.903 18.3423 68.0701 18.6768 68.2979 18.9686C68.5062 19.2384 68.7712 19.4593 69.0742 19.6155C69.4155 19.7801 69.7906 19.8627 70.1696 19.8567C70.5485 19.8508 70.9208 19.7563 71.2567 19.581C71.5587 19.4038 71.8179 19.1623 72.0161 18.8736C72.2199 18.5725 72.3661 18.2361 72.4472 17.8815C72.5267 17.507 72.5672 17.1253 72.5681 16.7425L72.5692 16.7419ZM76.0105 8.93555H77.9603V10.7819H76.0105V8.93555ZM76.0105 12.3085H77.9603V21.1596H76.0105V12.3085ZM79.7016 8.93555H81.6513V21.1596H79.7016V8.93555ZM87.6294 21.4014C86.9823 21.4115 86.3398 21.2912 85.7401 21.0477C85.2056 20.8312 84.7249 20.5005 84.3315 20.0788C83.9381 19.6571 83.6416 19.1546 83.4627 18.6064C83.2572 18.0008 83.1552 17.365 83.161 16.7256C83.1558 16.0915 83.2578 15.4612 83.4627 14.8611C83.6488 14.3148 83.9454 13.8127 84.3339 13.3859C84.7271 12.9659 85.2069 12.6362 85.7401 12.4198C86.9555 11.9482 88.3034 11.9482 89.5188 12.4198C90.0533 12.6363 90.534 12.967 90.9274 13.3887C91.3208 13.8104 91.6173 14.3129 91.7962 14.8611C92.0011 15.4612 92.1031 16.0915 92.0979 16.7256C92.1037 17.365 92.0017 18.0008 91.7962 18.6064C91.6101 19.1527 91.3135 19.6548 90.925 20.0816C90.5317 20.5017 90.0519 20.8313 89.5188 21.0477C88.9195 21.291 88.2773 21.4113 87.6306 21.4014H87.6294ZM87.6294 19.8573C88.0238 19.8654 88.4133 19.7701 88.7594 19.581C89.0711 19.4039 89.3392 19.1593 89.5442 18.8652C89.7529 18.5604 89.9075 18.2219 90.0013 17.8646C90.1967 17.1209 90.1967 16.3393 90.0013 15.5956C89.9129 15.2364 89.7579 14.8969 89.5442 14.595C89.3389 14.3034 89.0707 14.0616 88.7594 13.8876C88.4104 13.7063 88.0228 13.6117 87.6294 13.6117C87.2361 13.6117 86.8485 13.7063 86.4995 13.8876C86.1901 14.0643 85.9224 14.3055 85.7147 14.595C85.5044 14.8989 85.3497 15.2377 85.2576 15.5956C85.0622 16.3393 85.0622 17.1209 85.2576 17.8646C85.3477 18.2232 85.5026 18.5623 85.7147 18.8652C85.9197 19.1593 86.1878 19.4039 86.4995 19.581C86.8444 19.7742 87.2354 19.8697 87.6306 19.8573H87.6294ZM92.6674 12.3085H94.1426V9.65308H96.0923V12.3085H97.8523V13.7662H96.0923V18.494C96.0911 18.6727 96.0998 18.8513 96.1183 19.029C96.1323 19.1625 96.1734 19.2917 96.2392 19.4087C96.3043 19.5161 96.4039 19.5982 96.5217 19.6415C96.6878 19.6998 96.8634 19.726 97.0393 19.7189C97.1771 19.7189 97.3156 19.7189 97.4534 19.7104C97.593 19.7029 97.7316 19.6827 97.8675 19.6499V21.1596C97.6517 21.1856 97.4364 21.2025 97.2376 21.2285C97.0285 21.2531 96.8181 21.2646 96.6076 21.263C96.1884 21.274 95.7698 21.2245 95.3646 21.1161C95.0856 21.0408 94.8319 20.8919 94.6302 20.685C94.4479 20.4861 94.3228 20.2417 94.268 19.9776C94.2004 19.6569 94.1626 19.3307 94.155 19.003V13.7837H92.6798V12.3085H92.6674Z" fill="white"/>
                          <path d="M23.5332 8.93554H14.5957L11.8352 0.429688L9.06672 8.93554L0.128662 8.92706L7.36669 14.1893L4.59826 22.6867L11.8352 17.4357L19.067 22.6901L16.3042 14.1893L23.5332 8.93554Z" fill="#00B67A"/>
                          <path d="M16.9252 16.1152L16.3037 14.1914L11.8352 17.435L16.9252 16.1152Z" fill="#005128"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_1696_1946">
                          <rect width="97.7424" height="24" fill="white" transform="translate(0.128784 0.429688)"/>
                          </clipPath>
                          </defs>
                        </svg>

                      </p>
                  </div>
                </div>
              </div>
              <div class="grid-item col-span-4 content-center border-l border-[rgba(70,26,26,0.1)] text-center pt-5">
				<div class=" border border-[#fff] rounded-[20px] p-[40px] max-w-[400px] mx-auto">
				<?php if(get_sub_field('euro_price')): ?>
						<h5 class=" text-white text-[56px] font-semibold "><?php echo get_sub_field('euro_price'); ?></h5>
				<?php endif; ?>	

				<?php if(get_sub_field('euro_text')): ?>	
						<p class=" text-white text-[16px] font-medium "><?php echo get_sub_field('euro_text'); ?></p>
				<?php endif; ?>			
						<div class="d-block mt-[40px]">
							<a class="button inline-block w-[100%] max-w-[248px] button-small rounded-md px-[10px] md:px-[20px] py-[15px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange " href="<?php echo get_sub_field('button_url'); ?>"><?php echo get_sub_field('button_name'); ?> <svg class=" inline-block ml-[5px] " xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M4.38461 12.0058H15.7745C14.6474 10.8779 13.9292 9.34187 13.9292 7.70433V6.78125H15.7754V7.70433C15.7754 9.95571 17.8265 12.0058 20.0769 12.0058H21V13.852H20.0769C17.8265 13.852 15.7754 15.9021 15.7754 18.1535V19.0766H13.9292V18.1535C13.9292 16.516 14.6474 14.98 15.7745 13.852H4.38461V12.0058Z" fill="white"/>
								</svg>
							</a>
						</div>
				</div>
              </div>
          </div>
      </div>
    </div>
</div>
<?php endif; ?> 

<!-- Client Section -->

<?php if (get_row_layout() == 'client_section') : ?>
    <section class="w-[100%] md:min-h-[300px] py-16">
        <div class="max-w-[600px] relative mx-auto text-center">
		<?php if(get_sub_field('top_title')): ?>
        <h3 class="text-center small-intro"><?php echo get_sub_field('top_title'); ?></h3>
		<?php endif; ?>

		<?php if(get_sub_field('main_title')): ?>
		<h5 class=" text-2xl text-white sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium flex flex-col text-center px-0 lg:leading-[74px]">
			<?php echo get_sub_field('main_title'); ?>
			<span class="text-dark-orange block"> <?php echo get_sub_field('orange_title'); ?> </span>
	
		</h5>
		<?php endif; ?>
		
		<!-- <?php if(get_sub_field('orange_title')): ?>
        <h5 class=" text-2xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium flex flex-col text-center px-0 lg:leading-[74px] text-[#FF4D02] "><?php echo get_sub_field('orange_title'); ?></h5>
		<?php endif; ?> -->
		
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
<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'template-parts/home-blog' );?>


<!-- FAQ Section  -->

<?php if (have_rows('hire_block_section')) : ?>
 <?php while (have_rows('hire_block_section')) : the_row(); ?>
   <?php if (get_row_layout() == 'faq_section') : ?>
		<div class="w-full relative grid items-center z-10 py-16">
			<div class="container mx-auto md:px-0 px-10">
			<?php if(get_sub_field('top_title')): ?>
				<h3 class="text-center small-intro"> <?php echo get_sub_field('top_title'); ?> </h3>
			<?php endif; ?>
			
			<?php if(get_sub_field('main_title')): ?>
				<h5 class=" text-white font-medium text-[35px] md:text-[56px] text-center lg:leading-[74px]"> <?php echo get_sub_field('main_title'); ?>
				<span class="text-dark-orange block"> <?php echo get_sub_field('orange_title'); ?> </span>
			</h5>
			<?php endif; ?>
			
			<?php if(get_sub_field('small_paragraph')): ?>
			<p class="text-center text-white font-medium text-2xl pt-[10px] px-0 "> <?php echo get_sub_field('small_paragraph'); ?> </p>
			<?php endif; ?>
			
				<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-10">
					
					<?php if(have_rows('faq_part')): ?>
					<?php while(have_rows('faq_part')): the_row(); ?>
					<?php 
					  $question = get_sub_field('question'); 
					  $answer = get_sub_field('answer'); 
					  $row_index = get_row_index();
					?>
					<div>
					  <div class="accordian-sec-bg mb-5">
						<button class="w-full text-left py-1 px-4  focus:outline-none flex justify-between items-center" onclick="toggleAccordion(<?php echo $row_index; ?>)">
							<span id="accordion-label-<?php echo $row_index; ?>" class="text-xl pt-6 pb-6 font-medium text-white"> <?php echo $question;?> </span>
							<svg id="arrow-down-<?php echo $row_index; ?>" class="h-4 w-4 text-gray-500 rounded-full" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							  <path d="M6 9l4 4 4-4"></path>
							</svg>
							<svg id="arrow-up-<?php echo $row_index; ?>" class="h-4 w-4 hidden text-gray-500 rounded-full" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							  <path d="M6 9l4-4 4 4"></path>
							</svg>
						</button>
						<div id="accordion-section-<?php echo $row_index; ?>" class="overflow-hidden transition-max-height duration-300 rounded-xl" style="max-height:0;">
						   <p class="p-4 text-base text-white"> <?php echo $answer;?> </p>
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


<div class="w-full  relative grid items-center py-16">
  <div class="container mx-auto md:px-0 px-10 ready-hire-bg">
    <div class="grid grid-cols-1 md:grid-cols-2 min-h-[400px] gap-4">
	<?php if (have_rows('hire_block_section')) : ?>
	 <?php while (have_rows('hire_block_section')) : the_row(); ?>
	   <?php if (get_row_layout() == 'ready_hire') : ?>
      <div class="col-span-2 md:col-span-1 content-center pl-7 pr-7 md:pl-48 md:pr-12 mb-10">
	    <?php if(get_sub_field('title')): ?>
        <h5 class="text-center md:text-left text-3xl md:text-5xl lg:text-[45px] 3xl:text-58 font-medium text-white  md:leading-tight mb-4"> <?php echo get_sub_field('title'); ?> </h5>
		<?php endif; ?>
		
		<?php if(get_sub_field('paragraph')): ?>
        <span class="text-center md:text-left md:text-[24px] lg:text-[24px] text-white text-base"> <?php echo get_sub_field('paragraph'); ?> </span>
        <?php endif; ?>
		
      </div>
	<?php endif; ?>  
	<?php endwhile; ?>
	<?php endif; ?> 
      <div class="col-span-2 relative md:col-span-1 px-2 lg:px-6 py-10">
        <div class="bg-white ml-0 lg:ml-[12%] relative rounded-3xl px-6 py-6 w-[100%] max-w-[538px]">
			<div class="w-full">
				<iframe aria-label='Share Your Requirement' frameborder="0" style="height:320px;width:100%;border:none;" src='https://forms.zohopublic.in/shubhankit/form/SkillPagesForm/formperma/Kg0mSBrC00V3ydnzP2AdZWY3HYv-yjP5y0vJV2CTa3E'></iframe>
				<!-- <h4 class="text-center text-dark-black text-sm font-semibold py-6"> Our recruitment specialist will be in touch soon! </h4> -->
			</div>
       </div>
      </div>
    </div>
  </div>
</div>


<?php if (have_rows('hire_block_section')) : ?>
 <?php while (have_rows('hire_block_section')) : the_row(); ?>
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

<?php
    endwhile;
  else :
  ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php
  endif;
  ?>

<?php get_footer();?>