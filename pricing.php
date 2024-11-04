<?php
/**
 * Template Name: Pricing Page
 *
 * @package sws
 */

 get_header();
?>

<div class=" w-full relative">
  <img class="bg-img absolute w-[150%] max-w-[initial] left-[-20%] z-0 top-[-16%]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
  <div class=" w-full relative z-10">

    <?php if (have_rows('pricing_block')) : ?>
    <?php while (have_rows('pricing_block')) : the_row(); ?>
    <?php if (get_row_layout() == 'top_section') : ?>
        <section class="price-page w-full relative">
            <div class=" container w-[100%] !max-w-[1280px] relative py-16">
                <div class="max-w-[600px] relative mx-auto text-center">
                <?php if(get_sub_field('main_heading')): ?>
                    <h1 class="text-white text-[25px] lg:text-[56px] font-medium mb-0"><?php echo get_sub_field('main_heading'); ?></h1>
                <?php endif; ?>	
                
                <?php if(get_sub_field('orange_heading')): ?>
                    <h5 class="text-[#FF4D02] text-[25px] lg:text-[56px] font-medium "><?php echo get_sub_field('orange_heading'); ?></h5>
                <?php endif; ?>
                
                <?php if(get_sub_field('paragraph')): ?>	
                    <p class="text-white text-[16px] lg:text-[24px] font-normal mb-0"><?php echo get_sub_field('paragraph'); ?><p>
                <?php endif; ?>	
                </div>
            </div>
        </section>
    <?php endif; ?>	
    <?php endwhile; ?>
    <?php endif; ?>

    <section class="price-page py-16 w-full relative">
        <div class=" container w-[100%] !max-w-[1280px] relative py-[30px]">
            <div class="max-w-[100%] relative mx-auto assemble-section-bg rounded-[24px] border border-[rgba(255,77,2,0.30)] p-3 lg:p-[32px] ">
                <div class="grid grid-cols-1 lg:grid-cols-10 gap-6">
                    <div class="grid-item col-span-6 rounded-[12px] bg-white p-[10px] lg:p-[20px] ">
                        <h5 class=" text-black text-[20px] lg:text-[20px] font-bold mb-0">Let’s start building your team</h5>
                        <div class=" block w-full mt-3">
                            <input type="text" id="myInput" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF4D02] focus:border-[#FF4D02] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#FF4D02] dark:focus:border-[#FF4D02]" placeholder="Search skills" />
                        </div>
                        <div class="w-full mt-3 !pt-3 h-[240px] overflow-y-auto thin-scroll-bar">
                            <!-- <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3" id="searchItem"></div> -->
                            <div class=" block w-full" id="searchItem">
							<?php 
							$args_skills = array(
								'post_type' => 'skills',
								'posts_per_page' => -1,
                                'order' => 'ASC',
                                'orderby' => 'title',
							);
							$query_skills = new WP_Query($args_skills);
							while ($query_skills->have_posts()) : $query_skills->the_post();
							$mid_level_dollar_price = get_field('mid_level_dollar_price');
							$senior_level_dollar_price = get_field('senior_level_dollar_price');
							$mid_level_pound_price = get_field('mid_level_pound_price');
							$senior_level_pound_price = get_field('senior_level_pound_price');
							$skill_image_id = get_post_thumbnail_id();
							$skill_image_src = wp_get_attachment_image_src($skill_image_id, 'full');

							?>
							
							  <div class="item-skill text-[#040524] text-[12px] rounded-[8px] border border-[rgba(5,4,3,0.20)] " 
                                data-price='{"midLevel":<?php echo $mid_level_pound_price;?>,"senior":<?php echo $senior_level_pound_price;?>}'
                                data-dolor='{"midLevel":<?php echo $mid_level_dollar_price;?>,"senior":<?php echo $senior_level_dollar_price;?>}'
                              >
								  <!-- <span class="block pro-name"> MLD : <?php echo $mid_level_dollar_price;?>  </span>   
								  <span class="block pro-name"> SLD : <?php echo $senior_level_dollar_price;?>  </span>
								  <span class="block pro-name"> MLP : <?php echo $mid_level_pound_price;?>  </span>
								  <span class="block pro-name"> SLP : <?php echo $senior_level_pound_price;?>  </span> -->
								  <span class="block absolute left-[8px] top-[8px] text-center pro-name"> <img class=" inline-block w-[22px] h-[22px]" src="<?php echo esc_url($skill_image_src[0]); ?>" alt="<?php the_title(); ?>">  </span>
                                  <span class="block pro-name"> <?php the_title(); ?>  </span>
								  <span class="active-img absolute text-[10px] text-center bg-[#DF4402] text-white rounded-full font-extrabold h-[15px] w-[15px] right-[-7px] top-[-5px]">&#10003</span>
							  </div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>  
							</div>
                        </div>
                        <div class=" block w-full mt-[30px]">
                            <h5 class=" text-black text-[20px] lg:text-[20px] font-bold mb-0">Experience</h5>
                            <div class="d-block w-full mt-3">
                                <span id="exp-item-2" onclick="skillExperience({id:2,level:'midLevel'})" class="exp-item cursor-pointer inline-block px-[30px] py-[8px] mr-3 mb-3 text-[14px] rounded-[8px] border bottom-[#040524] text-[#040524]">
                                    Mid level (3-4year)
                                    <img class="active-img absolute h-[20px] w-[20px] right-[-7px] top-[-5px]" src="<?php echo get_template_directory_uri();?>/images/active-skill.png" />
                                </span>
                                <span id="exp-item-3" onclick="skillExperience({id:3,level:'senior'})" class="exp-item cursor-pointer inline-block px-[30px] py-[8px] mr-3 mb-3 text-[14px] rounded-[8px] border bottom-[#040524] text-[#040524]">
                                    Senior level (5+ years)
                                    <img class="active-img absolute h-[20px] w-[20px] right-[-7px] top-[-5px]" src="<?php echo get_template_directory_uri();?>/images/active-skill.png" />
                                </span>
                            </div>
                        </div>

                        <div class=" block w-full mt-[30px]">
                            <h5 class=" text-black text-[20px] lg:text-[20px] font-bold mb-0">How many people need at your company?</h5>
                            <div class="d-block w-full mt-3">
                                <div class="relative mb-6">

                                <div class="range-wrap">
                                    <!-- <div class="range-active"></div> -->
                                    <div class="range-value" id="rangeV"></div>
                                    <input class="custom" id="slide-range" type="range" min="1" max="10" value="1" step="1">
                                    <div class="absolute w-[100%] bottom-0 left-0">
                                        <div class="grid slide-range-box grid-cols-10 gap-10">
                                            <div class="col-span-1">1</div>
                                            <div class="col-span-1 text-center">2</div>
                                            <div class="col-span-1 text-center">3</div>
                                            <div class="col-span-1 text-center">4</div>
                                            <div class="col-span-1 text-center">5</div>
                                            <div class="col-span-1 text-center">6</div>
                                            <div class="col-span-1 text-center">7</div>
                                            <div class="col-span-1 text-center">8</div>
                                            <div class="col-span-1 text-center">9</div>
                                            <div class="col-span-1 text-right">10</div>
                                        </div>
                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="grid-item col-span-6 md:col-span-4 rounded-[12px] bg-white p-[10px] lg:p-[20px]">
                        
                        <div class="block border border-[rgba(5,4,3,0.20)] rounded-[16px] p-[24px] mt-4">
                            <h5 class="text-[#FF4D02] text-[32px] lg:text-[32px] font-bold "><span id="typeCurrency">£</span><span id="total-price">0</span>/hr</h5>
                            <p class="text-[#040524] text-[14px] lg:text-[14px] font-medium mb-4 mt-4">Smart Working will have vetted candidates ready for you to review in 7 days</p>
                            <a href="/contact-us/"> <button class="w-full button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange" >HIRE NOW WITH SMART WORKING</button> </a>
                            <p class="text-[#040524] text-[14px] lg:text-[14px] font-medium mb-4 mt-4">We will be in touch soon.</p>
                        </div>

                        <div class="block border border-[rgba(5,4,3,0.20)] rounded-[16px] p-[24px] mt-4 text-center">
                            <img class="h-[42] inline-block" src="<?php echo get_template_directory_uri();?>/images/well-hand.png">
                            <h5 class="text-[#FF4D02] text-[32px] lg:text-[32px] font-bold mt-5">Save £<span id="discount-price">0</span>/month</h5>
                            <p class="text-[#040524] text-[14px] lg:text-[14px] font-medium mb-4 mt-4">Save 40-50% per hire, as well as the time and hassle of hiring internally</p>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class=" w-full relative mt-6 ">
            
                <?php if (have_rows('pricing_block')) : ?>
                <?php while (have_rows('pricing_block')) : the_row(); ?>
                <?php if (get_row_layout() == 'top_section_accordion') : ?>
                <div class="accordion-box w-full">
                    <div class="p-[24px] rounded-[24px] w-full border border-[rgba(255,77,2,0.30)] bg-gradient-to-r from-[rgba(255,77,2,0.10)] ">
                        <?php if(get_sub_field('heading')): ?>
                        <div class="accordion-title w-full text-[24px] relative text-white">
                            <?php echo get_sub_field('heading'); ?>
                            <!-- <span class=" block w-[30px] h-[30px] absolute right-0 top-0 text-white text-center">&#11107;</span> -->
                        </div>
                        <?php endif; ?>
                        
                        <?php if(get_sub_field('sub_heading')): ?>
                        <div class="accordion-details w-full relative pt-5">
                            <p class="text-white text-[15px] lg:text-[18px] mb-0"><?php echo get_sub_field('sub_heading'); ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>	
                <?php endwhile; ?>
                <?php endif; ?>
                
                
            </div>
        </div>
    </section>

    <?php if (have_rows('pricing_block')) : ?>
    <?php while (have_rows('pricing_block')) : the_row(); ?>
    <?php if (get_row_layout() == 'add_on_section') : ?>
    <section class="price-page py-16  w-full relative">
        <div class=" container w-[100%] !max-w-[1280px] relative py-[30px]">
            <div class="w-full text-center">
                <?php if(get_sub_field('top_heading')): ?>
                <div class="block mb-5"><span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem] " ><?php echo get_sub_field('top_heading'); ?></span></div>
                <?php endif; ?>
                
                <?php if(get_sub_field('main_heading')): ?>
                <h5 class="gradient-text text-[25px] lg:text-[56px] font-medium mb-0"><?php echo get_sub_field('main_heading'); ?></h5>
                <?php endif; ?>
            </div>

            <div class=" w-full relative mt-6 ">
                <div class="accordion-box w-full">
                
                <?php if(have_rows('toggle_part')): ?>
                <?php while(have_rows('toggle_part')): the_row(); ?>
                <?php 
                    $title_name = get_sub_field('title'); 
                    $price = get_sub_field('price'); 
                    $description = get_sub_field('description'); 
                    $first_colour = get_sub_field('first_colour'); 
                    $second_colour = get_sub_field('second_colour'); 
                ?>
                    <div class="p-[24px] mt-5 rounded-[24px] w-full border" style="background-image:linear-gradient(to right, <?php echo $second_colour;?> 0%, <?php echo $first_colour;?> 100%); border-color: <?php echo $second_colour;?>;">
                        <div class="accordion-title w-full text-[16px] lg:text-[24px] relative text-white pl-[60px] pr-[100px]">
                            <span class=" block w-[40px] rounded-[8px] h-[40px] border border-[rgba(255,255,255,0.30)] p-[8px] absolute left-0 top-[-5] text-white text-center">
                                <img class="w-[100%]" src="<?php echo get_sub_field('image')['url']; ?>">
                            </span>
                            <?php echo $title_name;?>
                            <span class=" block w-[150px] h-[30px] absolute right-[0px] top-[-4px] text-white text-[16px] lg:text-[32px] text-end"><?php echo $price;?></span>
                            <!-- <span class=" block w-[30px] h-[30px] absolute right-0 top-0 text-white text-center">&#11107;</span> -->
                        </div>
                        <!-- <div class="accordion-details w-full relative pt-4">
                            <p class="text-white text-[15px] lg:text-[18px] font-medium mb-0"><?php echo $description;?></p>
                        </div> -->
                    </div>
                    
                <?php endwhile; ?>	
                <?php endif; ?> 	

                </div>
            </div>
        </div>
    </section>

    <?php endif; ?>	

    <?php if (get_row_layout() == 'compare_section') : ?>
    <section class="price-page py-16 w-full relative">
        <div class=" container w-[100%] !max-w-[1280px] relative py-[30px]">
            <img class="absolute right-[-150px] opacity-[0.6] top-[20%] w-[400px] z-0 rotate-[180deg]" src="<?php echo get_template_directory_uri();?>/images/sqr-circule.png">
            <div class="w-full text-center">
            <?php if(get_sub_field('top_heading')): ?>
                <div class="block mb-5"><span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem]"><?php echo get_sub_field('top_heading'); ?></span></div>
            <?php endif; ?> 	

            <?php if(get_sub_field('main_title')): ?>
            <h5 class="text-white text-[25px] lg:text-[56px] font-medium mb-0"><?php echo get_sub_field('main_title'); ?></h5>
            <?php endif; ?> 	
            
            <?php if(get_sub_field('orange_title')): ?>   
                <h5 class="text-[#FF4D02] text-[25px] lg:text-[56px] font-medium mb-0"><?php echo get_sub_field('orange_title'); ?></h5>
            <?php endif; ?> 
            
            <?php if(get_sub_field('paragraph')): ?>	
                <p class="text-white text-[16px] lg:text-[24px] font-medium mb-0 max-w-[80%] block mx-auto "><?php echo get_sub_field('paragraph'); ?></p>
            <?php endif; ?> 
            </div>

            <div class="w-full relative border border-[rgba(255,77,2,0.20)] bg-[] rounded-[20px] price-list-box px-[20px] mt-8">
                <div class="grid grid-cols-1 lg:grid-cols-9 gap-0">
                    <div class="grid-item col-span-3 rounded-[12px]">
                        <?php if(get_sub_field('table_one_heading')): ?>
                        <div class="line-box border-b border-[rgba(255,255,255,0.10)] px-[15px] h-[90px] content-center">
                            <h5 class="text-white text-[20px] lg:text-[28px] font-normal mb-0"><?php echo get_sub_field('table_one_heading'); ?></h5>
                        </div>
                        <?php endif; ?> 
                        
                        <?php if(have_rows('table_first_content')): ?>
                        <?php while(have_rows('table_first_content')): the_row(); ?>
                        <div class="line-box border-b border-[rgba(255,255,255,0.10)] px-[15px] h-[90px] content-center">
                            <p class="text-white text-[20px] lg:text-[22px] font-normal mb-0"><?php echo get_sub_field('title'); ;?></p>
                        </div>
                        <?php endwhile; ?>	
                        <?php endif; ?>
                        
                        
                    </div>
                    <div class="grid-item col-span-3 rounded-[12px] bg-gradient-to-r from-[#FF7D46] from-0%  to-[#FF4F05] to-100% ">
                    
                        <?php if(get_sub_field('table_second_heading')): ?>
                        <div class="line-box border-b border-[rgba(255,255,255,0.4)] h-[90px] px-[15px] content-center">
                            <h5 class="text-white text-[20px] lg:text-[28px] font-normal mb-0"><?php echo get_sub_field('table_second_heading'); ?></h5>
                        </div>
                        <?php endif; ?>
                        
                        <?php if(have_rows('table_second_content')): ?>
                        <?php while(have_rows('table_second_content')): the_row(); ?>
                        <div class="line-box border-b border-[rgba(255,255,255,0.4)] h-[90px] px-[15px] content-center">
                            <p class="text-white text-[18px] lg:text-[18px] font-normal mb-0"><?php echo get_sub_field('title'); ;?></p>
                        </div>
                        <?php endwhile; ?>	
                        <?php endif; ?> 
                        
                        
                    </div>
                    <div class="grid-item col-span-3 rounded-[12px]">
                    
                        <?php if(get_sub_field('table_third_heading')): ?>
                        <div class="line-box border-b border-[rgba(255,255,255,0.10)] px-[15px] h-[90px] content-center">
                            <h5 class="text-white text-[20px] lg:text-[28px] font-normal mb-0"><?php echo get_sub_field('table_third_heading'); ?></h5>
                        </div>
                        <?php endif; ?>
                        
                        <?php if(have_rows('table_third_content')): ?>
                        <?php while(have_rows('table_third_content')): the_row(); ?>
                        <div class="line-box border-b border-[rgba(255,255,255,0.10)] px-[15px] h-[90px] content-center">
                            <p class="text-white text-[18px] lg:text-[18px] font-normal mb-0"><?php echo get_sub_field('title'); ;?></p>
                        </div>
                        <?php endwhile; ?>	
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>

        </img> 
    </section>
    <?php endif; ?>

    <?php if (get_row_layout() == 'support_section') : ?>
    <section class="price-page py-16 w-full relative">
        <div class=" container w-[100%] !max-w-[1280px] relative py-[30px]">
            <div class="w-full text-center">
            <?php if(get_sub_field('top_title')): ?>
                <div class="block mb-5"><span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem]"><?php echo get_sub_field('top_title'); ?></span></div>
            <?php endif; ?>
            
            <?php if(get_sub_field('main_title')): ?>	
            <h5 class="text-white text-[25px] lg:text-[56px] font-medium mb-0"><?php echo get_sub_field('main_title'); ?></h5>
            <?php endif; ?>
            
            <?php if(get_sub_field('orange_title')): ?>
                <h5 class="text-[#FF4D02] text-[25px] lg:text-[56px] font-medium mb-0"><?php echo get_sub_field('orange_title'); ?></h5>
            <?php endif; ?>	
            </div>

            <div class="w-full relative mt-8">
                <div class="grid grid-cols-1 lg:grid-cols-9 gap-5">
                    
                    <?php if(have_rows('support_box')): ?>
                    <?php while(have_rows('support_box')): the_row();
                    $description = get_sub_field('description'); 
                    $button_name = get_sub_field('button_name');
                    $button_link = get_sub_field('button_link');
                    $support_image = get_sub_field('image');
                    ?>
                    <div class="grid-item col-span-3 relative pb-[100px]">
                        <?php if (!empty($support_image) && isset($support_image['url'])):?>
                        <img class="w-[100%] rounded-lg h-[240px]" src="<?php echo esc_url($support_image['url']); ?>" alt="<?php echo esc_url($support_image['alt']); ?>">
                        <?php endif; ?>
                        
                        <div class="absolute w-[calc(100%-30px)] left-[15px] bottom-0 bg-white rounded-[15px] p-[20px]">
                            <p class="text-[19px] lg:text-[19px] font-medium mb-0"><?php echo $description;?></p>
                            <a href="<?php echo $button_link;?>"> <button class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange"><?php echo $button_name ;?></button> </a>
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


    <?php if (have_rows('block')) : ?>
    <?php while (have_rows('block')) : the_row(); ?>
    <?php if (get_row_layout() == 'testimonial_section') : ?>
        <section class="price-page py-16 w-full relative">
            <div class="py-[30px] mx-auto flex flex-col justify-center testimonial-section items-center">
                <?php if(get_sub_field('small_heading')): ?>
                    <div class ="container mx-auto md:px-0 px-10">
                        <p class="text-white text-[12px] lg:text-[16px] text-center flex items-center justify-center small-intro mt-48"><?php echo get_sub_field('small_heading'); ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if(get_sub_field('main_heading')): ?>
                    <div class="flex flex-col items-center justify-center">
                        <?php echo get_sub_field('main_heading'); ?>
                    </div>
                <?php endif; ?>
                <div class="w-full flex relative min-h-[580px] pr-3 lg:pr-0 pt-16 overflow-hidden">
                <div class="flex w-0 lg:w-1/12">&nbsp;</div>
                <div class="slider-wrapper w-full relative card-container overflow-visible">
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

                        <div class="bg-[<?php echo esc_attr($background); ?>] slider-item w-100 lg:w-[600px] h-[450px] rounded-3xl absolute card-placement card" style="background:<?php echo esc_attr($background); ?>;">
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
        </section>
    <?php endif; ?>	
    <?php endwhile; ?>
    <?php endif; ?>


    <?php get_template_part( 'template-parts/home-blog' );?>

    <?php if (have_rows('pricing_block')) : ?>
    <?php while (have_rows('pricing_block')) : the_row(); ?>
    <?php if (get_row_layout() == 'faq_section') : ?>
    <section class="price-page py-16  w-full relative">
        <div class=" container w-[100%] !max-w-[1280px] relative py-[30px]">
            <div class="w-full text-center">
                <?php if(get_sub_field('top_title')): ?>
                <div class="block mb-5"><span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem]"><?php echo get_sub_field('top_title'); ?></span></div>
                <?php endif; ?>
                
                <?php if(get_sub_field('main_title')): ?>
                <h5 class="text-white text-[25px] lg:text-[56px] font-medium mb-0"><?php echo get_sub_field('main_title'); ?></h5>
                <?php endif; ?>
                
                <?php if(get_sub_field('orange_title')): ?>
                <h5 class="text-[#FF4D02] text-[25px] lg:text-[56px] font-medium mb-0"><?php echo get_sub_field('orange_title'); ?></h5>
                <?php endif; ?>
                
            </div>

            <div class="w-full relative mt-8">
                <div class="grid grid-cols-1 lg:grid-cols-10 gap-5">
                
                    <?php if(have_rows('faq_part')): ?>
                    <?php while(have_rows('faq_part')): the_row();
                    $question = get_sub_field('question'); 
                    $answer = get_sub_field('answer');
                    ?>
                    <div class="grid-item col-span-5 relative">
                        <div class="accordion-box w-full">
                            <div class="accordion-item p-[24px] rounded-[24px] w-full border border-[rgba(255,77,2,0.30)] bg-gradient-to-r from-[#ff4e023b] from-0%  to-[transparent] to-100% ">
                                <div class="accordion-title w-full text-[20px] relative text-white cursor-pointer pr-[30px]">
                                    <?php echo $question;?>
                                    <span class=" block w-[30px] h-[30px] border border-[rgba(255,255,255,0.10)] rounded-[8px] absolute right-0 top-0 text-white text-center">+</span>
                                </div>
                                <div class="accordion-details w-full relative py-3">
                                    <p class="text-white text-[16px] lg:text-[16px]">
                                        <?php echo $answer;?>
                                    </p>
                                </div>
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


    <?php if (get_row_layout() == 'ready_hire_section') : ?>
    <section class="w-[100%] px-[5%] py-16">
        <div class="relative grid grid-cols-1 lg:grid-cols-2 content-center gap-0 rounded-[24px] vetting-bg py-[32px] px-[10%]">
            <img class="absolute h-[100%] w-[50%] right-[0px] top-[0px]" src="<?php echo get_template_directory_uri();?>/images/bg-line-box.png" />
            <div class="pt-[60px]">
                <?php if(get_sub_field('title')): ?>
                <h5 class=" text-white text-[32px] lg:text-[62px] lg:leading-[62px]"><?php echo get_sub_field('title'); ?></h5>
                <?php endif; ?>
                
                <?php if(get_sub_field('paragraph')): ?>
                <p class=" text-white text-[16px] lg:text-[24px] lg:mt-[30px] mb-[30px]"><?php echo get_sub_field('paragraph'); ?></p>
                <?php endif; ?>
                
                <?php if(get_sub_field('button_name')): ?>
                <?php $button_url =  get_sub_field('button_url'); ?>
                <a class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] text-dark-orange text-lg bg-white hover:bg-black hover:text-white" href="<?php echo esc_url($button_url); ?>"> <?php echo get_sub_field('button_name'); ?> </a>
                <?php endif; ?>
            </div>
            
            <?php $right_side_image = get_sub_field('right_side_image');
            if (!empty($right_side_image) && isset($right_side_image['url'])):
            ?>
            <div class="text-end pt-[40px] lg:pt-[0px]">
                <img class="inline-block w-[100%] max-w-[500px]" src="<?php echo esc_url($right_side_image['url']); ?>" alt="<?php echo esc_attr($right_side_image['alt']); ?>">
            </div>
            <?php endif; ?>
            
        </div>
    </section>
    <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>

    </div>
</div>

<script type="text/javascript">
    jQuery(window).bind("load", function() {
	    loadPricePage();
        // priceRateGet();
	});
</script>

<?php get_footer();?>