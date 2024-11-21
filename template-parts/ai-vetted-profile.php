<div class="w-full relative grid items-center py-16" id="profile-vet">
	<div class="container mx-auto md:px-0 px-10">
	<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'ai_vetted_section') : ?>	
	<?php if(get_sub_field('small_title')): ?>	
	  <h4 class="text-center small-intro"> <?php echo get_sub_field('small_title'); ?> </h4>
	<?php endif; ?> 
	  
	<?php if(get_sub_field('main_heading')): ?>	  
	  <h2 class=" text-[35px] sm:text-[40px] lg:text-[56px] 3xl:text-58 font-medium text-white text-center px-0 lg:px-96 md:leading-tight"><?php echo get_sub_field('main_heading'); ?></h2>
	<?php endif; ?> 

	<?php if(get_sub_field('subheading')): ?>	
	  <p class="text-center text-white font-medium text-[16px] md:text-2xl pt-[10px]"> <?php echo get_sub_field('subheading'); ?> </p>
	<?php endif; ?> 

	<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>  
	  <div class="grid grid-cols-12 lg:grid-cols-12 gap-4 mt-[40px]">
		<div class="col-span-12 lg:col-span-4 px-6">
			<?php display_ai_vetted_profile_categories();?>
		</div>
		<div class="col-span-12 lg:col-span-8 border rounded-lg border-[#a962444d]">
			<div class="slide-show grid grid-cols-1 max-w-[100%]" >
						<div class="dev-section">
						<!-- Posts will be loaded here via AJAX -->	
						</div> 
			</div>
		</div>
		<!--<div class="grid-item col-span-8 p-3 border rounded-lg border-[#a962444d]">
			<div class="slide-show max-w-[100%] mt-3">

				 <div class="your-class" id="vetted-profile">
					
					<?php
					$category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;
					$args = array(
						'post_type' => 'ai-vetted-profile',
						'posts_per_page' => -1,
						'orderby' => 'date',
						'order' => 'DESC',
					  );
					  
					  if ($category_id) {
						$args['tax_query'] = array(
                        array(
                            'taxonomy' => 'vettedcategory',
                            'field' => 'term_id',
                            'terms' => $category_id,
                        ),
						);
					  }
					  $query = new WP_Query($args);
					  if ($query->have_posts()) {
					  $total_posts = $query->post_count;
					  $counter = 0;
						while ($query->have_posts() && $counter < 5) {
						$query->the_post();
						$designation = get_field('profile');
						$dev_image_id = get_post_thumbnail_id();
						$dev_image_src = wp_get_attachment_image_src($dev_image_id, 'full');
					?>
					<a href="/contact-us/" class="grid-item col-span-3 block rounded-[12px] developer-sec-pic">
						<img src="<?php echo esc_url($dev_image_src[0]);?>" class="rounded-xl">
						<div class="short-bio">
							<p class="text-white pb-2 text-center text-xl"><?php the_title();?> </p>
							<p class="text-white text-center mb-5 text-sm"><?php echo esc_html($designation);?></p>
							<div class="block pb-3">
								<ul class="skill-card-itme">
								<?php
								  if (have_rows('skills')) {
								  while (have_rows('skills')) {
									the_row();
									$skill = get_sub_field('skill');
								?>	
									<li><?php echo esc_html($skill);?></li>
								  <?php }}?>	
								</ul>
							</div>
						</div>
					</a>
					  <?php $counter++; }} ?>
				</div> 
			</div>
			
			<?php
				$category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;
				$args = array(
					'post_type' => 'ai-vetted-profile',
					'posts_per_page' => -1,
					'orderby' => 'date',
					'order' => 'DESC',
				  );
				  
				  if ($category_id) {
					$args['tax_query'] = array(
					array(
						'taxonomy' => 'vettedcategory',
						'field' => 'term_id',
						'terms' => $category_id,
					),
					);
				  }
				  $query = new WP_Query($args);
				  if ($query->have_posts()) {
				  $total_posts = $query->post_count;
				  if ($total_posts > 5) {
			?>
			<div>
			<section class="section-introduction p-3">
				<div class="container-circule">
				<?php
				$counter = 0;
				while ($query->have_posts() && $counter < 3) {
				$query->the_post();
				$dev_image_id = get_post_thumbnail_id();
				$dev_image_src = wp_get_attachment_image_src($dev_image_id, 'full');
				?>
					<div class="item-<?php echo $counter;?> circle-box"><img src="<?php echo esc_url($dev_image_src[0]);?>"></div>
				<?php 
				$counter++; }
				$remaining_count = $total_posts - 7;
				if ($remaining_count > 0) {
				?>	
					<div class="item-4 circle-box">
						<p>+<?php echo $remaining_count;?></p>
					</div>
				<?php }?>	
				</div>
			</section>
			</div>
			<?php
			 	wp_reset_postdata();
						} else {
							echo '<p>No posts found.</p>';
				  }}
					?>
		</div> -->
	  </div>
	</div>
</div>