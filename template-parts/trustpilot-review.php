<?php if (have_rows('block')) : ?>
<?php while (have_rows('block')) : the_row(); ?>
<?php if (get_row_layout() == 'review_section') : ?>
<div class="w-full relative grid items-center py-16">
    <div class="container mx-auto md:px-0 px-10">
	
        <?php if(get_sub_field('top_title')): ?>
        	<h4 class="text-center small-intro"> <?php echo get_sub_field('top_title'); ?> </h4>
		<?php endif; ?>
		
		<?php if(get_sub_field('first_title')): ?>
        <h2 class="text-[35px] sm:text-[40px] lg:text-[56px] 3xl:text-[58px] font-medium text-white text-center px-0  md:leading-tight">
		 <span class="inline-block align-middle"><?php echo get_sub_field('first_title'); ?></span>
		 <?php $title_image = get_sub_field('title_image');
		  if (!empty($title_image) && isset($title_image['url'])):
		 ?>
		 
		 <img class="inline-block align-middle" src="<?php echo esc_url($title_image['url']); ?>" alt="<?php echo esc_url($title_image['alt']); ?>"/> 
		 <?php endif; ?>
		 <span class="inline-block align-middle"><?php echo get_sub_field('second_title'); ?></span> 
		</h2>
		<?php endif; ?>
		
		<?php if(get_sub_field('description')): ?>
        <p class="text-white text-2xl font-normal text-center mt-6 px-0 "> <?php echo get_sub_field('description'); ?> </p>
		<?php endif; ?>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-10">
		
		<?php if(have_rows('review_box')): ?>
		<?php while(have_rows('review_box')): the_row(); ?>
		<?php 
			$name = get_sub_field('name'); 
			$description = get_sub_field('description'); 
		?>
        <div class="trustpilot-bg mb-5">
		  <div class="flex">
		  
			  <?php $auth_image = get_sub_field('image');
				  if (!empty($auth_image) && isset($auth_image['url'])):
			  ?>	
			  <div class="pr-4">
				<img class="mb-7 w-48" src="<?php echo esc_url($auth_image['url']); ?>" alt="<?php echo esc_url($auth_image['alt']); ?>">
			  </div>
			  <?php endif; ?>
			  <div>
				<p class="font-bold text-base text-white"> <?php echo $name;?> </p>
				<p class="text-sm pt-5 pilot-descri"> <?php echo $description;?> </p>
			  </div>
		 </div>
		</div>
		<?php endwhile; ?>	
		<?php endif; ?> 

		
		</div>
		
		<?php if(get_sub_field('button_name')): ?>
		<div class="header-buttons mt-12 text-center">
		  <a href="<?php echo get_sub_field('button_link'); ?>" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange"><?php echo get_sub_field('button_name'); ?></a>
		</div>
		<?php endif; ?> 

    </div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>