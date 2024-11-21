<?php if (get_row_layout() == 'how_it_works') : ?>
<section class="relative px-0 py-10">
    <div class="w-100 p-3 pb-0 mb-10">
	 <?php if(get_sub_field('small_title')): ?>
        <h4 class="text-center small-intro"> <?php echo get_sub_field('small_title'); ?> </h4>
	<?php endif; ?>
	
	 <?php if(get_sub_field('first_title')): ?>	
        <h2 class="text-[35px] sm:text-[40px] lg:text-[56px] 3xl:text-58 font-medium text-white text-center px-0 lg:px-96 md:leading-tight">
            <?php echo get_sub_field('first_title'); ?> 
        </h2>
	<?php endif; ?>
	
	 <?php if(get_sub_field('second_title')): ?>	
        <p class="text-[35px] sm:text-[40px] lg:text-[56px] 3xl:text-58 font-medium text-center px-0 lg:px-96 md:leading-tight  text-dark-orange mb-3"><?php echo get_sub_field('second_title'); ?></p>
	<?php endif; ?>
	
	 <?php if(get_sub_field('small_paragraph')): ?>	
        <p class="text-center text-[14px] lg:text-[25px]  pt-[10px] text-white"><?php echo get_sub_field('small_paragraph'); ?></p>
	<?php endif; ?>	
    </div>
    <div class="w-full px-3 py-10" id="count-digit">
        <div class="container mx-auto">
            <div class="grid grid-cols-12 lg:grid-cols-12 gap-3">
                <div class="col-span-12 lg:col-span-5 content-center">
                    <div class="slider slider-nav thumb-image">

                        <?php if(have_rows('box_content')): ?>
                            <?php while(have_rows('box_content')): the_row(); ?>
                            <?php 
                                $small_title = get_sub_field('small_title'); 
                                $right_side_heading = get_sub_field('right_side_heading'); 
                                $background_color = get_sub_field('background_color'); 
                                $background_name = get_sub_field('background_name');
                                $row_index = get_row_index(); 
                            ?>

                            <div class="thumbnail-image" style="background:<?php echo $background_color;?>">
                                <span class="absolute !text-black text-center pt-[10px] text-[13px] font-bold left-[25px] top-[31px] w-[40px] h-[40px] bg-[#fff] rounded-[50%]"><?php echo $row_index; ?></span>
                                <h5 class=" text-white font-light md:text-[30px] leading-[40px]"><?php echo $small_title;?></h5>
                            </div>

                            <?php endwhile; ?>	
                        <?php endif; ?>  

                        </div>
                </div>
                <div class="col-span-12 lg:col-span-7 content-center pl-0 lg:pl-[10rem] pr-3 md:pr-10">
                    <div class=" block">
										<div class="slider slider-for">
                                            <?php if(have_rows('box_content')): ?>
                                                <?php while(have_rows('box_content')): the_row(); ?>
                                                <?php 
                                                    $small_title = get_sub_field('small_title'); 
                                                    $right_side_heading = get_sub_field('right_side_heading'); 
                                                    $background_color = get_sub_field('background_color'); 
                                                    $background_name = get_sub_field('background_name'); 
                                                ?>
													<div class="slider-banner-image p-6 min-h-[350px] rounded-[10px]" style="border:1px solid <?php echo $background_color;?>">
														<h5 class=" text-white text-[1.5rem] font-normal md:text-[3rem] leading-[1.5rem] md:leading-[3rem] mb-7 ">
                                                            <span class="text-dark-orange"><?php echo $right_side_heading;?></span>
                                                        </h5>
														<ul class="hiw-bullat-point">
                                                            <?php if(have_rows('main_points')): ?>
                                                                <?php while(have_rows('main_points')): the_row(); ?>
                                                                    <li>
                                                                        <span class="bullet-point">
                                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M10 17.5C10.9849 17.5 11.9602 17.306 12.8701 16.9291C13.7801 16.5522 14.6069 15.9997 15.3033 15.3033C15.9997 14.6069 16.5522 13.7801 16.9291 12.8701C17.306 11.9602 17.5 10.9849 17.5 10C17.5 9.01509 17.306 8.03982 16.9291 7.12987C16.5522 6.21993 15.9997 5.39314 15.3033 4.6967C14.6069 4.00026 13.7801 3.44781 12.8701 3.0709C11.9602 2.69399 10.9849 2.5 10 2.5C8.01088 2.5 6.10322 3.29018 4.6967 4.6967C3.29018 6.10322 2.5 8.01088 2.5 10C2.5 11.9891 3.29018 13.8968 4.6967 15.3033C6.10322 16.7098 8.01088 17.5 10 17.5Z" stroke="#050403" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                <path d="M9.75016 5.83203L10.7502 8.4987L13.6668 8.66536L11.4168 10.4987L12.1668 13.332L9.75016 11.7487L7.3335 13.332L8.0835 10.4987L5.8335 8.66536L8.66683 8.4987L9.75016 5.83203Z" stroke="#050403" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                                            </svg>
                                                                        </span>
                                                                        <!-- <img src="<?php echo get_template_directory_uri();?>/images/bullet_point_symbol.svg" class="bullet-point" /> -->
                                                                        <?php echo get_sub_field('points'); ?>
                                                                    </li>
                                                                <?php endwhile; ?>	
                                                            <?php endif; ?>	
                                                        </ul>
													</div>
													
												<?php endwhile; ?>	
                                            <?php endif; ?> 


												
										</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    
    
</section>
<?php endif; ?>