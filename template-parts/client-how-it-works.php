<?php if (get_row_layout() == 'how_it_works') : ?>
<section class="relative px-0 py-16">
    <div class="w-100 p-3 pb-0 mb-10">
	 <?php if(get_sub_field('small_title')): ?>
        <h4 class="text-center small-intro"> <?php echo get_sub_field('small_title'); ?> </h4>
	<?php endif; ?>
	
	 <?php if(get_sub_field('first_title')): ?>	
        <h2 class="text-[35px] sm:text-[40px] lg:text-[56px] 3xl:text-58 font-medium text-white text-center px-0 md:px-96 md:leading-tight">
            <?php echo get_sub_field('first_title'); ?> 
        </h2>
	<?php endif; ?>
	
	 <?php if(get_sub_field('second_title')): ?>	
        <p class="text-[35px] sm:text-[40px] lg:text-[56px] 3xl:text-58 font-medium text-center px-0 md:px-96 md:leading-tight  text-dark-orange mb-3"><?php echo get_sub_field('second_title'); ?></p>
	<?php endif; ?>
	
	 <?php if(get_sub_field('small_paragraph')): ?>	
        <p class="text-center text-[14px] lg:text-[25px]  pt-[10px] text-white"><?php echo get_sub_field('small_paragraph'); ?></p>
	<?php endif; ?>	
    </div>
    
    <div class="how-it-works-slide p-3 lg:p-0" id="pinContainer">
	
		<?php if(have_rows('box_content')): ?>
		<?php while(have_rows('box_content')): the_row(); ?>
		<?php 
			$small_title = get_sub_field('small_title'); 
			$right_side_heading = get_sub_field('right_side_heading'); 
			$background_color = get_sub_field('background_color'); 
			$background_name = get_sub_field('background_name'); 
		?>

            <section class="how-it-works-card panel p-3 lg:-[0px] <?php echo $background_name;?> rounded-2xl bg-[<?php echo $background_color;?>] lg:rounded-[44px] lg:pt-0" style="background:<?php echo $background_color;?>">
                
                <div class="grid grid-cols-1 lg:grid-cols-10 pt-[50px] md:pt-[0px] lg:pl-[100px] h-[100%] content-center">
                    <div class="howItWorkHeading top-[20px] lg:top-[inherit] lg:bottom-[30px] text-2 lg:text-[24px] font-extrabold">
                        <?php echo $small_title;?>
                    </div>
                    <div class="grid-item col-span-3 relative">
                        <div class="relative pl-[100px]">
                            <img class="rounded-[20px] w-[100%] max-w-[100%]" src="<?php echo get_sub_field('images')['url']; ?>" />
                        </div>
                    </div>
                    <div class="grid-item col-span-6 self-center lg:pl-[40px] max-w-[600px]">
                        <h4 class="text-[40px] font-bold"><?php echo $right_side_heading;?></h4>
                        <ul class="hiw-bullat-point">
						<?php if(have_rows('main_points')): ?>
						<?php while(have_rows('main_points')): the_row(); ?>
                            <li>
                                <img src="<?php echo get_template_directory_uri();?>/images/bullet_point_symbol.svg" class="bullet-point" />
                                <?php echo get_sub_field('points'); ?>
                            </li>
						<?php endwhile; ?>	
						<?php endif; ?>	
                        </ul>
                    </div>
                </div>
            </section>
		<?php endwhile; ?>	
		<?php endif; ?> 	
	</div>
</section>
<?php endif; ?>