<?php
/**
 * Template Name: Contact Us Page
 *
 * @package sws
 */

 get_header('second');
?>
<section class="w-full p-4 py-[100px]">
	<div class="mx-auto w-[100%] max-w-[1280px]">
        <div class="grid grid-cols-1 lg:grid-cols-10 gap-4 h-[100%]  relative">
		<?php if (have_rows('contact_block')) : ?>
		<?php while (have_rows('contact_block')) : the_row(); ?>
		<?php if (get_row_layout() == 'left_section') : ?>
            <div class="grid-item col-span-5 content-center relative">
			
			<?php $image = get_sub_field('image');
				if (!empty($image) && isset($image['url'])):
			?>	
				<div class="block mb-8 mt-5">
                    <a href="<?php echo home_url();?>"> <img class="w-[100%] max-w-[250px]" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"> </a>
                </div>
			<?php endif; ?>	
				
                <div class="block max-w-[450px] lg:mb-[100px]">
				<?php if(get_sub_field('heading')): ?>
                    <h1 class="text-[25px] font-medium lg:text-[40px] mb-4 text-white"><?php echo get_sub_field('heading'); ?></h1>
				<?php endif; ?>

				<?php if(get_sub_field('short_description')): ?>	
                    <p class="text-[18px] lg:text-[18px] mb-8 text-[#A6A6A6]"><?php echo get_sub_field('short_description'); ?></p>
				<?php endif; ?>	
                    <ul class="hiw-bullat-point text-white">
					
					<?php if(have_rows('bullet_points')): ?>
					<?php while(have_rows('bullet_points')): the_row(); ?>
                        <li class="!text-white !text-[16px] !mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bullet-point" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M4.99021 7.18998C4.99021 5.97527 5.97443 4.99106 7.18913 4.99009H8.18988C8.77049 4.99009 9.32679 4.75959 9.73914 4.35112L10.4384 3.65089C11.2952 2.78922 12.6879 2.78533 13.5496 3.64117L13.5505 3.64214L13.5593 3.64992L14.2595 4.35015C14.6709 4.75959 15.2282 4.98911 15.8088 4.98911H16.8115C18.0262 4.98911 19.0114 5.9743 19.0114 7.18901V8.18878C19.0114 8.77036 19.2409 9.32666 19.6503 9.73902L20.3506 10.4392C21.2122 11.2961 21.2171 12.6887 20.3613 13.5504L19.6513 14.2604C19.2419 14.6718 19.0124 15.229 19.0124 15.8087V16.8123C19.0104 18.027 18.0252 19.0093 16.8115 19.0083H15.8068C15.2262 19.0083 14.669 19.2388 14.2576 19.6483L13.5574 20.3475C12.7025 21.2102 11.3098 21.216 10.4481 20.3611L10.4452 20.3592L9.7372 19.6512C9.32581 19.2417 8.76855 19.0122 8.18794 19.0113H7.18913C5.97443 19.0113 4.99021 18.027 4.99021 16.8123V15.8067C4.99021 15.2261 4.75972 14.6698 4.35028 14.2584L3.65102 13.5582C2.78837 12.7033 2.78254 11.3126 3.63643 10.4499C3.63643 10.4499 3.63935 10.448 3.64032 10.4461L4.34833 9.73707C4.75777 9.32569 4.98827 8.76842 4.98827 8.18684V7.18998" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.00391 12.1222L10.9811 14.1023L15.0541 10.0273" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
							<?php echo get_sub_field('item'); ?>
                        </li>
                    <?php endwhile; ?>	
					<?php endif; ?>    
                        
                    </ul>
                </div>
                <div class=" block max-w-[450px]">
                    <div class="grid grid-cols-12 lg:grid-cols-12 gap-4">
					<?php if(have_rows('logo_part')): ?>
					<?php while(have_rows('logo_part')): the_row(); ?>
						<div class="grid-item col-span-3">
                            <img class="w-[100%] max-w-[100%] rounded-[20px]" src="<?php echo get_sub_field('logo_image')['url']; ?>">
                        </div>
                    <?php endwhile; ?>	
					<?php endif; ?>     
                    </div>
                </div>
				<?php if(get_sub_field('trusted_by_text')): ?>
                <div class=" block max-w-[450px]">
                    <p class="text-[13px] lg:text-[13px] text-center text-[#A6A6A6]"><?php echo get_sub_field('trusted_by_text'); ?></p>
                </div>
				<?php endif; ?> 
			</div>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>	
			
		<div class="grid-item col-span-5 content-center relative">
			<div class=" bg-white rounded-[30px] min-h-[580px] py-[30px] px-[25px]">
              <iframe aria-label='Share Your Requirement' frameborder="0" style="height:580px;width:100%;border:none;" src='https://forms.smartworking.io/shubhankit/form/ContactUsForm/formperma/id4WgG4ZljDvVm388-5p-A9d9t9TFE8-Mm8cXswDscI'></iframe>
            </div>
		</div>
        </div>
    </div>

</section>
<?php get_footer('second');?>