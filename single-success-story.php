<?php  get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class=" w-full relative">
  	<img class="bg-img absolute w-[150%] max-w-[initial] opacity-[0.6] left-[-20%] z-0 top-[-1000px]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
  	<div class=" w-full relative px-[20px] md:px-[0px] z-10">
        <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
            <a href="/success-story/" class="text-[18px] text-white font-medium"><span class="text-[#FF4F04]">&#8592;</span> &nbsp; Customer Success Stories</a>
        </div>
		<?php if (have_rows('success_story_detail_section')) : ?>
		<?php while (have_rows('success_story_detail_section')) : the_row(); ?>
		<?php if (get_row_layout() == 'banner_section') : ?>
        <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
            <div class="grid grid-cols-1 md:grid-cols-10 gap-5">
                <div class="col-span-10 md:col-span-7 content-center pr-0 md:pr-[50px]">
				<?php if(get_sub_field('main_title')): ?>
                    <h1 class="font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[74px]">
                      <?php echo get_sub_field('main_title'); ?> <br><span class="gradient-text"> <?php echo get_sub_field('gradient_title'); ?> </span> <br><span class="text-dark-orange"><?php echo get_sub_field('orange_title'); ?></span> 
                    </h1>
				<?php endif; ?>	
				<?php if(get_sub_field('paragraph')): ?>
                    <p class=" text-white text-[20px] font-semibold"> <?php echo get_sub_field('paragraph'); ?> </p>
                <?php endif; ?>
				</div>
                <div class="col-span-10 md:col-span-3 content-center">
                    <div class=" relative rounded-[10px] overflow-hidden w-[100%]">
                    <?php $main_image = get_sub_field('right_image');
						if (!empty($main_image) && isset($main_image['url'])):
					?>
					  <img  src="<?php echo esc_url($main_image['url']); ?>" alt="">
					<?php endif; ?>  
                    </div>
                </div>
            </div>
        </div>
		<?php endif; ?>  
		<?php endwhile; ?>
		<?php endif; ?>
        <div class=" w-[100%] max-w-[1280px] mx-auto py-16 single-blog">
            <div class="grid grid-cols-1 md:grid-cols-10 gap-5">
			<?php if (have_rows('success_story_detail_section')) : ?>
			<?php while (have_rows('success_story_detail_section')) : the_row(); ?>
			<?php if (get_row_layout() == 'sticky_section') : ?>
                <div class="col-span-10 md:col-span-3">
                    <div class=" sticky top-[150px] left-0">
					
					<?php if(have_rows('section_sticky')): ?>
					<?php while(have_rows('section_sticky')): the_row();
					  $total_number = get_sub_field('total_number'); 
					  $paragraph = get_sub_field('paragraph'); 
					?>
                        <div class=" block mb-[50px]">
                            <div class=" text-white text-[24px] font-bold border-l-[1px] border-[#FF4D02] pl-5 mb-[30px]"><?php echo $total_number;?></div>
                            <p class=" text-white text-[16px]"> <?php echo $paragraph;?> </p>
                        </div>
						
					<?php endwhile; ?>	
					<?php endif; ?>	
                    
					<?php if(get_sub_field('button_name')): ?>	
                        <div class=" block mb-[50px]">
                            <a href="<?php echo get_sub_field('button_url'); ?>" class="button inline-block button-small rounded-md px-[20px] md:px-[30px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange " target=""><?php echo get_sub_field('button_name'); ?></a>
                        </div>
                    <?php endif; ?>	    
                    </div>
                </div>
				<?php endif; ?>  
				<?php endwhile; ?>
				<?php endif; ?>
                <div class="col-span-10 md:col-span-7">
				
				<?php if (have_rows('success_story_detail_section')) : ?>
				<?php while (have_rows('success_story_detail_section')) : the_row(); ?>
				<?php if (get_row_layout() == 'main_content_section') : ?>
				
				<?php if(have_rows('main_content')): ?>
				<?php while(have_rows('main_content')): the_row();
				  $title = get_sub_field('title'); 
				?>
                    <h3><b><?php echo $title;?></b></h3>
					
				<?php if(have_rows('paragraph_repeat')): ?>
				<?php while(have_rows('paragraph_repeat')): the_row();
				  $paragraph = get_sub_field('paragraph'); 
				?>	
                    <p><?php echo $paragraph;?></p>
                <?php endwhile; ?>  
				<?php endif; ?>  
				
				<?php endwhile; ?>  
				<?php endif; ?>
				
				
                    <div class="block mt-[40px]">
                        <div class=" relative rounded-[10px] overflow-hidden w-[100%]">
                            <img class=" w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/ss-details-big.png" alt="">
                            <div class=" w-[100%] h-[100%] absolute left-0 top-0 p-[8%] pr-[30%]" style="background:linear-gradient(270deg, rgba(232, 164, 51, 0.50) 0%, #E8A433 39.5%, #E8A433 100%)">
							<?php if(get_sub_field('paragraph')): ?>
                                <p>" <?php echo get_sub_field('paragraph'); ?></p>
						    <?php endif; ?>
							
							<?php if(get_sub_field('author')): ?>
							<p class=" mt-[40px]"><?php echo get_sub_field('author'); ?></p>
							<?php endif; ?>
                            </div>
                        </div>
                    </div>


				<?php endif; ?>  
				<?php endwhile; ?>
				<?php endif; ?>
                </div>
            </div>
        </div>
		
        <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
            <div class="grid grid-cols-10 gap-5">
                <div class="col-span-7 md:col-span-7">
                    <h5 class="font-medium text-[35px] md:text-[56px] text-white">Read more customer stories</h5>
                </div>
                <div class="grid-item col-span-3 text-end pt-3">
                    <span class=" inline-block p-[10px] w-[50px] cursor-pointer rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle mr-3" id="prevSlide">
                        &lt;
                    </span>
                    <span class=" inline-block p-[10px] w-[50px] cursor-pointer rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle" id="nextSlide">
                        &gt;
                    </span>
                </div>
            </div>
            <div class=" block mt-8">
                <div class="customerStories">
				
				<?php
				$args = array(
					'post_type' => 'success-story',
					'post_status' => 'publish',
					'posts_per_page' => 10
				);
				$story_query = new WP_Query($args);
				?>
				<?php if ($story_query->have_posts()) : ?>
				<?php while ($story_query->have_posts()) : $story_query->the_post();?>
				<?php $image_id = get_post_thumbnail_id();
					$image_src = wp_get_attachment_image_src($image_id, 'full');
				?>
                    <div class="rounded-[20px]">
					<a href="<?php the_permalink(); ?>">
                        <div class=" relative rounded-[10px] overflow-hidden w-[100%]">
                             <img class=" w-[100%] h-[100%]" src="<?php echo esc_url($image_src[0]); ?>" alt="<?php the_title(); ?>"> 
                            <div class=" w-[100%] h-[100%] absolute left-0 top-0">
                                <p class=" text-[25px] font-bold text-white absolute left-[20px] bottom-[30px] max-w-[80%]"><?php the_title(); ?></p>
                            </div>
                        </div>
					</a>	
                    </div>
                <?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>    
                </div>
            </div>
        </div>

		<?php if (have_rows('success_story_detail_section')) : ?>
		<?php while (have_rows('success_story_detail_section')) : the_row(); ?>
		<?php if (get_row_layout() == 'cta_section') : ?>
        <section class="w-full relative grid items-center px-3  py-16">
            <div class="container mx-auto md:px-0 px-10 ready-hire-bg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="pl-7 pr-7 md:pl-48 md:pr-12 content-center">
					<?php if(get_sub_field('title')): ?>
                        <h2 class="text-left text-white text-[35px] md:text-5xl lg:text-[45px] font-medium  bg-title-text  md:leading-tight  md:mb-2">
                        <?php echo get_sub_field('title'); ?>
                        </h2>
					<?php endif; ?>	

					<?php if(get_sub_field('paragraph')): ?>		
                        <p class="text-center text-[20px] md:text-left text-white"> <?php echo get_sub_field('paragraph'); ?> </p>
                    <?php endif; ?>	
					<?php if(get_sub_field('button_name')): ?>
					<?php $hire_dev_btn_url =  get_sub_field('button_url'); ?>
					<div class="header-buttons mt-16 mb-10 text-center md:text-left">
					<a href="<?php echo esc_url( $hire_dev_btn_url ); ?>" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] text-dark-orange text-lg bg-white hover:bg-black hover:text-white"><?php echo get_sub_field('button_name'); ?></a>
					</div>
					<?php endif; ?>	
					
                    </div>
					
					<?php $hire_dev_main_img = get_sub_field('right_side_image');
						if (!empty($hire_dev_main_img) && isset($hire_dev_main_img['url'])):
					?>
                    <div class="px-6 py-10 lg:pr-[20%] content-center text-right">
                        <img src="<?php echo esc_url($hire_dev_main_img['url']); ?>" alt="<?php echo esc_attr($hire_dev_main_img['alt']); ?>" class="w-[100%] inline-block max-w-[450px]">
                    </div>
					<?php endif; ?>
                </div>
            </div>
        </section>
		<?php endif; ?>  
		<?php endwhile; ?>
		<?php endif; ?>
    </div>
</div>
<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer();?>