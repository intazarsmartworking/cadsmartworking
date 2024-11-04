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
