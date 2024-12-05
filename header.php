<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sws
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
  <?php
		$site_icon_url = get_site_icon_url();
		if ($site_icon_url) {
			echo '<link rel="icon" href="' . esc_url($site_icon_url) . '" sizes="32x32" />';
		}
	?>
	<?php wp_head(); ?>

	<script>
window.dataLayer = window.dataLayer || [];
dataLayer.push({
    'categories': '<?php echo is_category() ? get_queried_object()->name : (is_single() ? get_the_category()[0]->name : 'General'); ?>',
    'pageTitle': '<?php wp_title(); ?>',
    'tags': '<?php echo is_single() ? implode(", ", wp_get_post_tags(get_the_ID(), array('fields' => 'names'))) : ''; ?>',
	  'publishDate': '<?php echo is_single() ? get_the_date('Y-m-d') : ''; ?>',
	  'contentclassification': '<?php echo is_single() ? implode(", ", wp_get_post_terms(get_the_ID(), 'classification', array('fields' => 'names'))) : ''; ?>',
	  'channel': '<?php echo is_single() ? implode(", ", wp_get_post_terms(get_the_ID(), 'channel', array('fields' => 'names'))) : ''; ?>',
	  'targetaudience': '<?php echo is_single() ? implode(", ", wp_get_post_terms(get_the_ID(), 'audience', array('fields' => 'names'))) : ''; ?>',
    'role': '<?php echo is_single() ? implode(", ", wp_get_post_terms(get_the_ID(), 'role', array('fields' => 'names'))) : ''; ?>',
    'skill': '<?php echo is_single() ? implode(", ", wp_get_post_terms(get_the_ID(), 'skill', array('fields' => 'names'))) : ''; ?>',
	  'pillartopic': '<?php 
        $selected_post_id = get_post_meta(get_the_ID(), '_selected_post_id', true); 
        if ($selected_post_id) {
            $selected_post = get_post($selected_post_id);
            echo esc_js($selected_post->post_title); 
        } else {
            echo ''; 
        }
    ?>',
	  
});
</script>

</head>
<!-- background-image: url('<?php echo get_template_directory_uri();?>/images/Homepage.png'); -->
<body  <?php body_class(); ?> style="">
<?php wp_body_open(); ?>



<header class="main-header w-[100%]">
  <div class="mobile-menu">
    <div class="grid grid-cols-10 content-center h-[100%] header-box relative">
      <div class="col-span-7 content-center">
        <?php if(get_field('header_logo', 'options')): ?>
          <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
            <img class="h-[25px]" src="<?php echo get_field('header_logo', 'options')['url']; ?>" alt="<?php bloginfo('name'); ?>">
          </a>
        <?php endif; ?>
      </div>
      <div class="col-span-3 content-center text-right">
        <button id="mobile-menu-show" class="button inline-block button-small rounded-md p-[8px] border-little-orange border-2 text-[16px] text-white radial-gradient-login">
          <img class="w-[22px]" src="<?php echo get_template_directory_uri();?>/images/menu-icons.svg">
        </button>
      </div>
    </div>
  </div>

  <div class="container mx-auto !p-0 relative desk-top-menu" id="mobile-show-menu">
    <div class="grid grid-cols-1 md:grid-cols-10 lg:gap-4 content-center h-[100%] header-box relative">
      <div class="col-span-2 content-center hide-mobile">
        <?php if(get_field('header_logo', 'options')): ?>
          <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
            <img class="h-[23px]" src="<?php echo get_field('header_logo', 'options')['url']; ?>" alt="<?php bloginfo('name'); ?>">
          </a>
        <?php endif; ?>
      </div>
      <div class="col-span-5 content-center relative">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header_menu',
            'menu_class'     => 'header-menu',
            'container'      => false,
            'walker'         => new Hire_Custom_Walker_Nav_Menu()
        ));
        ?>
      </div>
      <div class="col-span-3 content-center text-start md:text-end">
        <!-- <a href="/find-a-developer/" class="button mobile-m-0 inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-little-orange border-2 text-[16px] text-white radial-gradient-login mr-0 lg:mr-[20px] hover:bg-dark-orange" target="">FIND A TECHNICIAN</a> -->
        <a href="/contact-us/" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange " target="">CONTACT US</a>
      </div>
    </div> 
    <div class="mega-menu-box">
      
      <div class="show-main-menu" id="hireDevId">
          <div class="grid grid-cols-1 md:grid-cols-9 h-[100%]">
            <div class="col-span-3">
    <?php
        $active_menu = 'frontEndDev';
        $menu_data = get_field('hire_dev_menu', 'option');
    ?>
    <ul class="mega-menu-left">
        <?php 
            if ($menu_data) : 
                foreach ($menu_data as $index => $row) : 
                    if ($index >= 0 && $index < 9) { // First row: Items 1 to 9 (index 0 to 8)
                        $data_menu = $row['data_menu']; 
                        $menu_image = $row['menu_image'];
                        $menu_name = $row['menu_name'];
                        $menu_url = $row['menu_url'];

                        $menu_image_url = is_array($menu_image) ? $menu_image['url'] : esc_url($menu_image);
        ?>
            <li class="<?php echo ($data_menu === $active_menu) ? 'active' : ''; ?>" data-menu="<?php echo esc_attr($data_menu); ?>">
                <a href="<?php echo $menu_url; ?>">
                    <img class="w-[24px] menu-icons" src="<?php echo esc_url($menu_image_url); ?>" alt="<?php echo esc_attr($menu_name); ?>">
                    <span class="menu-title"><?php echo esc_html($menu_name); ?></span>
                </a>
            </li>
        <?php 
                    }
                endforeach; 
            else : 
        ?>
            <li>No menu items found.</li>
        <?php endif; ?>
    </ul>
