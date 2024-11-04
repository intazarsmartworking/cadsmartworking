<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sws
 */

get_header();
?>
	<section class="bg-404 w-[100%] lg:py-[100px] lg:px-[200px]">
		<div class="container">
			<div class="grid grid-cols-1 gap-4">
				<div class=" text-white text-xl text-center pb-[45px]">
					<img class="inline h-[200px] w-[246px]" src="<?php echo get_template_directory_uri();?>/images/page-404.svg" />
				</div>
				<div class="">
					<div class="w-[100%] max-w-[600px] mx-auto text-center">
						<h1 class="text-[22px] lg:text-[56px] text-[#ffffff] leading-[56px] font-medium drop-shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)]">Whoops! Something went wrong</h1>
						<p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[20px] text-[#ffffff] leading-[28px] font-medium drop-shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)]">The page you were looking for is not there. A task has been created to fix this.</p>
					</div>
					<div class="w-[100%] text-center pt-[48px]">
						<a href="<?php echo home_url(); ?>">
						<button class="w-[180px] text-center rounded-[6px] inline-block h-[48px] border border-[#FF4D02] text-[#ffffff] lg:mr-[10px]">
							<svg class=" inline-block " xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
								<path d="M4.42188 12.2375H19.1909" stroke="white" stroke-width="1.38462" stroke-linecap="square"/>
								<path d="M9.64654 7.01294C9.64654 9.69886 7.28108 12.2376 4.42188 12.2376" stroke="white" stroke-width="1.38462" stroke-linecap="square"/>
								<path d="M9.64654 17.4622C9.64654 14.7763 7.28108 12.2375 4.42188 12.2375" stroke="white" stroke-width="1.38462" stroke-linecap="square"/>
							</svg>
							Back to Home
						</button>
						</a>
						<a href="<?php echo home_url('/hire-developer'); ?>">
						<button class="w-[180px] text-center rounded-[6px] inline-block h-[48px] border border-[#FF4D02] text-[#ffffff] lg:ml-[10px]">Hire Developer</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class=" w-[100%] bg-black min-h-[600px] py-[50px] px-[0px] lg:py-[100px] lg:px-[200px]" >
		<div class="container">
		<div class="grid grid-cols-1 gap-4 pb-[10px]">
			<div class="">
				<div class="w-[100%] max-w-[600px] mx-auto text-center">
					<h5 class="text-[22px] lg:text-[56px] text-[#ffffff] leading-[56px] font-medium drop-shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)]">In the meantime</h5>
					<p class="text-[15px] mt-1 lg:mt-[24px] lg:text-[20px] text-[#ffffff] leading-[28px] font-medium drop-shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)]">you may have been looking for one of the following:</p>
				</div>
			</div>
		</div>
			<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 pt-[50px]">
					<div class="col">
						<div class="europe-box rounded-3xl mb-5">
								<div class="grid grid-cols-1">
									<div class="w-full lg:w-[100%] px-6 py-6">
										<div class="icons-box">
											<svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
												<rect rx="8" ry="8" class="line" height="100%" width="100%" stroke-linejoin="round"/>
											</svg>
											<svg class="mb-12 icons-img" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
												<path d="M27.52 15.44C27.52 9.07722 22.3627 3.92 16 3.92C9.6372 3.92 4.47998 9.07722 4.47998 15.44C4.47998 21.8027 9.6372 26.96 16 26.96C22.3627 26.96 27.52 21.8027 27.52 15.44Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M18.3271 11.825H14.967C13.9669 11.825 13.1575 12.6358 13.1575 13.6346C13.1575 14.6333 13.9669 15.4441 14.967 15.4441H17.0345C18.0345 15.4441 18.844 16.2548 18.844 17.2538C18.844 18.2538 18.0345 19.0633 17.0345 19.0633H13.6743" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M16 19.0628V20.5821M16 10.2975V11.8306" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
										</div>
										<div class="mt-12">
											<h3 class="text-white text-xl font-bold leading-tight mb-3">Pricing </h3>
											<span class="text-white text-md">Check the hourly market rates of developer.</span>
										</div>
									</div>
									
									<div class="w-full lg:w-[100%] px-6 pb-8">
										<a class="text-nowrap text-[#FF4D02] font-[16px]" href="/pricing/">Check pricing 
											<svg class=" inline-block " xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
												<path d="M4.16666 10H15.8333M15.8333 10L9.99999 4.16667M15.8333 10L9.99999 15.8333" stroke="#FF4D02" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
										</a>
									<!-- <img src="<?php echo get_sub_field('main_image')['url']; ?>" alt="<?php echo get_sub_field('main_image')['url']; ?>"> -->
									</div>
								</div>
						</div>
					</div>
					<div class="col">
						<div class="europe-box rounded-3xl mb-5">
								<div class="grid grid-cols-1">
									<div class="w-full lg:w-[100%] px-6 py-6">
										<div class="icons-box">
											<svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
												<rect rx="8" ry="8" class="line" height="100%" width="100%" stroke-linejoin="round"/>
											</svg>
											<svg class="mb-12 icons-img" xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
												<path d="M16.3333 9.33333C16.3333 7.91885 15.7714 6.56229 14.7713 5.5621C13.7711 4.5619 12.4145 4 11 4H3.00002V24H12.3333C13.3942 24 14.4116 24.4214 15.1618 25.1716C15.9119 25.9217 16.3333 26.9391 16.3333 28M16.3333 9.33333V28M16.3333 9.33333C16.3333 7.91885 16.8953 6.56229 17.8954 5.5621C18.8956 4.5619 20.2522 4 21.6667 4H29.6667V24H20.3333C19.2725 24 18.2551 24.4214 17.5049 25.1716C16.7548 25.9217 16.3333 26.9391 16.3333 28" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
										</div>
										<div class="mt-12">
											<h3 class="text-white text-xl font-bold leading-tight mb-3">Our blog </h3>
											<span class="text-white text-md">Read the latest posts on our blog.</span>
										</div>
									</div>
									
									<div class="w-full lg:w-[100%] px-6 pb-8">
										<a class="text-nowrap text-[#FF4D02] font-[16px]" href="/blog/">View lastest posts
											<svg class=" inline-block " xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
												<path d="M4.16666 10H15.8333M15.8333 10L9.99999 4.16667M15.8333 10L9.99999 15.8333" stroke="#FF4D02" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
										</a>
									<!-- <img src="<?php echo get_sub_field('main_image')['url']; ?>" alt="<?php echo get_sub_field('main_image')['url']; ?>"> -->
									</div>
								</div>	
						</div>
					</div>
					<div class="col">
						<div class="europe-box rounded-3xl mb-5">
								<div class="grid grid-cols-1">
									<div class="w-full lg:w-[100%] px-6 py-6">
										<div class="icons-box">
											<svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
												<rect rx="8" ry="8" class="line" height="100%" width="100%" stroke-linejoin="round"/>
											</svg>
											<svg class="mb-12 icons-img"  xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
											<path d="M28.6666 15.3333C28.6712 17.0931 28.2601 18.8292 27.4666 20.4C26.5259 22.2823 25.0796 23.8656 23.2899 24.9724C21.5002 26.0792 19.4376 26.6658 17.3333 26.6667C15.5735 26.6712 13.8374 26.2601 12.2666 25.4667L4.66663 28L7.19996 20.4C6.40653 18.8292 5.99537 17.0931 5.99996 15.3333C6.00077 13.229 6.58744 11.1665 7.69425 9.37673C8.80106 7.58699 10.3843 6.14075 12.2666 5.19999C13.8374 4.40657 15.5735 3.9954 17.3333 3.99999H18C20.7791 4.15331 23.404 5.32634 25.3721 7.29447C27.3403 9.2626 28.5133 11.8875 28.6666 14.6667V15.3333Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
										</div>
										<div class="mt-12">
											<h3 class="text-white text-xl font-bold leading-tight mb-3">Schedule a call </h3>
											<span class="text-white text-md">Can’t find what you’re looking for?</span>
										</div>
									</div>
									
									<div class="w-full lg:w-[100%] px-6 pb-8">
										<a class="text-nowrap text-[#FF4D02] font-[16px]" href="https://calendly.com/smart-working/30min">Schedule a call
											<svg class=" inline-block " xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
												<path d="M4.16666 10H15.8333M15.8333 10L9.99999 4.16667M15.8333 10L9.99999 15.8333" stroke="#FF4D02" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
										</a>
									<!-- <img src="<?php echo get_sub_field('main_image')['url']; ?>" alt="<?php echo get_sub_field('main_image')['url']; ?>"> -->
									</div>
								</div>	
						</div>
					</div>
			</div>
		</div>
	</section>




<?php
get_footer();
