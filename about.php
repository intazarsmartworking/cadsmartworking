<?php
/**
 * Template Name: About Page
 *
 * @package sws
 */

 get_header();
?>
<div class=" w-full relative">
  	<img class="bg-img absolute w-[150%] max-w-[initial] opacity-[0.6] left-[-20%] z-0 top-[-12%]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
  	<div class=" w-full relative z-10">

			<?php if (have_rows('about_block')) : ?>
			<?php while (have_rows('about_block')) : the_row(); ?>
				<?php if (get_row_layout() == 'first_section') : ?>
					<section class="w-[100%] lg:py-[100px] lg:px-[100px] section-about-us">
						<!-- <img  src="<?php echo get_template_directory_uri();?>/images/bg-about.png" class=" absolute left-0 top-0 w-[100%] z-1 opacity-[0.5] section-about-us-bg"> -->
						<div class="container relative z-10">
							<div class="timeline">
								<div class="timeline-box">
									<span class="default-line"></span>
									<span class="draw-line"></span>
									
									<div class="timeline-item pb-[150px]" id="scroll-effect-2">
										<div class="timeline-content-box max-w-[1000px]">
										<?php if(get_sub_field('second_section_heading')): ?>
											<h1 class="text-[22px] lg:text-[56px] text-[#FF4D02] lg:leading-[56px] font-medium"> <?php echo get_sub_field('second_section_heading'); ?> </h1>
										<?php endif; ?>	
										
										<?php if(get_sub_field('second_section_paragraph')): ?>
											<p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[28px] text-[#ffffff] lg:leading-[36px] font-medium">
												<?php echo get_sub_field('second_section_paragraph'); ?>
											</p>
										<?php endif; ?>	
										</div>  
									</div>
									
									<div class="timeline-item pb-[180px]" id="scroll-effect-4">
										<div class="timeline-content-box relative lg:left-[-90px] bg-[#1f0c04] border border-[rgba(245,248,255,0.1)] rounded-[12px] min-h-[400px] max-w-[1380px] p-3 lg:p-[100px]">
											<div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
												<div class="">
												<?php if(get_sub_field('fourth_section_paragraph')): ?>
													<p class="text-[15px] lg:text-[28px] text-[#ffffff] lg:leading-[36px] font-medium">
														<?php echo get_sub_field('fourth_section_paragraph'); ?>
													</p>
												<?php endif; ?>	
												</div>
												<div class="pt-7">
													<img class=" relative lg:absolute lg:right-10 lg:bottom-[-60px] inline w-[100%] max-w-[416px] rounded-[30px] border shadow-[0px_0px_40px_10px_rgba(255,77,2,0.40)]" src="<?php echo get_sub_field('fourth_section_image')['url']; ?>" />

												</div>
											</div>
										</div> 
									</div>
									
									
									<div class="timeline-item  pb-[150px] curv-box" id="scroll-effect-3">
										<img class="absolute curv-img w-[36px] left-[0px] top-[-80px]" src="<?php echo get_template_directory_uri();?>/images/curv-line.png" />
										<div class="timeline-content-box max-w-[1000px]">
										<?php if(get_sub_field('third_section_heading')): ?>
											<p class="text-[22px] lg:text-[56px] text-[#FF4D02] leading-[56px] font-medium"> <?php echo get_sub_field('third_section_heading'); ?> </p>
										<?php endif; ?>
										
											<?php if(get_sub_field('third_section_paragraph')): ?>
											<p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[28px] text-[#ffffff] leading-[36px] font-medium ">
												<?php echo get_sub_field('third_section_paragraph'); ?>
											</p>
											<?php endif; ?>
										</div> 
									</div>

									
									
									

									<div class="timeline-item curv-box pb-[100px]" id="scroll-effect-5">
										<img class="absolute curv-img w-[36px] left-[0px] top-[-80px]" src="<?php echo get_template_directory_uri();?>/images/curv-line.png" />
										<div class="timeline-content-box max-w-[1000px]">
										<?php if(get_sub_field('six_section_heading')): ?>
											<p class="text-[22px] lg:text-[56px] text-[#FF4D02] lg:leading-[56px] font-medium "> <?php echo get_sub_field('six_section_heading'); ?> </p>
										<?php endif; ?>	

										<?php if(get_sub_field('six_section_paragraph')): ?>
											<p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[28px] text-[#ffffff] lg:leading-[36px] font-medium">
												<?php echo get_sub_field('six_section_paragraph'); ?>
											</p>
										<?php endif; ?>		
										</div> 
									</div>

									

									

									<div class="timeline-item pb-[100px]"  id="scroll-effect-8">
										<div class="timeline-content-box max-w-[1280px]">
											<div class="pb-5"><span class="btn px-[40px] py-[15px] text-white text-[16px] rounded-[56px] font-medium text-center border border-[#EE500C] ">Our Values</span></div>
											<div class="block mt-5 value-item">
												<div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
													<div class="box-1 grid-item relative border-bottom-img py-12 lg:pr-10">
														<span class="block">
															<svg xmlns="http://www.w3.org/2000/svg" width="48" height="49" viewBox="0 0 48 49" fill="none">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M18.6899 15.183L18.2302 17.8156C18.1711 18.183 18.2339 18.567 18.4074 18.8993C18.7176 19.4864 19.3194 19.8205 19.9379 19.8205C20.2074 19.8205 20.4807 19.7578 20.7336 19.623L23.0265 18.3824L25.4118 19.6193C25.7422 19.7928 26.1244 19.8538 26.4881 19.7965C27.4278 19.6451 28.0702 18.7571 27.917 17.8045L27.4204 15.303L29.3607 13.4402C29.6339 13.1762 29.813 12.8199 29.8665 12.4322C29.9902 11.4944 29.3274 10.6322 28.4025 10.5104L25.8161 10.191L24.6216 7.80206C24.6179 7.79837 24.6161 7.79283 24.6142 7.78914C24.4481 7.46975 24.1914 7.21314 23.8721 7.04698C23.021 6.6076 21.9742 6.9436 21.5311 7.80021L20.4198 10.1264L17.7557 10.5085C17.3754 10.5602 17.0172 10.7393 16.7459 11.0199C16.0923 11.6993 16.1108 12.7867 16.7902 13.4476L18.6899 15.183Z" fill="#FF4D02"/>
																<path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M36.1108 31.8324H30.4061C29.9983 31.8324 29.6677 32.1631 29.6677 32.5709V37.6109C29.6677 38.3863 29.0585 38.9955 28.2831 38.9955C27.5261 38.9955 26.8985 38.3863 26.8985 37.6109V25.2417C26.8985 24.2632 26.1231 23.4694 25.1446 23.4694H21.0092C20.0308 23.4694 19.2554 24.2632 19.2554 25.2417V37.6109C19.2554 38.3863 18.6277 38.9955 17.8708 38.9955C17.0954 38.9955 16.4862 38.3863 16.4862 37.6109V29.1001C16.4862 28.6923 16.1556 28.3617 15.7477 28.3617H10.0431C8.10466 28.3617 6.51697 29.9309 6.51697 31.8878V38.3863C6.51697 40.3432 8.10466 41.9309 10.0431 41.9309H36.1108C38.0492 41.9309 39.6369 40.3432 39.6369 38.3863V35.3586C39.6369 33.4201 38.0492 31.8324 36.1108 31.8324Z" fill="#FF4D02"/>
															</svg>
														</span>
														<p class="text-[20px] mt-2 lg:mt-[24px] lg:text-[24px] text-[#ffffff] font-medium">Quality</p>
														<p class="text-[13px] mt-2 lg:mt-[16px] lg:text-[16px] text-[#ffffff] font-medium">We are committed to sourcing, vetting, and delivering the best tech talent globally.</p>
													</div>

													<div class="box-2 grid-item relative border-left-img border-bottom-img py-12 lg:px-10">
														<span class="block">
															<svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49" fill="none">
																<path d="M24.3349 4.89246C25.1633 4.89246 25.8349 5.56404 25.8349 6.39246V6.5842C25.8349 7.41262 25.1633 8.0842 24.3349 8.0842C23.5065 8.0842 22.8349 7.41262 22.8349 6.5842V6.39246C22.8349 5.56404 23.5065 4.89246 24.3349 4.89246Z" fill="#FF4D02"/>
																<path d="M11.3174 10.2849C11.9032 9.69914 12.853 9.69914 13.4387 10.2849L13.5743 10.4205C14.1601 11.0063 14.1601 11.956 13.5743 12.5418C12.9885 13.1276 12.0388 13.1276 11.453 12.5418L11.3174 12.4062C10.7316 11.8205 10.7316 10.8707 11.3174 10.2849Z" fill="#FF4D02"/>
																<path d="M37.3505 12.4064C37.9363 11.8206 37.9363 10.8708 37.3505 10.2851C36.7647 9.69926 35.8151 9.69926 35.2293 10.285L35.0937 10.4206C34.5079 11.0064 34.5079 11.9561 35.0937 12.5419C35.6795 13.1277 36.6293 13.1277 37.2149 12.5419L37.3505 12.4064Z" fill="#FF4D02"/>
																<path d="M5.9249 23.3025C5.9249 22.4741 6.59646 21.8025 7.4249 21.8025H7.61664C8.44506 21.8025 9.11664 22.4741 9.11664 23.3025C9.11664 24.1309 8.44506 24.8025 7.61664 24.8025H7.4249C6.59646 24.8025 5.9249 24.1309 5.9249 23.3025Z" fill="#FF4D02"/>
																<path d="M41.0945 21.8025C40.2661 21.8025 39.5945 22.4741 39.5945 23.3025C39.5945 24.1309 40.2661 24.8025 41.0945 24.8025H41.2417C42.0701 24.8025 42.7417 24.1309 42.7417 23.3025C42.7417 22.4741 42.0701 21.8025 41.2417 21.8025H41.0945Z" fill="#FF4D02"/>
																<path d="M13.5437 34.0918C14.1295 34.6776 14.1295 35.6274 13.5437 36.2132L13.4391 36.3178C12.8533 36.9036 11.9036 36.9036 11.3178 36.3178C10.732 35.732 10.732 34.7822 11.3178 34.1964L11.4224 34.0918C12.0082 33.506 12.9579 33.506 13.5437 34.0918Z" fill="#FF4D02"/>
																<path d="M37.2457 34.0918C36.6599 33.506 35.7101 33.506 35.1243 34.0918C34.5385 34.6776 34.5385 35.6274 35.1243 36.2132L35.2289 36.3178C35.8147 36.9036 36.7645 36.9036 37.3503 36.3178C37.9359 35.732 37.9359 34.7822 37.3503 34.1964L37.2457 34.0918Z" fill="#FF4D02"/>
																<path opacity="0.4" d="M18.1596 34.3925C14.2697 32.2777 11.6294 28.1509 11.6294 23.4007C11.6294 15.5999 18.7538 9.48162 26.8133 11.1158C31.6037 12.0962 35.4739 15.9391 36.4737 20.7329C37.6711 26.5043 34.8497 31.8717 30.2709 34.3925H18.1596Z" fill="#FF4D02"/>
																<path d="M29.7469 36.3925V37.8449C29.7469 40.8999 27.2517 43.3925 24.1995 43.3925C21.1471 43.3925 18.6519 40.8999 18.6519 37.8449V36.3925H29.7469Z" fill="#FF4D02"/>
															</svg>
														</span>
														<p class="text-[20px] mt-2 lg:mt-[24px] lg:text-[24px] text-[#ffffff] font-medium">Excellence</p>
														<p class="text-[13px] mt-2 lg:mt-[16px] lg:text-[16px] text-[#ffffff] font-medium">Our commitment to excellence drives us to consistently exceed expectations, delivering exceptional talent to all our clients.</p>
													</div>

													<div class="box-3 grid-item relative  py-12 lg:pr-10">
														<span class="block">
															<svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M37.1721 29.0537C36.6109 28.4925 32.8669 27.3682 31.9309 27.3682C31.1814 27.3682 27.4374 28.4925 26.6878 29.0537C26.1266 29.6149 26.1266 30.1762 26.1266 31.4869V34.1085C26.1266 38.7885 31.1814 40.0992 31.5561 40.2876H31.9309C32.1174 40.2876 37.3586 38.7885 37.3586 34.1085V31.3005C37.5469 30.1762 37.5469 29.6149 37.1721 29.0537Z" fill="#FF4D02"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M30.4322 16.3213C30.6186 11.6413 26.6882 7.70898 21.8199 7.70898C16.9534 7.70898 13.2075 11.6413 13.2075 16.3213C13.2075 21.1896 17.1398 24.9336 21.8199 24.9336C26.6882 24.9336 30.4322 21.0013 30.4322 16.3213Z" fill="#FF4D02"/>
																<path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M19.9477 28.6807C17.3261 28.6807 14.8929 29.0554 13.0209 29.6167C11.8966 29.9914 10.7741 30.5527 10.0246 31.3022C9.27688 32.0499 8.71381 33.1742 8.71381 34.485C8.71381 35.7957 9.08858 36.7317 10.0246 37.6677C10.7741 38.4154 11.8966 38.9785 13.0209 39.3514C14.8929 39.9145 17.3261 40.2874 19.9477 40.2874C21.0701 40.2874 21.8197 39.5397 21.8197 38.4154V30.5527C21.8197 29.4302 21.0701 28.6807 19.9477 28.6807Z" fill="#FF4D02"/>
															</svg>
														</span>
														<p class="text-[20px] mt-2 lg:mt-[24px] lg:text-[24px] text-[#ffffff] font-medium">Innovation</p>
														<p class="text-[13px] mt-2 lg:mt-[16px] lg:text-[16px] text-[#ffffff] font-medium">We embrace new ideas and technologies to continually improve our platform and processes, staying ahead of industry trends.</p>
													</div>

													<div class="box-4 grid-item relative border-left-img py-12 lg:px-10">
														<span class="block">
															<svg xmlns="http://www.w3.org/2000/svg" width="48" height="49" viewBox="0 0 48 49" fill="none">
																<path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M7.84784 23.9507V14.862C7.84784 14.0977 7.22754 13.4774 6.46323 13.4774C5.69892 13.4774 5.07861 14.0977 5.07861 14.862V23.9507C5.07861 24.715 5.69892 25.3353 6.46323 25.3353C7.22754 25.3353 7.84784 24.715 7.84784 23.9507Z" fill="#FF4D02"/>
																<path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M39.6908 28.16C38.9265 28.16 38.3062 28.7803 38.3062 29.5446V38.6314C38.3062 39.3957 38.9265 40.016 39.6908 40.016C40.4551 40.016 41.0754 39.3957 41.0754 38.6314V29.5446C41.0754 28.7803 40.4551 28.16 39.6908 28.16Z" fill="#FF4D02"/>
																<path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M39.081 13.5421C38.5826 12.9587 37.7112 12.8904 37.1278 13.3889L35.2613 14.9821C34.6798 15.4787 34.6096 16.3519 35.1081 16.9353C35.3813 17.2565 35.769 17.4209 36.1604 17.4209C36.4798 17.4209 36.7992 17.3119 37.0595 17.0886L38.9278 15.4953C39.5075 14.9987 39.5795 14.1236 39.081 13.5421Z" fill="#FF4D02"/>
																<path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M9.28476 32.1529L7.41645 33.7461C6.83676 34.2427 6.76661 35.116 7.26322 35.6994C7.5383 36.0206 7.92599 36.1849 8.31738 36.1849C8.63492 36.1849 8.9543 36.076 9.21645 35.8526L11.0848 34.2594C11.6645 33.7627 11.7346 32.8877 11.238 32.3061C10.7395 31.7246 9.8663 31.6544 9.28476 32.1529Z" fill="#FF4D02"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M31.0636 13.9614C31.2186 14.0168 31.3756 14.0426 31.5306 14.0426C32.0993 14.0426 32.6328 13.6919 32.834 13.1251L33.6611 10.8137C33.9196 10.0937 33.5448 9.30173 32.8248 9.04327C32.0993 8.78111 31.311 9.15773 31.0543 9.87957L30.2273 12.191C29.9688 12.911 30.3436 13.703 31.0636 13.9614Z" fill="#FF4D02"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M15.2793 35.2811C14.5612 35.0171 13.7673 35.3974 13.5107 36.1192L12.6855 38.4306C12.427 39.1506 12.8018 39.9426 13.5237 40.1992C13.6769 40.2546 13.8338 40.2805 13.9889 40.2805C14.5557 40.2805 15.0892 39.9279 15.2923 39.3611L16.1175 37.0497C16.376 36.3297 16.0012 35.5377 15.2793 35.2811Z" fill="#FF4D02"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M22.7166 24.4101C23.0046 24.0317 23.143 23.5221 23.4163 22.5049L23.9 20.7123C24.4187 18.7905 24.6772 17.8305 24.4612 17.0698C24.2637 16.3738 23.8077 15.7812 23.1892 15.4083C22.5117 15.0021 21.5166 15.0022 19.5264 15.0022H17.6988C17.3573 15.0022 17.2927 14.8692 17.3887 14.5701C18.7086 10.4661 18.0311 8.8323 16.7222 8.56276C16.2219 8.45938 16.0133 8.46492 15.6182 8.85076C14.337 10.3609 12.1751 12.724 10.9954 14.0034C10.6908 14.3357 10.5376 14.5 10.4287 14.6865C10.329 14.86 10.257 15.0446 10.2127 15.2403C10.1665 15.4508 10.1665 15.6741 10.1665 16.1209V21.5984C10.1665 22.9073 10.1665 23.5609 10.4176 24.063C10.6465 24.5227 11.0194 24.8957 11.481 25.1264C11.9813 25.3775 12.6367 25.3775 13.9437 25.3775H19.6667C20.7209 25.3775 21.2489 25.3775 21.6901 25.1966C22.0963 25.0323 22.4507 24.7609 22.7166 24.4101Z" fill="#FF4D02"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M35.7248 29.2735C35.6159 29.0871 35.4627 28.9228 35.1581 28.5923C33.9784 27.3129 31.8165 24.948 30.5353 23.4379C30.1402 23.0539 29.9316 23.0483 29.4313 23.1517C28.1224 23.4194 27.4448 25.0551 28.7648 29.1572C28.8627 29.4563 28.7962 29.5892 28.4547 29.5892H26.627C24.6368 29.5892 23.6418 29.5892 22.9642 29.9954C22.3458 30.3683 21.8898 30.9628 21.6922 31.6569C21.4762 32.4175 21.7347 33.3775 22.2534 35.2994L22.7371 37.092C23.0104 38.1092 23.1488 38.6188 23.4368 38.9991C23.7027 39.348 24.0571 39.6194 24.4633 39.7855C24.9045 39.9646 25.4325 39.9646 26.4867 39.9646H32.2098C33.5168 39.9646 34.1722 39.9646 34.6725 39.7135C35.1341 39.4846 35.507 39.1117 35.7359 38.6502C35.987 38.1499 35.987 37.4945 35.987 36.1855V30.7099C35.987 30.2631 35.987 30.0379 35.9408 29.8274C35.8965 29.6317 35.8245 29.4471 35.7248 29.2735Z" fill="#FF4D02"/>
															</svg>
														</span>
														<p class="text-[20px] mt-2 lg:mt-[24px] lg:text-[24px] text-[#ffffff] font-medium">Diversity</p>
														<p class="text-[13px] mt-2 lg:mt-[16px] lg:text-[16px] text-[#ffffff] font-medium">We believe in the power of diverse teams and are dedicated to creating opportunities for talented individuals from all backgrounds.</p>
													</div>




												</div>
											</div>
										</div> 
									</div>


									<div class="timeline-item curv-box pb-[100px]" id="scroll-effect-10">
										<img class="absolute curv-img w-[36px] left-[0px] top-[-80px]" src="<?php echo get_template_directory_uri();?>/images/curv-line.png" />
										<div class="timeline-content-box max-w-[1280px]">
											<div class="max-w-[1000px]">
											<?php if(get_sub_field('eight_section_heading')): ?>
												<h5 class="text-[22px] lg:text-[56px] text-[#FF4D02] lg:leading-[56px] font-medium"><?php echo get_sub_field('eight_section_heading'); ?></h5>
											<?php endif; ?>

											<?php if(get_sub_field('eight_section_para_first')): ?>
												<p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[28px] text-[#ffffff] lg:leading-[36px] font-medium">
													<?php echo get_sub_field('eight_section_para_first'); ?>
												</p>
												<?php endif; ?>
												
												<?php if(get_sub_field('eight_section_since_part')): ?>
												<p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[28px] text-[#ffffff] leading-[36px] font-medium">
													<?php echo get_sub_field('eight_section_since_part'); ?>
												</p>
												<?php endif; ?>
											</div>

											<div class="grid grid-cols-1 lg:grid-cols-10 gap-5 content-center mt-5">
												<?php if(get_sub_field('eight_section_para_second')): ?>
												<div class="grid-item col-span-7 content-center">
													<p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[40px] text-[#ffffff] lg:leading-[56px] font-medium">
														<?php echo get_sub_field('eight_section_para_second'); ?>
													</p>
												</div>
												<?php endif; ?>
												
												<div class="grid-item col-span-3 content-center lg:text-end pt-5">
													<span class="discount inline-block text-[70px] lg:text-[200px] text-[#FF4D02] leading-[130px] font-medium relative pt-[30px] pr-[30px]"><span class="text-[26px] leading-[0px] font-xl lg:absolute top-[13px] left-[21px]"> <?php echo get_sub_field('eight_section_up_title'); ?> </span> <?php echo get_sub_field('eight_section_percent_number'); ?> <span class="text-[40px] leading-[0px] font-xl lg:absolute bottom-[13px] right-[10px]"> /5 </span></span>
												</div>
											</div>
										</div> 
									</div>

									<!-- <div class="timeline-item pb-[100px]" id="scroll-effect-11">
										<img  src="<?php echo get_template_directory_uri();?>/images/sqr-circule.png" class=" absolute right-[90px] w-[100%] h-[100%] top-[-90px] max-w-[400px] max-h-[400px] z-1 opacity-[0.5]">
										<div class="timeline-content-box relative border border-[rgba(245,248,255,0.1)] lg:left-[-90px] bg-[#1f0c04] rounded-[12px] min-h-[400px] max-w-[1380px] p-3 lg:px-[100px] lg:py-[50px]">
												<div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
												
													<?php if(have_rows('nine_section_repeater')): ?>
													<?php while(have_rows('nine_section_repeater')): the_row(); ?>
													<?php 
														$title_name = get_sub_field('title'); 
														$description = get_sub_field('description'); 
														$classname = get_sub_field('class_name'); 
													?>
														<div class="<?php echo $classname;?>">
															<span class="block">
																<img src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['url']; ?>">
															</span>
															<h1 class="text-[20px] mt-2 lg:mt-[24px] lg:text-[24px] text-[#ffffff] font-medium"><?php echo $title_name;?></h1>
															<p class="text-[13px] mt-2 lg:mt-[16px] lg:text-[16px] text-[#ffffff] font-medium"> <?php echo $description;?> </p>
														</div>
													<?php endwhile; ?>	
													<?php endif; ?> 

												</div>
										</div> 
									</div> -->
									<div class="timeline-item curv-box pb-[100px]" id="scroll-effect-12">
										<img class="absolute curv-img w-[36px] left-[0px] top-[-80px]" src="<?php echo get_template_directory_uri();?>/images/curv-line.png" />
										<div class="timeline-content-box max-w-[1280px]">
											<div class="grid grid-cols-1 lg:grid-cols-10 gap-5 content-center">
												<div class="grid-item col-span-8 content-center">
												<?php if(get_sub_field('tenth_section_title')): ?>
													<h5 class="text-[22px] lg:text-[56px] text-[#FF4D02] lg:leading-[56px] font-medium"> <?php echo get_sub_field('tenth_section_title'); ?> </h5>
												<?php endif; ?> 

												<?php if(get_sub_field('tenth_section_first_paragraph')): ?>	
													<p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[28px] text-[#ffffff] lg:leading-[36px] font-medium">
														<?php echo get_sub_field('tenth_section_first_paragraph'); ?>
													</p>
												<?php endif; ?> 
												</div>
												
												<?php $tenth_section_first_image = get_sub_field('tenth_section_first_image');
													if (!empty($tenth_section_first_image) && isset($tenth_section_first_image['url'])):
												?>
												<div class="grid-item col-span-2 content-center text-end pt-5">
													<img class="img-3 inline w-[214px] rounded-[6px] border border-[#FFAD0E] shadow-[0px_0px_40px_10px_rgba(255,173,14,0.30)]" src="<?php echo esc_url($tenth_section_first_image['url']); ?>" alt="<?php echo esc_attr($tenth_section_first_image['alt']); ?>" />
												</div>
												<?php endif; ?>
												
											</div>

											<div class="grid grid-cols-2 lg:grid-cols-10 gap-5 content-center mt-[15px] lg:mt-[0px]">
											
												<?php if(get_sub_field('tenth_section_second_paragraph')): ?>
												<div class="grid-item col-span-2 lg:col-span-6 content-center">
													<p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[38px] text-[#ffffff] font-medium">
													<?php echo get_sub_field('tenth_section_second_paragraph'); ?>
													</p>
												</div>
												<?php endif; ?> 
												
												
												<?php $tenth_section_second_image = get_sub_field('tenth_section_second_image');
													if (!empty($tenth_section_second_image) && isset($tenth_section_second_image['url'])):
												?>
												<div class="grid-item col-span-1 lg:col-span-2 content-center text-end pt-5">
													<img class="img-1 inline w-[160px] rounded-[6px] border border-[#009EFF] shadow-[0px_0px_40px_10px_rgba(0,158,255,0.30)]" src="<?php echo esc_url($tenth_section_second_image['url']); ?>" alt="<?php echo esc_attr($tenth_section_second_image['alt']); ?>" />

												</div>
												<?php endif; ?>
												
												<?php $tenth_section_third_image = get_sub_field('tenth_section_third_image');
													if (!empty($tenth_section_third_image) && isset($tenth_section_third_image['url'])):
												?>
												<div class="grid-item col-span-1 lg:col-span-2 content-center text-end pt-5">
													<img class="img-2 inline w-[180px] rounded-[6px] border border-[#E805C6] shadow-[0px_0px_40px_10px_rgba(232,5,198,0.30)]" src="<?php echo esc_url($tenth_section_third_image['url']); ?>" alt="<?php echo esc_attr($tenth_section_third_image['alt']); ?>" />
												</div>
												<?php endif; ?>
											</div>

										</div> 
									</div>

									


									<div class="timeline-item curv-box pb-[100px]" id="scroll-effect-13">
										<img  src="<?php echo get_template_directory_uri();?>/images/squr-roted.png" class=" absolute right-[90px] w-[100%] h-[100%] bottom-[-90px] max-w-[400px] max-h-[400px] z-1 opacity-[0.5]">
										<img class="absolute curv-img w-[36px] left-[0px] top-[-80px]" src="<?php echo get_template_directory_uri();?>/images/curv-line.png" />
										<div class="timeline-content-box max-w-[1280px]">
											<div class="grid grid-cols-10 gap-5 content-center">
												<div class="grid-item col-span-8 content-center">
												<?php if(get_sub_field('elevent_section_title')): ?>
													<h5 class="text-[22px] lg:text-[56px] text-[#FF4D02] lg:leading-[56px] font-medium"> <?php echo get_sub_field('elevent_section_title'); ?> </h5>
												<?php endif; ?>	
												
												<?php if(get_sub_field('eleventh_section_paragraph')): ?>
													<p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[28px] text-[#ffffff] lg:leading-[36px] font-medium">
														<?php echo get_sub_field('eleventh_section_paragraph'); ?>
													</p>
												<?php endif; ?>
												
												</div>
											</div>
										</div> 
									</div>

									
									
									<?php if(get_sub_field('eleventh_section_continue')): ?>
									<div class="timeline-item pb-[0px]">
										<div class="timeline-content-box relative  rounded-[12px] min-h-[100px] max-w-[1280px] p-3 lg:p-[50px]">
											<h5 class="text-[30px] text-[#FF4D02] lg:text-[56px] font-[500]"><?php echo get_sub_field('eleventh_section_continue'); ?></h5>
										</div>
									</div>
									<?php endif; ?> 
									
								</div>
							</div>
						</div>
					</section>

					<div class="w-full pb-[100px]">
										<div class="w-[100%] pl-[5%]">
											<div class=" block">
												<div class="text-white text-[12px] lg:text-[16px] text-center flex items-center justify-center small-intro mt-48">Testimonial</div>
												<h2 class="text-[35px] sm:text-[40px] lg:text-[56px] 3xl:text-[58px] font-medium text-white text-center px-0  md:leading-tight"><span class="text-white text-5xl  lg:text-[56px] lg:leading-[5rem]">Don’t just take</span>
													<span class="text-dark-orange text-5xl  lg:text-[56px]">our word for it</span>
												</h2>
											</div>
										
					
												<div class="w-full flex relative min-h-[600px] pr-3 lg:pr-0 pt-16 overflow-hidden">
													<div class="slider-wrapper w-full relative card-container overflow-visible">
														<div class="slider-overlay">
														<?php if(have_rows('testimonial_card')): ?>
														<?php while(have_rows('testimonial_card')): the_row(); ?>
														<?php 
															$testimonial = get_sub_field('testimonial'); 
															$author_name = get_sub_field('name'); 
															$author_designation = get_sub_field('designation'); 
															$background = get_sub_field('background_color'); 
															$linkedin = get_sub_field('linkedin');
														?>
													
															<div class="bg-[<?php echo esc_attr($background); ?>] slider-item w-100 lg:w-[600px] h-[450px] rounded-3xl absolute card-placement card" style="background:<?php echo esc_attr($background); ?>">
																<div class="p-4 lg:p-10 flex flex-col ">
																	<div class="flex justify-between items-center mb-6">
																		<img class=" h-[55px]" src="<?php echo get_sub_field('logo')['url']; ?>">
																		<img src="<?php echo get_sub_field('rating')['url']; ?>">
																	</div>
																	<p class="text-[20px] text-[#050403] leading-6"> <?php echo $testimonial;?> </p>
																	<div class=" absolute bottom-[20px] left-0 w-[100%] flex justify-between items-center px-[2.5rem]">
																		<div class="flex items-center">
																			<img class=" w-[70px] rounded-full mr-5" src="<?php echo get_sub_field('author_pic')['url']; ?>">
																			<div>
																				<p class="text-[#050403] text-[24px]"> <?php echo esc_attr($author_name);?> </p>
																				<p class="text-[#050403] text-[16px]"> <?php echo esc_attr($author_designation);?> </p>
																			</div>
																		</div>
																		<!-- <a href="<?php echo $linkedin;?>" target="_blank"> <img src="<?php echo get_template_directory_uri();?>/images/linkedin_card_logo.svg" /> </a> -->
																	</div>
																</div>
															</div>
															<?php endwhile; ?>	
														<?php endif; ?> 
													</div>	
												</div>
										</div>
										<div class="flex flex-col justify-center items-center">
											<div class="buttons flex gap-3">
												<button class="text-white p-3 rounded-[10px] border border-[#464444] disabled:opacity-[0.3]" disabled id="nextButton">&#8592;</button>
												<button class="text-white p-3 rounded-[10px] border border-[#464444] disabled:opacity-[0.3]" id="prevButton" >&#8594;</button>
											</div>
										</div>
								
										</div> 
									</div>



					<section class="w-[100%] px-[5%]">
						<div class="relative grid grid-cols-1 lg:grid-cols-2 content-center gap-0 rounded-[24px] vetting-bg py-[32px] px-[10%]">
							<img class="absolute h-[100%] w-[50%] right-[0px] top-[0px]" src="<?php echo get_template_directory_uri();?>/images/bg-line-box.png" />
							<div class="pt-[60px]">
							<?php if(get_sub_field('cta_title')): ?>
								<h5 class=" text-white text-[32px] lg:text-[62px] lg:leading-[62px]"> <?php echo get_sub_field('cta_title'); ?> </h5>
							<?php endif; ?> 

							<?php if(get_sub_field('cta_description')): ?>	
								<p class=" text-white text-[16px] lg:text-[24px] lg:mt-[30px] mb-[30px]"> <?php echo get_sub_field('cta_description'); ?> </p>
							<?php endif; ?> 
							
							<a class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] text-dark-orange text-lg bg-white hover:bg-black hover:text-white " href="/contact-us/"> <?php echo get_sub_field('cta_button_name'); ?> </a>
							</div>
							
							<?php $cta_right_side_image = get_sub_field('cta_right_side_image');
								if (!empty($cta_right_side_image) && isset($cta_right_side_image['url'])):
							?>
							<div class="text-end pt-[40px] lg:pt-[0px]">
								<img class="w-[100%] max-w-[500px] inline-block" src="<?php echo esc_url($cta_right_side_image['url']); ?>" alt="<?php echo esc_attr($cta_right_side_image['alt']); ?>" />
							</div>
							<?php endif; ?>
							
						</div>
					</section>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
	</div>
</div>

<script type="text/javascript">
    jQuery(window).bind("load", function() {
		aboutUsAnimation()
	});
</script>
<?php get_footer();?>