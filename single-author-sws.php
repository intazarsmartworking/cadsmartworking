<?php  get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="w-full">
    <div class="auther-page w-[100%] max-w-[1280px] mx-auto relative">

        <div class="grid grid-cols-1 py-3 lg:py-[80px]">
            <div class=" text-center">
               
            </div>
        </div>
    </div>
</section>
<section class="w-full p-3">
    <div class="auther-page w-[100%] max-w-[1280px] mx-auto relative">
        <div class="auther-page-bg">
		 
            <div class="grid grid-cols-1 lg:grid-cols-10">
				<div class="grid-item col-span-4 relative">
				  <?php $author_image = get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>
                    <img class="relative lg:absolute lg:top-[-30px] lg:left-[80px] w-[100%] max-w-[416px] rounded-[30px] border shadow-[0px_0px_40px_10px_rgba(255,77,2,0.40)]" src="<?php echo esc_url($author_image); ?>" alt="<?php echo esc_attr($author_name); ?>">
                </div>
                <div class="grid-item col-span-6 p-[20px] lg:p-[70px]">
                    <h5 class="text-white text-[20px] lg:text-[40px] font-medium mb-0"><?php echo esc_html(get_the_title()); ?></h5>
                    <p class="text-white text-[15px] lg:text-[20px] mb-0"><?php echo esc_html(get_field('author_designation')); ?></p>
                    <div class="block mt-2 mb-8">
                        <a href="<?php echo esc_url(get_field('linkedin_url')); ?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <g clip-path="url(#clip0_2005_3039)">
                                <path d="M18.5236 0H1.47639C1.08483 0 0.709301 0.155548 0.432425 0.432425C0.155548 0.709301 0 1.08483 0 1.47639V18.5236C0 18.9152 0.155548 19.2907 0.432425 19.5676C0.709301 19.8445 1.08483 20 1.47639 20H18.5236C18.9152 20 19.2907 19.8445 19.5676 19.5676C19.8445 19.2907 20 18.9152 20 18.5236V1.47639C20 1.08483 19.8445 0.709301 19.5676 0.432425C19.2907 0.155548 18.9152 0 18.5236 0ZM5.96111 17.0375H2.95417V7.48611H5.96111V17.0375ZM4.45556 6.1625C4.11447 6.16058 3.7816 6.05766 3.49895 5.86674C3.21629 5.67582 2.99653 5.40544 2.8674 5.08974C2.73826 4.77404 2.70554 4.42716 2.77336 4.09288C2.84118 3.7586 3.0065 3.4519 3.24846 3.21148C3.49042 2.97107 3.79818 2.80772 4.13289 2.74205C4.4676 2.67638 4.81426 2.71133 5.12913 2.84249C5.44399 2.97365 5.71295 3.19514 5.90205 3.47901C6.09116 3.76288 6.19194 4.09641 6.19167 4.4375C6.19488 4.66586 6.15209 4.89253 6.06584 5.104C5.97959 5.31547 5.85165 5.50742 5.68964 5.66839C5.52763 5.82936 5.33487 5.95607 5.12285 6.04096C4.91083 6.12585 4.68389 6.16718 4.45556 6.1625ZM17.0444 17.0458H14.0389V11.8278C14.0389 10.2889 13.3847 9.81389 12.5403 9.81389C11.6486 9.81389 10.7736 10.4861 10.7736 11.8667V17.0458H7.76667V7.49306H10.6583V8.81667H10.6972C10.9875 8.22917 12.0042 7.225 13.5556 7.225C15.2333 7.225 17.0458 8.22083 17.0458 11.1375L17.0444 17.0458Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2005_3039">
                                <rect width="20" height="20" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                    <p class="text-white text-[13px] lg:text-[24px]"><?php echo esc_html(get_field('description')); ?><p>
                </div>
            <div>
        </div>
	</div>
	
	</div>
	</div>
</section>

<section class="w-full p-3">
    <div class="auther-blog-list w-[100%] max-w-[1280px] mx-auto relative">
	<?php 
	$current_author_id = get_the_ID();
	$post_args = array(
		'post_type' => 'post',
		'meta_query' => array(
			array(
				'key' => 'author',
				'value' => '"' . $current_author_id . '"',
				'compare' => 'LIKE'
			)
		)
    );
	$author_posts = new WP_Query($post_args);

	if ($author_posts->have_posts()) :
    $counter = 1;
	while ($author_posts->have_posts()) : $author_posts->the_post();
	  $image_id = get_post_thumbnail_id();
	  $image_src = wp_get_attachment_image_src($image_id, 'full');
	?>
        
        
				
        <div class="grid grid-cols-1 lg:grid-cols-10 hover:bg-[#2A0F04] cursor-pointer">
            <div class="grid-item col-span-1 content-center p-3 relative text-center">
                <h2 class="text-[#491804] text-[25px] lg:text-[56px] font-medium mb-0"> <?php echo $counter; ?> </h2>
            </div>
            <div class="grid-item col-span-6 content-center p-3 relative">
                <a href="<?php the_permalink(); ?>"> <h1 class="text-white text-[18px] lg:text-[28px] font-medium mb-5"><?php the_title();?></h1> </a>
                <a href="<?php the_permalink(); ?>"> <p class="text-white text-[13px] lg:text-[16px] font-normal"> <?php echo wp_trim_words(get_the_content(), 10); ?> </p> </a>
            </div>
            <div class="grid-item col-span-3 text-center content-center p-3 relative">
                <img class="blog-img w-[100%] max-w-[220px]" src="<?php echo esc_url($image_src[0]); ?>" alt="<?php the_title(); ?>">
            </div>
        </div>
		
		<?php $counter++; endwhile; else : ?>
            <p>No posts found for this author.</p>
        <?php endif; wp_reset_postdata(); ?>

    </div>
</section>

<section class="w-[100%] px-[5%] my-[40px]">
    <div class="relative grid grid-cols-1 lg:grid-cols-2 content-center gap-0 rounded-[24px] vetting-bg py-[32px] px-[10%]">
        <img class="absolute h-[100%] w-[50%] right-[0px] top-[0px]" src="<?php echo get_template_directory_uri();?>/images/bg-line-box.png" />
        <div class="pt-[60px]">
            <h6 class=" text-white text-[32px] lg:text-[62px] lg:leading-[62px]">Ready to Hire
            a Developer? </h6>
            <p class=" text-white text-[16px] lg:text-[24px] lg:mt-[30px] mb-[30px]">It is quick and easy with Smart Working</p>
        
            <a href="/contact-us/" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] text-dark-orange text-lg bg-white hover:bg-black hover:text-white">Schedule a Call</a>
        </div>
        
       
        <div class="text-end pt-[40px] lg:pt-[0px]">
            <img class="w-[100%] max-w-[500px]" src="<?php echo get_template_directory_uri();?>/images/about-bottom-img.png" />
        </div>
    </div>
</section>

<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer();?>