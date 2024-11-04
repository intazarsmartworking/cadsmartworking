<?php
/**
 * Template Name: Term Of Use
 *
 * @package sws
 */

 get_header();
?>

<?php if (have_rows('privacy_block')) : ?>
<?php while (have_rows('privacy_block')) : the_row(); ?>
<?php if (get_row_layout() == 'first_section') : ?>
<section class="w-full">
    <div class="auther-page w-[100%] max-w-[1280px] mx-auto relative">

        <div class="grid grid-cols-1 py-3 lg:py-[80px]">
            <div class=" text-center">
                <h1 class="gradient-text text-[25px] lg:text-[56px] font-medium mb-0"><?php the_title();?></h1>
				<?php if(get_sub_field('last_updated')): ?>
                <p class="text-[#B8B8B8] text-[15px] lg:text-[20px] mb-0">Last updated: <?php echo get_sub_field('last_updated'); ?> </p>
				<?php endif; ?>
            </div>
        <div>
    </div>
</section>
<?php endif; ?>

<?php if (get_row_layout() == 'privacy_data') : ?>
<section class="w-full p-3" id="sticky-details">
    <div class="auther-page w-[100%] max-w-[1280px] mx-auto relative">
        <div class="auther-page-bg show-more-box">
            <div class="grid grid-cols-1 lg:grid-cols-10">
                <div class="grid-item col-span-2 relative px-[30px]" id="fix-side-box">
                    <div class="stickysidenav mt-[50px]">
                        <p class="text-[20px] text-white font-medium !mb-2 pl-[20px]">In this article</p>
                        <ul class="scroll-menu">
						<?php if(have_rows('privacy_part')): ?>
						  <?php $section_count = 1; ?>
							<?php while(have_rows('privacy_part')): the_row(); ?>
							<?php 
							  $main_title = get_sub_field('heading'); 
							  $unique_id = 'target' . $section_count;
							?>
                            <li><a class=" cursor-pointer" data-location="<?php echo $unique_id; ?>"><?php echo $main_title;?></a></li>
						<?php $section_count++;?>
						<?php endwhile; ?>	
						<?php endif; ?>	
                        </ul>
                    </div>
                </div>
                <div class="grid-item col-span-8 p-[20px] lg:p-[70px]">
                    <p class="text-[20px] text-white"> <?php echo get_the_content();?> </p>
                    
					<?php if(have_rows('privacy_part')): ?>
					  <?php $section_count = 1; ?>
						<?php while(have_rows('privacy_part')): the_row(); ?>
						<?php 
						  $main_title = get_sub_field('heading'); 
						  $unique_id = 'target' . $section_count;
						?>
					<div class="scroll-section" id="<?php echo $unique_id; ?>">
                        <h5><?php echo $main_title;?></h5>
						<?php if(have_rows('description')): ?>
						<?php while(have_rows('description')): the_row(); ?>
                        <p> <?php echo get_sub_field('paragraph') ;?> </p>
–                       <?php endwhile; ?>	
						<?php endif; ?>
                       
                    </div> 
					<?php $section_count++;?>
                    <?php endwhile; ?>	
					<?php endif; ?>	
                      
                    
                </div>
            <div>
        </div>
        
    </div>
</section>
<?php endif; ?>

<?php if (get_row_layout() == 'cta_section') : ?>
<section class="w-[100%] px-[5%] my-[40px]">
    <div class="relative grid grid-cols-1 lg:grid-cols-2 content-center gap-0 rounded-[24px] vetting-bg py-[32px] px-[10%]">
        <img class="absolute h-[100%] w-[50%] right-[0px] top-[0px]" src="<?php echo get_template_directory_uri();?>/images/bg-line-box.png" />
        <div class="pt-[60px]">
		<?php if(get_sub_field('heading')): ?>
            <h5 class=" text-white text-[32px] lg:text-[62px] lg:leading-[62px]"> <?php echo get_sub_field('heading'); ?> </h5>
		<?php endif; ?>

		<?php if(get_sub_field('paragraph')): ?>
            <p class=" text-white text-[16px] lg:text-[24px] lg:mt-[30px] mb-[30px]"> <?php echo get_sub_field('paragraph'); ?> </p>
		<?php endif; ?>	
        
		<?php if(get_sub_field('button_name')): ?>
            <a class="w-[150px] h-[40px] bg-white rounded-[10px] px-[15px] py-[8px] text-[18px] text-[#FF4D02]" href="<?php echo get_sub_field('button_link'); ?>"><?php echo get_sub_field('button_name'); ?></a>
		<?php endif; ?>		
        </div>
        
	    <?php $right_image = get_sub_field('right_image');
			if (!empty($right_image) && isset($right_image['url'])):
		?>
        <div class="text-end pt-[40px] lg:pt-[0px]">
            <img class="w-[100%] max-w-[500px]" src="<?php echo esc_url($right_image['url']); ?>" />
        </div>
		<?php endif; ?>
		
    </div>
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>


<script type="text/javascript">
	jQuery(window).bind("load", function() {
		callFunction()
	});
</script>

<?php get_footer();?>