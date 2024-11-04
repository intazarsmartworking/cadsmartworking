<?php
/**
 * Template Name: Thank You
 *
 * @package sws
 */

get_header();
?>
<div class="w-full relative">
    <img class="bg-img absolute w-[100%] max-w-[initial] left-[0] z-0 top-[-800px]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
    <div class="w-full relative z-10">
    <?php if (have_rows('thank_you_section')) : ?>
        <?php while (have_rows('thank_you_section')) : the_row(); ?>
            <?php if (get_row_layout() == 'first_section') : ?>
            <section class="bg-404 w-[100%] lg:py-[100px] lg:px-[200px]">
                <div class="container">
                    <div class="grid grid-cols-1 gap-4">
                        <div class="text-white text-xl text-center pb-[45px]">
                            <?php 
                            $image = get_sub_field('image');
                            if (!empty($image) && isset($image['url'])) : ?>
                                <img class="inline h-[200px] w-[246px]" src="<?php echo esc_url($image['url']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="">
                            <div class="w-[100%] max-w-[600px] mx-auto text-center">
                                <?php if(get_sub_field('title')) : ?>
                                    <h1 class="text-[22px] lg:text-[56px] text-[#ffffff] leading-[56px] font-medium drop-shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)]"><?php echo get_sub_field('title'); ?></h1>
                                <?php endif; ?>

                                <?php if(get_sub_field('message')) : ?>
                                    <p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[20px] text-[#ffffff] leading-[28px] font-medium drop-shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)]"><?php echo get_sub_field('message'); ?></p>
                                <?php endif; ?>
                            </div>
                            <?php if(get_sub_field('button_name')) : ?>
                                <div class="w-[100%] text-center pt-[48px]">
                                    <a href="<?php echo home_url(); ?>">
                                        <button class="w-[180px] text-center rounded-[6px] inline-block h-[48px] border border-[#FF4D02] text-[#ffffff] lg:mr-[10px]">
                                            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                <path d="M4.42188 12.2375H19.1909" stroke="white" stroke-width="1.38462" stroke-linecap="square"/>
                                                <path d="M9.64654 7.01294C9.64654 9.69886 7.28108 12.2376 4.42188 12.2376" stroke="white" stroke-width="1.38462" stroke-linecap="square"/>
                                                <path d="M9.64654 17.4622C9.64654 14.7763 7.28108 12.2375 4.42188 12.2375" stroke="white" stroke-width="1.38462" stroke-linecap="square"/>
                                            </svg>
                                            <?php echo get_sub_field('button_name'); ?>
                                        </button>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>

            <?php if (get_row_layout() == 'meantime_section') : ?>
            <section class="w-[100%] bg-black min-h-[600px] py-[50px] px-[0px] lg:py-[100px] lg:px-[200px]">
                <div class="container">
                    <div class="grid grid-cols-1 gap-4 pb-[10px]">
                        <div class="">
                            <div class="w-[100%] max-w-[600px] mx-auto text-center">
                                <?php if(get_sub_field('title')) : ?>
                                    <h5 class="text-[22px] lg:text-[56px] text-[#ffffff] leading-[56px] font-medium drop-shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)]"><?php echo get_sub_field('title'); ?></h5>
                                <?php endif; ?>
                                <?php if(get_sub_field('paragraph')) : ?>    
                                    <p class="text-[15px] mt-1 lg:mt-[24px] lg:text-[20px] text-[#ffffff] leading-[28px] font-medium drop-shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)]"><?php echo get_sub_field('paragraph'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 pt-[50px]">
                        <?php if(have_rows('box_part')) : ?>
                            <?php while(have_rows('box_part')) : the_row(); 
                                $title = get_sub_field('title');
                                $paragraph = get_sub_field('paragraph');
                                $link_name = get_sub_field('link_name');
                                $link_url = get_sub_field('link_url');
                            ?>
                                <div class="col">
                                    <div class="europe-box rounded-3xl mb-5">
                                        <div class="grid grid-cols-1">
                                            <div class="w-full lg:w-[100%] px-6 py-6">
                                                <div class="icons-box">
                                                    <?php $image_new = get_sub_field('image');
                                                    if (!empty($image_new) && isset($image_new['url'])) : ?>    
                                                        <img src="<?php echo esc_url($image_new['url']); ?>">
                                                    <?php endif; ?>        
                                                </div>
                                                <div class="mt-12">
                                                    <h3 class="text-white text-xl font-bold leading-tight mb-3"><?php echo $title; ?></h3>
                                                    <span class="text-white text-md"><?php echo $paragraph; ?></span>
                                                </div>
                                            </div>
                                            
                                            <div class="w-full lg:w-[100%] px-6 pb-8">
                                                <a class="text-nowrap text-[#FF4D02] font-[16px]" href="<?php echo $link_url; ?>"><?php echo $link_name; ?> 
                                                    <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M4.16666 10H15.8333M15.8333 10L9.99999 4.16667M15.8333 10L9.99999 15.8333" stroke="#FF4D02" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
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
        <?php endwhile; ?>  
    <?php endif; ?>  
    </div>
</div>
<?php get_footer(); ?>
