<div class="w-full relative py-16">
    <div class="w-full relative  grid items-center assemble-inner">
    <div class="container pt-[0px] md:px-0 px-10 max-w-[80rem] mx-auto">
    <?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'assemble_section') : ?>	
    <?php if(get_sub_field('small_title')): ?>    
        <h3 class="text-center small-intro"> <?php echo get_sub_field('small_title'); ?> </h3>
   <?php endif; ?>
   
   <?php if(get_sub_field('main_heading')): ?>  
        <h2 class=" text-[35px] sm:text-[40px] lg:text-[56px] 3xl:text-[58px] font-medium text-white text-center px-0  md:leading-tight"><?php echo get_sub_field('main_heading'); ?><span class="text-dark-orange block"> <?php echo get_sub_field('orange_heading'); ?> </span></h2>
    <?php endif; ?>

    <?php if(get_sub_field('small_paragraph')): ?>  
        <p class="text-center text-white font-medium text-[18px] md:text-2xl mt-6 mb-10 px-0 "> <?php echo get_sub_field('small_paragraph'); ?> </p>
    <?php endif; ?>
    
    <?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>    
        <div class="assemble-section-animation">
            <div class="item-animtion"></div>
            <div class="item-animtion"></div>
            
            <div class="grid grid-cols-1 lg:grid-cols-11 gap-4 assemble-section-bg rounded-3xl relative px-0">
                    
                
                <div class="bg-white col-span-11 lg:col-span-6 relative p-3 lg:p-[2.5rem] px-5 rounded-xl hide-mobile">
                    <div class=" text-center w-[40px] h-[40px] rounded-[50%] border-[3px] border-[#fff] bg-[#FF4D02] absolute pt-[4px] right-[-27px] top-[40px] ">
                        <svg class=" inline-block" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4998 18.0764C13.2438 18.0764 12.9878 17.9785 12.7928 17.7835C12.4018 17.3935 12.4018 16.7604 12.7928 16.3694L17.0858 12.0754L12.7928 7.78147C12.4018 7.39047 12.4018 6.75747 12.7928 6.36747C13.1838 5.97647 13.8158 5.97647 14.2068 6.36747L19.2068 11.3685C19.5978 11.7594 19.5978 12.3915 19.2068 12.7825L14.2068 17.7835C14.0118 17.9785 13.7558 18.0764 13.4998 18.0764Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.50025 18.0764C6.24425 18.0764 5.98825 17.9785 5.79325 17.7835C5.40225 17.3935 5.40225 16.7604 5.79325 16.3694L10.0862 12.0754L5.79325 7.78147C5.40225 7.39047 5.40225 6.75747 5.79325 6.36747C6.18425 5.97647 6.81625 5.97647 7.20725 6.36747L12.2072 11.3685C12.5982 11.7594 12.5982 12.3915 12.2072 12.7825L7.20725 17.7835C7.01225 17.9785 6.75625 18.0764 6.50025 18.0764Z" fill="white"/>
                        </svg>
                    </div>
                    <h4 class="text-dark-black text-xl font-bold"> Let’s start building the perfect team </h4>
                    <div class="flex items-center border-2 border-gray-300 rounded-lg p-2 bg-white my-5">
                        <svg class="w-6 h-6 text-gray-500 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m2.35-6.65A7 7 0 1114 4a7 7 0 015 2.35 7 7 0 010 9.9z"></path>
                        </svg>
                        <input id="searchInput" type="text" class="flex-grow px-2 py-1 text-gray-700 focus:outline-none focus:ring-0 border-none" placeholder="Search..." oninput="filterSkills()">
                        
                    </div>

                    <div class="h-[22rem] overflow-y-scroll custom-scrollbar">
                        <div id="skillsContainer" class="grid grid-cols-2 md:grid-cols-6 gap-4 text-center pr-5">
                            
                            
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

                            <div class="home-skills flex flex-col items-center justify-center p-3 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                                <img src="<?php echo esc_url($hire_image_src[0]) ;?>" class="w-[40px] h-[40px]" />
                                <h6 class="text-xs font-normal text-dark-black mt-4"> <?php the_title();?> </h6>
                                <svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                                    <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <?php endwhile; wp_reset_postdata();?>
                        

                            
                        </div>
                    </div>

                </div>
                <div class="bg-white col-span-11 lg:col-span-5 p-3 px-5 lg:p-[2.5rem] rounded-xl">
                    <!-- <img src="<?php echo get_template_directory_uri();?>/images/smartworking-black.svg" class="mx-auto"> -->

                     <div class="rounded-2xl p-3 lg:px-[2.5rem] border-pattern ">
                        <h6 class="text-dark-orange font-bold text-2xl"> Share your requirements </h6>

                        <!--<form method="post">

                        <input type="text" id="skillsInput"  name="skills"  readonly
                        class="mt-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-dark-black focus:border-dark-black  sm:text-sm">

                            <input type="text"  name="fullname" placeholder="Full Name" 
                            class="mt-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-dark-black focus:border-dark-black  sm:text-sm">


                            <input type="email"  name="email-address" placeholder="Email Address" 
                            class="mt-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-dark-black focus:border-dark-black  sm:text-sm">
                            
                            <button type="submit" class="w-full bg-dark-orange text-white mt-4 py-2 px-4 rounded-md hover:bg-dark-black focus:outline-none focus:bg-dark-black transition duration-200">Submit Now</button>
                        </form>-->

                        <?php echo do_shortcode('[contact-form-7 id="713a21a" title="Assemble Team Form"]'); ?>
                </div>
                    <!-- <div class="rounded-2xl border-pattern ">
                        <iframe class="home-form" aria-label='Share Your Requirement' frameborder="0" style="height:330px;width:100%;border:none;" src='https://forms.zohopublic.in/shubhankit/form/SkillPagesForm/formperma/Kg0mSBrC00V3ydnzP2AdZWY3HYv-yjP5y0vJV2CTa3E'></iframe>
                        <h4 class="text-center text-dark-black text-sm font-semibold pt-3"> Our recruitment specialist will be in touch soon! </h4>
                    </div>  -->
                    
                    
                    <div class="rounded-2xl px-6 pt-6 pb-3  lg:px-[2.5rem] border-pattern mt-4 hide-mobile">
                        <div class="flex">
                            <div class="pr-4">
                                <img class="mb-7 w-48" src="<?php echo get_template_directory_uri();?>/images/09.-Adam-Burrage-Managing-Director.png" alt="">
                            </div>
                            <div>
                                <p class="text-xs font-normal text-dark-black pb-3"> Adam Burrage </p>
                                <p class="text-base text-dark-black"> Smart Working found us an excellent developer very quickly who has been one of our best developers since she began. We see her as a core member of the team and can see her being with us for the long term. It has worked really well. </p>
                                </div>
                            </div>
                        </div>

                    </div>
        </div>
    </div>	
    </div>
    </div>
</div>
