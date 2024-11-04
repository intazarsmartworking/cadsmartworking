<?php  get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
  $location = get_field('location');
?>
<section class="w-full">
        <section class="w-full px-3">
            <div class="w-[100%] relative max-w-[1280px] mx-auto py-16">
                <div class="grid grid-cols-1 lg:grid-cols-10 gap-4">
                        <div class="grid-item col-span-5">
                            <h3 class="font-bold text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[74px]"><?php the_title();?></h3>
                            <p class=" text-white font-medium text-[20px]"><?php echo $location;?></p>
                        </div>
                        
                        <div class="grid-item col-span-5 content-center text-end">
                            <a href="/contact-us/" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-[#fff] border-2 bg-[#fff] text-[#000] text-[16px] hover:bg-transparent hover:text-[#fff] " target="">APPLY NOW</a>
                        </div>
                        
                </div>
            </div>
        </section>
        <section class="w-full px-3 bg-[#fff]">
            <div class="w-[100%] relative max-w-[1280px] mx-auto p-3 lg:p-20">
                

			<?php if (have_rows('career_detail_section')) : ?>
			<?php while (have_rows('career_detail_section')) : the_row(); ?>
			<?php if (get_row_layout() == 'about_smart_working_section') : ?>
			
			<?php if(get_sub_field('title')): ?>
                <h3 class=" text-[#000] font-bold text-[36px] mb-4"><?php echo get_sub_field('title'); ?></h3>
			<?php endif; ?>	
			
			<?php if(get_sub_field('paragraph')): ?>
                <p class=" text-[#000] text-[20px] mb-6"><?php echo get_sub_field('paragraph'); ?></p>
			<?php endif; ?>	
			<?php endif; ?>	
            
			<?php if (get_row_layout() == 'job_offer_section') : ?>
			<?php if(get_sub_field('title')): ?>	
			   <h3 class=" text-[#000] font-bold text-[36px] mb-4"><?php echo get_sub_field('title'); ?></h3>
			<?php endif; ?>	
			
			<?php if(get_sub_field('paragraph')): ?>
                <p class=" text-[#000] text-[20px] mb-6"><?php echo get_sub_field('paragraph'); ?></p>
			<?php endif; ?>	
			<?php endif; ?>	
			

			<?php if (get_row_layout() == 'what_bring_section') : ?>	
			<?php if(get_sub_field('title')): ?>
				<h3 class=" text-[#000] font-bold text-[36px] mb-4"><?php echo get_sub_field('title'); ?></h3>
			<?php endif; ?>	

                <ul class="text-[20px] mb-6">
				<?php if(have_rows('list_item')): ?>
				<?php while(have_rows('list_item')): the_row(); 
				 $points = get_sub_field('points');
				?>
                    <li><?php echo $points;?></li>
                <?php endwhile; ?>	
				<?php endif; ?>	    
                </ul>
			<?php endif; ?>	
			
			<?php if (get_row_layout() == 'key_responsibility_section') : ?>
			<?php if(get_sub_field('title')): ?>
                <h3 class=" text-[#000] font-bold text-[36px] mb-4"><?php echo get_sub_field('title'); ?></h3>
			<?php endif; ?>	
			
                <ul class="text-[20px] mb-6">
				<?php if(have_rows('key_responsibility')): ?>
				<?php while(have_rows('key_responsibility')): the_row(); 
				 $responsibility = get_sub_field('responsibility');
				?>
                    <li><?php echo $responsibility;?></li>
                <?php endwhile; ?>	
				<?php endif; ?>	    
                </ul>
			<?php endif; ?>	
			
			<?php if (get_row_layout() == 'practical_section') : ?>
                <?php if(get_sub_field('title')): ?>
                <h3 class=" text-[#000] font-bold text-[36px] mb-4"><?php echo get_sub_field('title'); ?></h3>
				<?php endif; ?>	

                <ul class="text-[20px] mb-6">
				<?php if(have_rows('practical')): ?>
				<?php while(have_rows('practical')): the_row(); 
				 $practical_list = get_sub_field('practical_list');
				?>
                    <li><?php echo $practical_list;?></li>
                <?php endwhile; ?>	
				<?php endif; ?>
                    
                </ul>
			<?php endif; ?>

			<?php if (get_row_layout() == 'application_process_section') : ?>
                <?php if(get_sub_field('title')): ?>
                <h3 class=" text-[#000] font-bold text-[36px] mb-4"><?php echo get_sub_field('title'); ?></h3>
				<?php endif; ?>	

                <ol class="text-[20px] mb-6">
                <?php if(have_rows('application_process')): ?>
				<?php while(have_rows('application_process')): the_row(); 
				 $application_process_list = get_sub_field('application_process_list');
				?>
                    <li><?php echo $application_process_list;?></li>
                <?php endwhile; ?>	
				<?php endif; ?>
                    
                </ol>
			<?php endif; ?>
			
			
			<?php if (get_row_layout() == 'benefit_section') : ?>
                <?php if(get_sub_field('title')): ?>
                <h3 class=" text-[#000] font-bold text-[36px] mb-4"><?php echo get_sub_field('title'); ?></h3>
				<?php endif; ?>

				<?php if(get_sub_field('paragraph')): ?>	
                <p class=" text-[#000] text-[20px] mb-6"><?php echo get_sub_field('paragraph'); ?></p>
				<?php endif; ?>
                <ul class="text-[20px] mb-6">
				<?php if(have_rows('benefits')): ?>
				<?php while(have_rows('benefits')): the_row(); 
				 $benefit_list = get_sub_field('benefit_list');
				?>
                    <li><?php echo $benefit_list;?></li>
                <?php endwhile; ?>	
				<?php endif; ?>
                    
                </ul>
			<?php endif; ?>	
			
			<?php if (get_row_layout() == 'how_to_apply_section') : ?>
                <?php if(get_sub_field('title')): ?>
                <h3 class=" text-[#000] font-bold text-[36px] mb-4"><?php echo get_sub_field('title'); ?></h3>
				<?php endif; ?>

                <ol class="text-[20px] mb-6">
                <?php if(have_rows('apply_method')): ?>
				<?php while(have_rows('apply_method')): the_row(); 
				 $apply = get_sub_field('apply');
				?>
                    <li><?php echo $apply;?></li>
                <?php endwhile; ?>	
				<?php endif; ?>
                    
                </ol>
			<?php endif; ?>		
			<?php endwhile; ?>	
			<?php endif; ?>
                <div class="p-3 lg:p-[50px] border border-[#E7ECF0] rounded-[30px]">
                    <?php echo do_shortcode('[contact-form-7 id="a12d714" title="Career Form"]');?>
				</div>
			</div>
        </section>
</section>
<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer();?>