</div>

<div class="col-span-3 py-[12px]">
    <ul class="mega-menu-left">
        <?php 
            if ($menu_data) : 
                foreach ($menu_data as $index => $row) : 
                    if ($index >= 9 && $index < 18) { // Second row: Items 10 to 18 (index 9 to 17)
                        $data_menu = $row['data_menu']; 
                        $menu_image = $row['menu_image'];
                        $menu_name = $row['menu_name'];
                        $menu_url = $row['menu_url'];

                        $menu_image_url = is_array($menu_image) ? $menu_image['url'] : esc_url($menu_image);
        ?>
            <li class="<?php echo ($data_menu === $active_menu) ? 'active' : ''; ?>" data-menu="<?php echo esc_attr($data_menu); ?>">
                <a href="<?php echo $menu_url; ?>">
                    <img class="w-[24px] menu-icons" src="<?php echo esc_url($menu_image_url); ?>" alt="<?php echo esc_attr($menu_name); ?>">
                    <span class="menu-title"><?php echo esc_html($menu_name); ?></span>
                </a>
            </li>
        <?php 
                    }
                endforeach; 
            else : 
        ?>
            <li>No menu items found.</li>
        <?php endif; ?>
    </ul>
</div>

<div class="col-span-3 py-[12px]">
    <ul class="mega-menu-left">
        <?php 
            if ($menu_data) : 
                foreach ($menu_data as $index => $row) : 
                    if ($index >= 18) { // Third row: Items 19 and beyond (index 18 onwards)
                        $data_menu = $row['data_menu']; 
                        $menu_image = $row['menu_image'];
                        $menu_name = $row['menu_name'];
                        $menu_url = $row['menu_url'];

                        $menu_image_url = is_array($menu_image) ? $menu_image['url'] : esc_url($menu_image);
        ?>
            <li class="<?php echo ($data_menu === $active_menu) ? 'active' : ''; ?>" data-menu="<?php echo esc_attr($data_menu); ?>">
                <a href="<?php echo $menu_url; ?>">
                    <img class="w-[24px] menu-icons" src="<?php echo esc_url($menu_image_url); ?>" alt="<?php echo esc_attr($menu_name); ?>">
                    <span class="menu-title"><?php echo esc_html($menu_name); ?></span>
                </a>
            </li>
        <?php 
                    }
                endforeach; 
            else : 
        ?>
            <li>No menu items found.</li>
        <?php endif; ?>
    </ul>
</div>

            <!--<div class="col-span-3 p-4">
              <div class="max-w-md relative z-10 rounded-[12px] min-h-[250px] bg-white overflow-hidden shadow-lg mx-auto">
                <div class="px-6 py-4">
                  <div class="block">
                    <p class="text-[14px] text-[#64748b]">Hourly rate</p>
                  </div>
                  <div class="block">
                    <p class="text-[32px] font-[500] ">£20/hr</p>
                  </div>
                  <div class="block w-100 mt-3 h-[90px] border-b border-gray-400">
                    <div class="sliderwrap">
                      <input class="home-range-slider header-range" type="range" max="100" value="0">
                    </div>
                  </div>
                  <div class="block pt-5">
                    <div class="flex">
                      <div class="grow">
                        <span class="text-[11px] font-[400] text-gray-500 ">Amount saved per month</span>
                      </div>
                      <div class="grow text-end">
                        <span class="text-[15px] price-value font-[500] text-black">£ </span>
                      </div>
                      
                    </div>
                  </div>

                
                </div>
              </div>
              <p class="text-[18px] text-[#FF4E03] mt-8">Curious About Cost?</p>
              <p class="text-[12px] text-[#fff] mt-3">Find out the price of your next remote hire here.</p>
              <a href="/pricing/"> <button class="block py-2 w-[100%] mt-4 rounded-lg text-center px-8 bg-[#FF4E03] text-[16px] text-[#fff]">CLICK TO CALCULATE NOW</button> </a>
            </div> -->
          </div>
      </div>

      <div class="show-main-menu" id="insightsId">
        <div class="grid grid-cols-1 md:grid-cols-9 h-[100%]">
            <div class="col-span-3">
              <ul class="mega-menu-left">
                <li>
                  <a href="#">
                    <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/front-end-development.svg">
                    <span class="menu-title">Blogs</span>
                    <span class="menu-sub-title">Learn from the experts</span>
                  </a>
                </li>
                
              </ul>
            </div>
            <div class="col-span-3 py-[12px]"></div>
            <div class="col-span-3 p-4">
            <div class="max-w-md relative z-10 rounded-3xl min-h-[250px] bg-white overflow-hidden shadow-lg mx-auto">
                <div class="px-6 py-4">
                  <div class="block">
                    <p class="text-[14px] text-[#64748b]">Hourly rate</p>
                  </div>
                  <div class="block">
                    <p class="text-[32px] font-[500] ">£20/hr</p>
                  </div>
                  <div class="block w-100 mt-3 h-[90px] border-b border-gray-400">
                    <div class="sliderwrap">
                      <input class="home-range-slider header-range" type="range" max="100" value="0">
                    </div>
                  </div>
                  <div class="block pt-5">
                    <div class="flex">
                      <div class="grow">
                        <span class="text-[11px] font-[400] text-gray-500 ">Amount save</span>
                      </div>
                      <div class="grow text-end">
                        <span class="text-[15px] price-value font-[500] text-black">£ </span>
                      </div>
                      
                    </div>
                  </div>

                
                </div>
              </div>
            </div>
          </div>
      </div>


    </div>

  </div>
</header>
