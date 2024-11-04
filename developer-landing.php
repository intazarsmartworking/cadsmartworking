<?php
/**
 * Template Name: Developer Landing Page
 *
 * @package sws
 */

 get_header();
?>
<div class=" w-full relative">
  <img class="bg-img absolute w-[100%] right-[-30%] z-0 top-[-8%]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
  <div class=" w-full relative z-10">
    <div class="w-full md:flex">
      <div class="container mx-auto relative z-10 mt-5">
          <div class="grid lg:flex lg:justify-between gap-10 lg:gap-15 items-center mt-9 lg:mt-[100px] mb-0 md:mb-24 relative">
            <div class="absolute top-[-30px] lg:top-0 left-0">
                <button class="flex items-center justify-center"><img class="mr-3" src="<?php echo get_template_directory_uri();?>/images/back_arrow.svg" alt="back" >
                <span class="text-white">Services</span></button>
            </div>
            <div class="w-full ">
                <div class="grid gap-8 relative pr-5">
                  <h1 class="text-3xl sm:text-4xl lg:text-7xl 3xl:text-58 font-medium text-white lg:leading-tight"> Hire remote &nbsp; <br> 
                      <span class="text-dark-orange"> developers </span> 
                  </h1>
                  <p class="flex text-white font-normal text-xl">No hidden cost, Fully integrated services, Timezone-aligned, Hire within a week</p>
                  <div class="header-buttons mt-6">
                      <input type="email" placeholder="Enter email address" class="custom-input text-white focus:outline-none mr-3">
                      <a href="https://smartworking.io/" class="button button-small mt-2 lg:mt-0 inline-block  px-8 py-5 font-bold rounded-xl text-white text-lg get-started-banner-home">Hire Now</a>
                  </div>
                </div>
            </div>
            <div class="w-full relative">
                <div class="w-[100%] landing-dev-box h-[450px] p-[30px] rounded-[30px] bg-white max-w-[450px] border-[10px] border-[#fff] ml-auto">
                  <div class="w-[100%] py-[10px] pl-[65px] pr-[10px] relative mb-[20px]">
                      <div class="w-[52px] h-[52px] absolute left-0 top-[10px] rounded-[50%] text-center bg-[#FF4D02] overflow-hidden pt-[9px]">
                        <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7076 20.1378H17.2827V16.7202H17.7076C18.6484 16.7202 19.4139 17.4895 19.4139 18.4354C19.4139 19.3736 18.6484 20.1378 17.7076 20.1378ZM14.2939 14.1602C13.3531 14.1602 12.5864 13.396 12.5864 12.4578C12.5864 11.5196 13.3531 10.7554 14.2939 10.7554H14.7227V14.1602H14.2939ZM17.7076 14.1602H17.2827V10.7554H19.8414C20.548 10.7554 21.1214 10.1832 21.1214 9.4754C21.1214 8.76756 20.548 8.1954 19.8414 8.1954H17.2827V6.4802C17.2827 5.77236 16.7092 5.2002 16.0027 5.2002C15.2961 5.2002 14.7227 5.77236 14.7227 6.4802V8.1954H14.2939C11.9412 8.1954 10.0264 10.1077 10.0264 12.4578C10.0264 14.8079 11.9412 16.7202 14.2939 16.7202H14.7227V20.1378H12.1601C11.4536 20.1378 10.8801 20.71 10.8801 21.4178C10.8801 22.1256 11.4536 22.6978 12.1601 22.6978H14.7227V24.4002C14.7227 25.108 15.2961 25.6802 16.0027 25.6802C16.7092 25.6802 17.2827 25.108 17.2827 24.4002V22.6978H17.7076C20.0603 22.6978 21.9739 20.7855 21.9739 18.4354C21.9739 16.0776 20.0603 14.1602 17.7076 14.1602Z" fill="white"/>
                        </svg>
                      </div>
                      <span class="block text-[16px] text-[#08111F] ">Role</span>
                      <span class="block text-[24px] text-[#08111F] font-[700]">Mobile</span>
                  </div>
                  <div class="w-[100%] py-[10px] pl-[65px] pr-[10px] relative mb-[20px]">
                      <div class="w-[52px] h-[52px] absolute left-0 top-[10px] rounded-[50%] text-center bg-[#FF4D02] overflow-hidden pt-[9px]">
                        <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7076 20.1378H17.2827V16.7202H17.7076C18.6484 16.7202 19.4139 17.4895 19.4139 18.4354C19.4139 19.3736 18.6484 20.1378 17.7076 20.1378ZM14.2939 14.1602C13.3531 14.1602 12.5864 13.396 12.5864 12.4578C12.5864 11.5196 13.3531 10.7554 14.2939 10.7554H14.7227V14.1602H14.2939ZM17.7076 14.1602H17.2827V10.7554H19.8414C20.548 10.7554 21.1214 10.1832 21.1214 9.4754C21.1214 8.76756 20.548 8.1954 19.8414 8.1954H17.2827V6.4802C17.2827 5.77236 16.7092 5.2002 16.0027 5.2002C15.2961 5.2002 14.7227 5.77236 14.7227 6.4802V8.1954H14.2939C11.9412 8.1954 10.0264 10.1077 10.0264 12.4578C10.0264 14.8079 11.9412 16.7202 14.2939 16.7202H14.7227V20.1378H12.1601C11.4536 20.1378 10.8801 20.71 10.8801 21.4178C10.8801 22.1256 11.4536 22.6978 12.1601 22.6978H14.7227V24.4002C14.7227 25.108 15.2961 25.6802 16.0027 25.6802C16.7092 25.6802 17.2827 25.108 17.2827 24.4002V22.6978H17.7076C20.0603 22.6978 21.9739 20.7855 21.9739 18.4354C21.9739 16.0776 20.0603 14.1602 17.7076 14.1602Z" fill="white"/>
                        </svg>
                      </div>
                      <span class="block text-[16px] text-[#08111F] ">Current Demand</span>
                      <span class="block text-[24px] text-[#08111F] font-[700]">High</span>
                  </div>
                  <div class="w-[100%] py-[10px] pl-[65px] pr-[10px] relative mb-[20px]">
                      <div class="w-[52px] h-[52px] absolute left-0 top-[10px] rounded-[50%] text-center bg-[#FF4D02] overflow-hidden pt-[9px]">
                        <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7076 20.1378H17.2827V16.7202H17.7076C18.6484 16.7202 19.4139 17.4895 19.4139 18.4354C19.4139 19.3736 18.6484 20.1378 17.7076 20.1378ZM14.2939 14.1602C13.3531 14.1602 12.5864 13.396 12.5864 12.4578C12.5864 11.5196 13.3531 10.7554 14.2939 10.7554H14.7227V14.1602H14.2939ZM17.7076 14.1602H17.2827V10.7554H19.8414C20.548 10.7554 21.1214 10.1832 21.1214 9.4754C21.1214 8.76756 20.548 8.1954 19.8414 8.1954H17.2827V6.4802C17.2827 5.77236 16.7092 5.2002 16.0027 5.2002C15.2961 5.2002 14.7227 5.77236 14.7227 6.4802V8.1954H14.2939C11.9412 8.1954 10.0264 10.1077 10.0264 12.4578C10.0264 14.8079 11.9412 16.7202 14.2939 16.7202H14.7227V20.1378H12.1601C11.4536 20.1378 10.8801 20.71 10.8801 21.4178C10.8801 22.1256 11.4536 22.6978 12.1601 22.6978H14.7227V24.4002C14.7227 25.108 15.2961 25.6802 16.0027 25.6802C16.7092 25.6802 17.2827 25.108 17.2827 24.4002V22.6978H17.7076C20.0603 22.6978 21.9739 20.7855 21.9739 18.4354C21.9739 16.0776 20.0603 14.1602 17.7076 14.1602Z" fill="white"/>
                        </svg>
                      </div>
                      <span class="block text-[16px] text-[#08111F] ">SmartWorking rate</span>
                      <span class="block text-[24px] text-[#08111F] font-[700]">From €19.00/hour</span>
                  </div>
                  <div class="w-[100%] py-[10px] pl-[65px] pr-[10px] relative">
                      <div class="w-[52px] h-[52px] absolute left-0 top-[10px] rounded-[50%] text-center bg-[#FF4D02] overflow-hidden pt-[9px]">
                        <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2288 10.9238C15.5494 10.9238 14.998 11.4752 14.998 12.1546V16.5977C14.998 17.031 15.2257 17.4334 15.5974 17.655L19.0411 19.7103C19.2393 19.8285 19.4571 19.8839 19.6713 19.8839C20.0897 19.8839 20.4984 19.6697 20.7297 19.2845C21.0768 18.6999 20.8873 17.9454 20.3039 17.5959L17.4596 15.8986V12.1546C17.4596 11.4752 16.9082 10.9238 16.2288 10.9238Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.41147 10.9235C7.78931 10.9235 8.16224 10.7499 8.40347 10.4225C8.86255 9.80101 9.3967 9.22993 9.99362 8.72532C10.513 8.28593 10.577 7.50932 10.1389 6.99116C9.69947 6.47178 8.92285 6.40655 8.4047 6.84593C7.66131 7.47363 6.99424 8.18624 6.42193 8.96286C6.01824 9.51055 6.13516 10.281 6.68285 10.6835C6.90193 10.8459 7.15793 10.9235 7.41147 10.9235Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.3883 24.0593C20.8424 25.268 18.9975 25.9793 17.048 26.116C16.0794 26.191 15.1058 26.1209 14.1581 25.908C13.4985 25.759 12.8363 26.1763 12.6874 26.8397C12.5385 27.503 12.9557 28.1615 13.6191 28.3104C14.499 28.5073 15.3963 28.607 16.2935 28.607C16.6049 28.607 16.9175 28.5947 17.2289 28.5713C19.6609 28.399 21.9698 27.5104 23.9034 25.999C24.44 25.5806 24.5347 24.8064 24.1163 24.271C23.6966 23.7357 22.9237 23.6421 22.3883 24.0593Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25336 20.213C6.9789 19.5914 6.25275 19.3108 5.63121 19.5816C5.00844 19.8561 4.72659 20.5822 4.99982 21.205C5.91675 23.2862 7.38998 25.0733 9.26444 26.373C9.47859 26.5207 9.72228 26.5921 9.96475 26.5921C10.3549 26.5921 10.7377 26.4074 10.9764 26.0628C11.3641 25.5041 11.2263 24.7373 10.6663 24.3496C9.16721 23.3096 7.9869 21.8794 7.25336 20.213Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.35145 18.2429C6.0296 18.1924 6.53791 17.6016 6.48745 16.9247C6.40498 15.8207 6.51575 14.7056 6.81483 13.6115C6.99452 12.9567 6.60806 12.2786 5.95329 12.1001C5.29606 11.9167 4.62037 12.3056 4.44068 12.9616C4.06775 14.3278 3.92991 15.7223 4.03329 17.1069C4.08129 17.7543 4.62037 18.2466 5.25914 18.2466C5.28991 18.2466 5.32068 18.2453 5.35145 18.2429Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8126 4.00763C15.1332 4.03347 14.604 4.60578 14.6298 5.28517C14.6569 5.96455 15.2452 6.49501 15.9061 6.46793C21.3314 6.24147 25.927 10.5061 26.135 15.9314C26.2101 17.8834 25.7018 19.796 24.6643 21.4612C24.3061 22.0384 24.4821 22.7978 25.0594 23.1572C25.2624 23.2828 25.4864 23.3418 25.7092 23.3418C26.1203 23.3418 26.5215 23.1363 26.7554 22.7621C28.0526 20.6772 28.6877 18.2834 28.5941 15.8366C28.3344 9.05501 22.615 3.77132 15.8126 4.00763Z" fill="white"/>
                        </svg>
                      </div>
                      <span class="block text-[16px] text-[#08111F] ">Average matching time</span>
                      <span class="block text-[24px] text-[#08111F] font-[700]">5 days</span>
                  </div>
                </div>
                <!-- <img class="w-full my-12" src="<?php echo get_template_directory_uri();?>/images/landing-banner.svg" alt=""> -->
            </div>
          </div>
      </div>
    </div>


  <!-- Vetted Profile Section -->

    <section class="flex flex-col items-center justify-center py-16">
      <h3 class="text-center small-intro">Vetted Profiles</h3>
      <div class="flex flex-col items-center justify-center mb-20">
          <h5 class="text-4xl text-center font-bold text-[35px] md:text-[56px] mb-4 text-white">Meet Our Vetted</h5>
          <span class="text-dark-orange  text-center text-[35px] md:text-[56px]">Wordpress Developers</span> 
      </div>
      <div class="container mx-auto p-4">
          <div class="flex flex-wrap -mx-2">
            <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4">
                <div class="custom-bg custom-border">
                  <div class="flex items-center">
                      <img src="<?php echo get_template_directory_uri();?>/images/johnauthor.svg" alt="Author" class="w-16 h-16 rounded-full mr-4">
                      <div>
                        <span class="text-white text-2xl font-medium block">Author Name</span>
                        <span class="text-white text-sm font-normal block">WordPress Developer11</span>
                      </div>
                  </div>
                  <div class="grid grid-cols-1 custom-grid-bg sm:grid-cols-2 gap-4 my-7 px-4 py-3 rounded-lg">
                      <div class="flex flex-col sm:flex-row">
                        <img src="<?php echo get_template_directory_uri();?>/images/Bag.svg" alt="Experience 1" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
                        <div>
                            <h3 class="text-sm font-normal pb-2 text-white">Experience</h3>
                            <p class="text-white text-base font-medium">10 Years</p>
                        </div>
                      </div>
                      <div class="flex flex-col sm:flex-row">
                        <img src="<?php echo get_template_directory_uri();?>/images/smallclock.svg" alt="Experience 2" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
                        <div>
                            <h3 class="text-sm font-normal pb-2 text-white">Available in</h3>
                            <p class="text-white text-base font-medium">2 Weeks</p>
                        </div>
                      </div>
                  </div>
                  <h2 class="text-sm font-medium text-white pb-10">Technologies</h2>
                  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                      <div class="flex items-center tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">MySQL</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/mysql.svg" alt="Technology 1" class="w-4 h-4 rounded-full">
                      </div>
                      <div class="flex items-center tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">Node.js</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/nodejs.svg" alt="Technology 2" class="w-4 h-4 rounded-full">
                      </div>
                      <div class="flex items-center tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">Python</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/python.svg" alt="Technology 3" class="w-4 h-4 rounded-full">
                      </div>
                      <div class="flex items-center tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">Angular</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/angular.svg" alt="Technology 4" class="w-4 h-4 rounded-full">
                      </div>
                      <div class="flex items-center tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">React.js</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/reactjs.svg" alt="Technology 4" class="w-4 h-4 rounded-full">
                      </div>
                  </div>
                  <div class="w-full py-4 mt-4">
                      <p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Interview Screening</p>
                      <div class="w-full bg-gray-200 rounded-full h-2 mb-1 dark:bg-gray-700 relative">
                        <span class="tooltip-box" style="background:#F26829; left:calc(82% - 16px)">
                            8.2
                            <svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
                              <path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="#F26829"/>
                            </svg>
                        </span>
                        <div class="h-2 rounded-full dark:bg-blue-500" style="width: 82%; background:#F26829;"></div>
                      </div>
                      <p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
                  </div>
                  <div class="w-full py-4 mt-4">
                      <p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Technical Assisment</p>
                      <div class="w-full bg-gray-200 rounded-full h-2 mb-4 dark:bg-gray-700 relative">
                        <span class="tooltip-box" style="background:#95C93D; left:calc(91% - 16px)">
                            9.1
                            <svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
                              <path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="#95C93D"/>
                            </svg>
                        </span>
                        <div class="h-2 rounded-full dark:bg-blue-500" style="width: 91%; background:#95C93D;"></div>
                      </div>
                      <p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
                  </div>
                  <div class="w-full py-4 mt-4">
                      <p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Language Proficiency</p>
                      <div class="w-full bg-gray-200 rounded-full h-2 mb-4 dark:bg-gray-700 relative">
                        <span class="tooltip-box" style="background:#00C9D3; left:calc(95% - 16px)">
                            9.5
                            <svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
                              <path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="#00C9D3"/>
                            </svg>
                        </span>
                        <div class="h-2 rounded-full dark:bg-blue-500" style="width: 95%; background:#00C9D3;"></div>
                      </div>
                      <p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
                  </div>
                  <div class="flex flex-wrap -mx-2 mt-4">
                      <div class="w-full md:w-1/2 px-2 mb-4">
                        <p class="font-medium text-2xl text-white">€16/hr</p>
                      </div>
                      <div class="w-full md:w-1/2 px-2 mb-4 text-right">
                        <button class="profile-button-custom">
                        View Profile
                        </button>
                      </div>
                  </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4">
                <div class="custom-bg custom-border">
                  <div class="flex items-center">
                      <img src="<?php echo get_template_directory_uri();?>/images/johnauthor.svg" alt="Author" class="w-16 h-16 rounded-full mr-4">
                      <div>
                        <span class="text-white text-2xl font-medium block">Author Name</span>
                        <span class="text-white text-sm font-normal block">WordPress Developer</span>
                      </div>
                  </div>
                  <div class="grid grid-cols-1 custom-grid-bg sm:grid-cols-2 gap-4 my-7 px-4 py-3 rounded-lg">
                      <div class="flex flex-col sm:flex-row">
                        <img src="<?php echo get_template_directory_uri();?>/images/Bag.svg" alt="Experience 1" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
                        <div>
                            <h3 class="text-sm font-normal pb-2 text-white">Experience</h3>
                            <p class="text-white text-base font-medium">10 Years</p>
                        </div>
                      </div>
                      <div class="flex flex-col sm:flex-row">
                        <img src="<?php echo get_template_directory_uri();?>/images/smallclock.svg" alt="Experience 2" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
                        <div>
                            <h3 class="text-sm font-normal pb-2 text-white">Available in</h3>
                            <p class="text-white text-base font-medium">2 Weeks</p>
                        </div>
                      </div>
                  </div>
                  <h2 class="text-sm font-medium text-white pb-10">Technologies</h2>
                  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                      <div class="flex items-center tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">MySQL</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/mysql.svg" alt="Technology 1" class="w-4 h-4 rounded-full">
                      </div>
                      <div class="flex items-center tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">Node.js</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/nodejs.svg" alt="Technology 2" class="w-4 h-4 rounded-full">
                      </div>
                      <div class="flex items-center tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">Python</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/python.svg" alt="Technology 3" class="w-4 h-4 rounded-full">
                      </div>
                      <div class="flex items-center tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">Angular</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/angular.svg" alt="Technology 4" class="w-4 h-4 rounded-full">
                      </div>
                      <div class="flex items-center  tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">React.js</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/reactjs.svg" alt="Technology 4" class="w-4 h-4 rounded-full">
                      </div>
                  </div>
                  <div class="w-full py-4 mt-4">
                      <p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Interview Screening</p>
                      <div class="w-full bg-gray-200 rounded-full h-2 mb-1 dark:bg-gray-700 relative">
                        <span class="tooltip-box" style="background:#F26829; left:calc(82% - 16px)">
                            8.2
                            <svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
                              <path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="#F26829"/>
                            </svg>
                        </span>
                        <div class="h-2 rounded-full dark:bg-blue-500" style="width: 82%; background:#F26829;"></div>
                      </div>
                      <p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
                  </div>
                  <div class="w-full py-4 mt-4">
                      <p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Technical Assisment</p>
                      <div class="w-full bg-gray-200 rounded-full h-2 mb-4 dark:bg-gray-700 relative">
                        <span class="tooltip-box" style="background:#95C93D; left:calc(91% - 16px)">
                            9.1
                            <svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
                              <path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="#95C93D"/>
                            </svg>
                        </span>
                        <div class="h-2 rounded-full dark:bg-blue-500" style="width: 91%; background:#95C93D;"></div>
                      </div>
                      <p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
                  </div>
                  <div class="w-full py-4 mt-4">
                      <p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Language Proficiency</p>
                      <div class="w-full bg-gray-200 rounded-full h-2 mb-4 dark:bg-gray-700 relative">
                        <span class="tooltip-box" style="background:#00C9D3; left:calc(95% - 16px)">
                            9.5
                            <svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
                              <path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="#00C9D3"/>
                            </svg>
                        </span>
                        <div class="h-2 rounded-full dark:bg-blue-500" style="width: 95%; background:#00C9D3;"></div>
                      </div>
                      <p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
                  </div>
                  <div class="flex flex-wrap -mx-2 mt-4">
                      <div class="w-full md:w-1/2 px-2 mb-4">
                        <p class="font-medium text-2xl text-white">€16/hr</p>
                      </div>
                      <div class="w-full md:w-1/2 px-2 mb-4 text-right">
                        <button class="profile-button-custom">
                        View Profile
                        </button>
                      </div>
                  </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4">
                <div class="custom-bg custom-border">
                  <div class="flex items-center">
                      <img src="<?php echo get_template_directory_uri();?>/images/johnauthor.svg" alt="Author" class="w-16 h-16 rounded-full mr-4">
                      <div>
                        <span class="text-white text-2xl font-medium block">Author Name</span>
                        <span class="text-white text-sm font-normal block">WordPress Developer</span>
                      </div>
                  </div>
                  <div class="grid grid-cols-1 custom-grid-bg sm:grid-cols-2 gap-4 my-7 px-4 py-3 rounded-lg">
                      <div class="flex flex-col sm:flex-row">
                        <img src="<?php echo get_template_directory_uri();?>/images/Bag.svg" alt="Experience 1" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
                        <div>
                            <h3 class="text-sm font-normal pb-2 text-white">Experience</h3>
                            <p class="text-white text-base font-medium">10 Years</p>
                        </div>
                      </div>
                      <div class="flex flex-col sm:flex-row">
                        <img src="<?php echo get_template_directory_uri();?>/images/smallclock.svg" alt="Experience 2" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
                        <div>
                            <h3 class="text-sm font-normal pb-2 text-white">Available in</h3>
                            <p class="text-white text-base font-medium">2 Weeks</p>
                        </div>
                      </div>
                  </div>
                  <h2 class="text-sm font-medium text-white pb-10">Technologies</h2>
                  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                      <div class="flex items-center tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">MySQL</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/mysql.svg" alt="Technology 1" class="w-4 h-4 rounded-full">
                      </div>
                      <div class="flex items-center tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">Node.js</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/nodejs.svg" alt="Technology 2" class="w-4 h-4 rounded-full">
                      </div>
                      <div class="flex items-center tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">Python</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/python.svg" alt="Technology 3" class="w-4 h-4 rounded-full">
                      </div>
                      <div class="flex items-center tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">Angular</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/angular.svg" alt="Technology 4" class="w-4 h-4 rounded-full">
                      </div>
                      <div class="flex items-center tech-item">
                        <div class="flex-1">
                            <h3 class="text-xs font-medium">React.js</h3>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/reactjs.svg" alt="Technology 4" class="w-4 h-4 rounded-full">
                      </div>
                  </div>
                  <div class="w-full py-4 mt-4">
                      <p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Interview Screening</p>
                      <div class="w-full bg-gray-200 rounded-full h-2 mb-1 dark:bg-gray-700 relative">
                        <span class="tooltip-box" style="background:#F26829; left:calc(82% - 16px)">
                            8.2
                            <svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
                              <path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="#F26829"/>
                            </svg>
                        </span>
                        <div class="h-2 rounded-full dark:bg-blue-500" style="width: 82%; background:#F26829;"></div>
                      </div>
                      <p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
                  </div>
                  <div class="w-full py-4 mt-4">
                      <p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Technical Assisment</p>
                      <div class="w-full bg-gray-200 rounded-full h-2 mb-4 dark:bg-gray-700 relative">
                        <span class="tooltip-box" style="background:#95C93D; left:calc(91% - 16px)">
                            9.1
                            <svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
                              <path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="#95C93D"/>
                            </svg>
                        </span>
                        <div class="h-2 rounded-full dark:bg-blue-500" style="width: 91%; background:#95C93D;"></div>
                      </div>
                      <p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
                  </div>
                  <div class="w-full py-4 mt-4">
                      <p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Language Proficiency</p>
                      <div class="w-full bg-gray-200 rounded-full h-2 mb-4 dark:bg-gray-700 relative">
                        <span class="tooltip-box" style="background:#00C9D3; left:calc(95% - 16px)">
                            9.5
                            <svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
                              <path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="#00C9D3"/>
                            </svg>
                        </span>
                        <div class="h-2 rounded-full dark:bg-blue-500" style="width: 95%; background:#00C9D3;"></div>
                      </div>
                      <p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
                  </div>
                  <div class="flex flex-wrap -mx-2 mt-4">
                      <div class="w-full md:w-1/2 px-2 mb-4">
                        <p class="font-medium text-2xl text-white">€16/hr</p>
                      </div>
                      <div class="w-full md:w-1/2 px-2 mb-4 text-right">
                        <button class="profile-button-custom">
                        View Profile
                        </button>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </section>

  <!-- Top 1% Section -->

    <section class="w-full relative py-16">
      <div class="container mx-auto max-w-[1280px]">
          <h3 class="text-center small-intro">Top 1%</h3>
          <div class="flex flex-col items-center justify-center">
            <h5 class="text-4xl font-bold text-center text-[35px] md:text-[56px] mb-4 text-white">How We Find Top</h5>
            <span class="text-dark-orange text-center text-[35px] md:text-[56px]">1% Wordpress Developers For You</span> 
            <p class="mb-12 text-lg w-max gradient-paragraph rounded-full p-3 text-white">Hire developers from as low as €16/hr</p>
          </div>
          <div class="grid grid-cols-1 lg:grid-cols-9 gap-6 relative">
            <!-- Step 1 -->
            <div class="grid-item col-span-3 pt-[50px] relative">
                <h2 class="text-[44px] absolute z-0 top-0 left-0 gradient-text-dev-landing">Step 1</h2>
                <div class="min-w-[100%] md:min-w-[405px] p-[24px] relative z-10 dev-gradient-bg min-h-[500px] w-[100%]">
                  <img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/step1_icon.svg" alt="" />
                  <h3 class="text-[24px] font-semibold mb-2 text-white">Outline your Tech Requirements</h3>
                  <p class="mb-4 text-[16px] text-white">Each candidate undergoes AI vetted, interviews, technical testing, written assessments and screening to ensure the perfect fit.</p>
                  <div class="absolute w-[100%] text-center left-0 bottom-[0px]">
                      <img class="max-w-[100%] h-[220px] inline-block"  src="<?php echo get_template_directory_uri();?>/images/benefits_card_avatar.svg" alt="">
                  </div>
                </div>
                <div class="mirror-box min-w-[100%] md:min-w-[405px] min-h-[180px] w-[100%] mt-10"></div>
            </div>
            <!-- Step 2 -->
            <div class="grid-item col-span-3 pt-[50px] relative mt-0 md:mt-[90px]">
                <h2 class="text-[44px] absolute z-0 top-0 left-0 gradient-text-dev-landing">Step 2</h2>
                <div class="min-w-[100%] md:min-w-[405px] p-[24px] relative z-10 dev-gradient-bg min-h-[500px]">
                  <img class="mb-3"  src="<?php echo get_template_directory_uri();?>/images/step2_icon.svg" alt="" />
                  <h3 class="text-[24px] font-semibold mb-4 text-white">Interview all the Candidates</h3>
                  <p class="mb-4 text-[16px] text-white">Each candidate undergoes AI vetted, interviews, technical testing, written assessments and screening to ensure the perfect fit.</p>
                  <div class="absolute w-[100%] text-center left-0 bottom-[0px]">
                      <img class="max-w-[100%] h-[220px] inline-block"  src="<?php echo get_template_directory_uri();?>/images/benefits_card_avatar.svg" alt="">
                  </div>
                </div>
                <div class="mirror-box min-w-[100%] md:min-w-[405px] h-[90px] w-[100%] text-center pt-[20px] mt-10">
                  <button class="bg-dark-orange text-white px-6 py-3 rounded-lg text-lg">Hire Now</button>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="grid-item col-span-3 pt-[50px] relative">
                <h2 class="text-[44px] absolute z-0 top-0 left-0 gradient-text-dev-landing">Step 3</h2>
                <div class="min-w-[100%] md:min-w-[405px] p-[24px] relative z-10 dev-gradient-bg min-h-[500px] w-[100%]">
                  <img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/step3_icon.svg" alt="" />
                  <h3 class="text-[24px] font-semibold mb-2 text-white">Efficient Onboarding</h3>
                  <p class="mb-4 text-[16px] text-white">Each candidate undergoes AI vetted, interviews, technical testing, written assessments and screening to ensure the perfect fit.</p>
                  <div class="absolute w-[100%] text-center left-0 bottom-[0px]">
                      <img class="max-w-[100%] h-[220px] inline-block"  src="<?php echo get_template_directory_uri();?>/images/benefits_card_avatar.svg" alt="">
                  </div>
                </div>
                <div class="mirror-box min-w-[100%] md:min-w-[405px] min-h-[180px] w-[100%] mt-10"></div>
            </div>
          </div>
      </div>
      </div>
    </section>


  <!-- Benefit Section -->

    <section class="flex flex-col items-center justify-center py-16 w-full !pb-0">
      <h3 class="text-center small-intro">Benefits</h3>
      <div class="flex flex-col items-center justify-center">
          <h5 class="font-bold text-[35px] md:text-[56px] mb-4 text-center text-white">Benefits of Hiring Wordpress</h5>
          <span class="text-dark-orange text-[35px] md:text-[56px] text-center">Developer from SmartWorking</span> 
      </div>
      <div class="relative mb-28 w-[100%] lg:mt-[150px]">
          <div class="grid grid-cols-1 relative justify-center content-center">
            <div class="solution_bg_bg-wrap w-[100%] max-w-[950px] h-[500px]">
                <img class="w-[100%] h-[100%] absolute top-0 z-[1] left-0 opacity-[0.2] " src="<?php echo get_template_directory_uri();?>/images/chip-bg.png" alt="" />
                <img class="w-[280px] absolute top-[170px] z-[99] left-[calc(50%-140px)] " src="<?php echo get_template_directory_uri();?>/images/sw-logo.png" alt="" />
                <div class="solution_path-img" style="mask-image: url('<?php echo get_template_directory_uri();?>/images/bg-line.png')">
                  <div class="solution_path-gradient"></div>
                </div>
                <img class="w-[80px] absolute top-0 z-[99] left-[20px]" src="<?php echo get_template_directory_uri();?>/images/you-1.png" alt="" />
                <img class="w-[134px] absolute top-0 z-[99] right-[20px]" src="<?php echo get_template_directory_uri();?>/images/top-1.png" alt="" />
            </div>
          </div>
      </div>
      <div class="container mx-auto md:px-0 px-10">
          <div class="grid grid-cols-1 md:grid-cols-10 gap-6 justify-center relative">
            <div class="grid-item col-span-10">
                <div class="flex flex-col justify-center items-center text-center align-middle relative orangepart px-3 py-7 md:px-12 md:py-12">
                  <img class="mb-3 w-28" src="<?php echo get_template_directory_uri();?>/images/tree.svg" alt="" />
                  <h2 class="text-2xl text-white font-bold mb-4 text-center">Hiring with Smart working</h2>
                </div>
            </div>
            <div class="grid-item col-span-10 md:col-span-5">

                <div class="flex flex-col justify-center relative greenpart px-10 py-5">
                  <div class="grid items-center grid-cols-9 gap-0">
                      <div class="col-span-2 md:col-span-1"> 
                        <img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/user-dev.svg" alt="" /> 
                      </div>
                      <div class="col-span-7 md:col-span-8 pl-2">
                        <h4 class="text-2xl text-white font-bold mb-2">96% Retention</h4>
                        <h5 class="text-sm text-white font-normal">A Dedicated Team To Help Get The Best Out Of Your Developers.</h5>
                      </div>
                  </div>
                </div>
            </div>
            <div class="grid-item col-span-10 md:col-span-5">
                <div class="flex flex-col justify-center relative firozipart px-10 py-5">
                  <div class="grid items-center grid-cols-9 gap-0">
                      <div class="col-span-2 md:col-span-1"> 
                        <img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/user.svg" alt="" /> 
                      </div>
                      <div class="col-span-7 md:col-span-8 pl-2">
                        <h4 class="text-2xl text-white font-bold mb-2">Hire engineer in 49h</h4>
                        <h5 class="text-sm text-white font-normal">A Dedicated Team To Help Get The Best Out Of Your Developers</h5>
                      </div>
                  </div>
                </div>
            </div>
            <div class="grid-item col-span-10 md:col-span-5">
              <div class="flex flex-col justify-center relative lightorangepart px-10 py-5">
                  <div class="grid items-center grid-cols-9 gap-0">
                      <div class="col-span-2 md:col-span-1"> 
                        <img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/cpu.svg" alt="" /> 
                      </div>
                      <div class="col-span-7 md:col-span-8 pl-2">
                        <h4 class="text-2xl text-white font-bold mb-2">Hire engineer in 9h</h4>
                        <h5 class="text-sm text-white font-normal">A Dedicated Team To Help Get The Best Out Of Your Developers</h5>
                      </div>
                  </div>
                </div>
            </div>
            <div class="grid-item col-span-10 md:col-span-5">
              <div class="flex flex-col justify-center relative brownpart px-10 py-5">
                  <div class="grid items-center grid-cols-9 gap-0">
                      <div class="col-span-2 md:col-span-1"> 
                        <img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/CircleClock.svg" alt="" /> 
                      </div>
                      <div class="col-span-7 md:col-span-8 pl-2">
                        <h4 class="text-2xl text-white font-bold mb-2">Hire engineer in 19h</h4>
                        <h5 class="text-sm text-white font-normal">A Dedicated Team To Help Get The Best Out Of Your Developers</h5>
                      </div>
                  </div>
                </div>
            </div>
            <div class="grid-item col-span-10 md:col-span-5">
              <div class="flex flex-col justify-center relative darkfirozipart px-10 py-5">
                  <div class="grid items-center grid-cols-9 gap-0">
                      <div class="col-span-2 md:col-span-1"> 
                        <img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/days-warranty.svg" alt="" /> 
                      </div>
                      <div class="col-span-7 md:col-span-8 pl-2">
                        <h4 class="text-2xl text-white font-bold mb-2">Hire engineer in 20h</h4>
                        <h5 class="text-sm text-white font-normal">A Dedicated Team To Help Get The Best Out Of Your Developers</h5>
                      </div>
                  </div>
                </div>
            </div>
            <div class="grid-item col-span-10 md:col-span-5">
                <div class="flex flex-col justify-center relative violetpart px-10 py-5">
                  <div class="grid items-center grid-cols-9 gap-0">
                      <div class="col-span-2 md:col-span-1"> 
                        <img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/eurocircle.svg" alt="" /> 
                      </div>
                      <div class="col-span-7 md:col-span-8 pl-2">
                        <h4 class="text-2xl text-white font-bold mb-2">Hire engineer in 5h</h4>
                        <h5 class="text-sm text-white font-normal">A Dedicated Team To Help Get The Best Out Of Your Developers</h5>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </section>


  <!-- Calculate Section -->

    <div class="w-full relative calculate-sec grid items-center lg:py-[50px]">
      <div class="container mx-auto md:px-0 px-10 min-h-[300px]">
          <div class="block mt-5 w-[100%] min-h-[300px] p-3 lg:p-[120px] calc-sec-bg">
            <div class="grid grid-cols-1 lg:grid-cols-10 gap-5 content-center">
                <div class="grid-item col-span-6 content-center">
                  <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 content-center">
                      <div class="flex flex-row">
                        <div class="pr-3">
                            <div class=" w-[40px] rounded-[50%] h-[40px] border border-[#FF4D02] bg-black text-center text-white text-[20px] pt-1">$</div>
                        </div>
                        <div>
                            <h3 class=" text-white text-[18px] font-medium">No hidden fees</h3>
                            <p class=" text-white text-[16px] font-medium ">Includes HR and admin support</p>
                        </div>
                      </div>
                      <div class="flex flex-row">
                        <div class="pr-3">
                            <div class=" w-[40px] rounded-[50%] h-[40px] border border-[#FF4D02] bg-black text-center text-white text-[20px] pt-1">$</div>
                        </div>
                        <div>
                            <h3 class=" text-white text-[18px] font-medium">Support</h3>
                            <p class=" text-white text-[16px] font-medium ">Includes HR and admin support</p>
                        </div>
                      </div>
                  </div>
                  <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mt-[60px] content-center">
                      <div class="flex flex-row">
                        <div class="pr-3">
                            <div class=" w-[40px] rounded-[50%] h-[40px] border border-[#FF4D02] bg-black text-center text-white text-[20px] pt-1">$</div>
                        </div>
                        <div>
                            <h3 class=" text-white text-[18px] font-medium">No Charge</h3>
                            <p class=" text-white text-[16px] font-medium ">Not satisfied after a week?</p>
                        </div>
                      </div>
                      <div class="flex flex-row">
                        <div class="pr-3">
                            <div class=" w-[40px] rounded-[50%] h-[40px] border border-[#FF4D02] bg-black text-center text-white text-[20px] pt-1">$</div>
                        </div>
                        <div>
                            <h3 class=" text-white text-[18px] font-medium">Support</h3>
                            <p class=" text-white text-[16px] font-medium ">Includes HR and admin support</p>
                        </div>
                      </div>
                  </div>
                  <div class="grid grid-cols-1 lg:grid-cols-1 gap-5 content-center mt-[70px]">
                      <div>
                        <p class=" text-white text-center text-nowrap ">
                            Excellent
                            <svg class=" inline-block" xmlns="http://www.w3.org/2000/svg" width="142" height="25" viewBox="0 0 142 25" fill="none">
                              <g clip-path="url(#clip0_1696_1934)">
                                  <path d="M22.1288 0.429688H2.12878C1.02421 0.429688 0.128784 1.32512 0.128784 2.42969V22.4297C0.128784 23.5343 1.02421 24.4297 2.12878 24.4297H22.1288C23.2334 24.4297 24.1288 23.5343 24.1288 22.4297V2.42969C24.1288 1.32512 23.2334 0.429688 22.1288 0.429688Z" fill="#00B67A"/>
                                  <path d="M11.6288 3.42969L13.8714 10.3051H21.1288L15.2575 14.5543L17.5001 21.4297L11.6288 17.1805L5.75746 21.4297L8.0001 14.5543L2.12878 10.3051H9.38613L11.6288 3.42969Z" fill="white"/>
                                  <path d="M51.1288 0.429688H31.1288C30.0242 0.429688 29.1288 1.32512 29.1288 2.42969V22.4297C29.1288 23.5343 30.0242 24.4297 31.1288 24.4297H51.1288C52.2334 24.4297 53.1288 23.5343 53.1288 22.4297V2.42969C53.1288 1.32512 52.2334 0.429688 51.1288 0.429688Z" fill="#00B67A"/>
                                  <path d="M41.6288 3.42969L43.8714 10.3051H51.1288L45.2575 14.5543L47.5001 21.4297L41.6288 17.1805L35.7575 21.4297L38.0001 14.5543L32.1288 10.3051H39.3862L41.6288 3.42969Z" fill="white"/>
                                  <path d="M81.1288 0.429688H60.1288C59.0242 0.429688 58.1288 1.32512 58.1288 2.42969V22.4297C58.1288 23.5343 59.0242 24.4297 60.1288 24.4297H81.1288C82.2334 24.4297 83.1288 23.5343 83.1288 22.4297V2.42969C83.1288 1.32512 82.2334 0.429688 81.1288 0.429688Z" fill="#00B67A"/>
                                  <path d="M70.6288 3.42969L72.8714 10.3051H80.1288L74.2575 14.5543L76.5001 21.4297L70.6288 17.1805L64.7575 21.4297L67.0001 14.5543L61.1288 10.3051H68.3862L70.6288 3.42969Z" fill="white"/>
                                  <path d="M110.129 0.429688H90.1288C89.0242 0.429688 88.1288 1.32512 88.1288 2.42969V22.4297C88.1288 23.5343 89.0242 24.4297 90.1288 24.4297H110.129C111.233 24.4297 112.129 23.5343 112.129 22.4297V2.42969C112.129 1.32512 111.233 0.429688 110.129 0.429688Z" fill="#00B67A"/>
                                  <path d="M100.629 3.42969L102.872 10.3051H110.129L104.258 14.5543L106.5 21.4297L100.629 17.1805L94.7575 21.4297L97.0001 14.5543L91.1288 10.3051H98.3862L100.629 3.42969Z" fill="white"/>
                                  <path d="M139.129 0.429688H119.129C118.024 0.429688 117.129 1.32512 117.129 2.42969V22.4297C117.129 23.5343 118.024 24.4297 119.129 24.4297H139.129C140.233 24.4297 141.129 23.5343 141.129 22.4297V2.42969C141.129 1.32512 140.233 0.429688 139.129 0.429688Z" fill="#00B67A"/>
                                  <path d="M129.629 3.42969L131.872 10.3051H139.129L133.258 14.5543L135.5 21.4297L129.629 17.1805L123.758 21.4297L126 14.5543L120.129 10.3051H127.386L129.629 3.42969Z" fill="white"/>
                              </g>
                              <defs>
                                  <clipPath id="clip0_1696_1934">
                                    <rect width="141" height="24" fill="white" transform="translate(0.128784 0.429688)"/>
                                  </clipPath>
                              </defs>
                            </svg>
                            <svg class=" inline-block" xmlns="http://www.w3.org/2000/svg" width="98" height="25" viewBox="0 0 98 25" fill="none">
                              <g clip-path="url(#clip0_1696_1946)">
                                  <path d="M25.8105 8.93555H35.7056V10.7819H31.8151V21.1601H29.6755V10.7819H25.802V8.93555H25.8105ZM35.283 12.3085H37.1119V14.0165H37.1463C37.2127 13.7636 37.3279 13.5262 37.4853 13.3176C37.6541 13.0838 37.8545 12.8746 38.0808 12.6961C38.3165 12.5076 38.5779 12.3537 38.8571 12.239C39.1341 12.1273 39.4297 12.0688 39.7283 12.0667C39.9543 12.0667 40.1165 12.0752 40.2029 12.0842C40.2893 12.0932 40.3752 12.1102 40.4701 12.1187V13.9995C40.3323 13.9735 40.1939 13.9566 40.0475 13.9391C39.9073 13.9221 39.7662 13.9134 39.6249 13.9131C39.3039 13.913 38.9864 13.9806 38.6933 14.1114C38.4 14.2446 38.1405 14.4422 37.9339 14.6894C37.7042 14.971 37.5287 15.2928 37.4164 15.6385C37.282 16.0594 37.2178 16.4996 37.2266 16.9414V21.1511H35.2768V12.3085H35.283ZM49.4314 21.1596H47.5161V19.9262H47.4816C47.2361 20.3787 46.8646 20.7502 46.4121 20.9957C45.9726 21.2549 45.4731 21.3948 44.9629 21.4014C43.7985 21.4014 42.9527 21.1189 42.4352 20.5386C41.8632 19.7926 41.5868 18.8617 41.6589 17.9245V12.3085H43.6086V17.7324C43.5496 18.3181 43.7094 18.9049 44.0572 19.3799C44.2193 19.5448 44.4148 19.6732 44.6305 19.7565C44.8462 19.8398 45.0772 19.8761 45.3081 19.8629C45.6601 19.8758 46.0106 19.811 46.3347 19.6731C46.5944 19.5604 46.8225 19.3859 46.9991 19.1646C47.1768 18.9416 47.3035 18.6824 47.3703 18.4053C47.4491 18.0923 47.4871 17.7704 47.4833 17.4476V12.3147H49.4331L49.4314 21.1596ZM52.7529 18.3211C52.7586 18.5578 52.8202 18.7897 52.9326 18.9981C53.045 19.2065 53.2051 19.3853 53.3998 19.52C53.812 19.7563 54.2808 19.8757 54.7558 19.8652C54.9636 19.862 55.171 19.8477 55.3773 19.8222C55.6019 19.7963 55.8222 19.7412 56.0326 19.6584C56.2289 19.5846 56.4037 19.4631 56.5411 19.3047C56.6761 19.1337 56.7409 18.9178 56.7225 18.7008C56.7215 18.5851 56.6964 18.4709 56.6488 18.3654C56.6012 18.26 56.5322 18.1656 56.4462 18.0883C56.2555 17.917 56.0328 17.785 55.7908 17.7002C55.4923 17.5948 55.1867 17.5112 54.8761 17.4499C54.5309 17.3809 54.1857 17.303 53.832 17.2239C53.4761 17.1456 53.1247 17.0477 52.7795 16.9307C52.4553 16.8243 52.1502 16.6669 51.8755 16.4645C51.6059 16.2725 51.3868 16.0179 51.2371 15.7227C51.0638 15.375 50.9807 14.9894 50.9953 14.6012C50.9816 14.1712 51.1055 13.748 51.3489 13.3933C51.5828 13.0684 51.8865 12.8001 52.2377 12.6079C52.613 12.4059 53.0174 12.2633 53.4365 12.1853C53.852 12.1087 54.2734 12.0682 54.6959 12.0644C55.1371 12.064 55.577 12.1133 56.0072 12.2113C56.4097 12.2994 56.7926 12.4602 57.1372 12.6859C57.4738 12.905 57.7592 13.1941 57.9739 13.5334C58.2089 13.9155 58.3535 14.3462 58.3965 14.7927H56.3626C56.341 14.5959 56.2715 14.4072 56.1602 14.2434C56.0489 14.0795 55.8992 13.9454 55.7242 13.8526C55.3623 13.6849 54.9669 13.6022 54.5682 13.6108C54.4038 13.6111 54.2395 13.6227 54.0767 13.6453C53.8944 13.67 53.7151 13.7133 53.5416 13.7746C53.3822 13.8346 53.2379 13.9289 53.119 14.0509C53.0016 14.1804 52.9398 14.3509 52.9467 14.5255C52.9432 14.6344 52.9638 14.7426 53.0071 14.8425C53.0504 14.9425 53.1152 15.0316 53.197 15.1035C53.3886 15.265 53.6078 15.3907 53.8439 15.4747C54.1424 15.58 54.4481 15.6636 54.7586 15.725C55.1038 15.7939 55.4575 15.8719 55.8197 15.951C56.1733 16.0284 56.5185 16.1323 56.8637 16.2442C57.1921 16.3485 57.5011 16.506 57.7785 16.7103C58.0444 16.9058 58.265 17.1563 58.4254 17.4448C58.6007 17.7827 58.6868 18.1598 58.6757 18.5403C58.69 19.0121 58.564 19.4775 58.3135 19.8776C58.0743 20.2406 57.7557 20.5445 57.3818 20.7663C56.9851 20.9992 56.5542 21.1681 56.105 21.2669C55.6491 21.3692 55.1834 21.4213 54.7162 21.4223C54.1926 21.4283 53.6704 21.3644 53.1637 21.2324C52.7213 21.1187 52.3033 20.9258 51.9297 20.6629C51.5878 20.4096 51.3076 20.0822 51.1099 19.7053C50.9024 19.2806 50.7933 18.8146 50.7907 18.342H52.7518L52.7529 18.3211ZM59.1887 12.3079H60.6616V9.65252H62.6113V12.3079H64.3713V13.7656H62.6113V18.4934C62.6101 18.6721 62.6188 18.8507 62.6373 19.0284C62.6513 19.1619 62.6924 19.2911 62.7582 19.4081C62.8232 19.5155 62.9229 19.5976 63.0407 19.6409C63.2068 19.6992 63.3824 19.7255 63.5583 19.7183C63.6961 19.7183 63.8345 19.7183 63.9724 19.7098C64.112 19.7024 64.2506 19.6821 64.3865 19.6494V21.159C64.1707 21.185 63.9554 21.2019 63.7566 21.2279C63.5475 21.2526 63.3371 21.2641 63.1266 21.2624C62.7074 21.2734 62.2888 21.2239 61.8836 21.1155C61.6046 21.0402 61.3509 20.8914 61.1492 20.6844C60.9669 20.4855 60.8418 20.2412 60.787 19.977C60.7194 19.6564 60.6816 19.3301 60.674 19.0025V13.7831H59.1988V12.3085L59.1887 12.3079ZM65.7538 12.3079H67.6002V13.5068H67.6346C67.8809 13.0194 68.2855 12.6301 68.7821 12.4029C69.2831 12.175 69.8278 12.0594 70.3782 12.0639C71.0053 12.0478 71.6278 12.1747 72.1986 12.4351C72.7025 12.6661 73.1456 13.0116 73.4924 13.4441C73.8424 13.8906 74.103 14.4002 74.2602 14.9453C74.436 15.5389 74.5232 16.1551 74.519 16.7741C74.5209 17.3573 74.4425 17.9379 74.2862 18.4996C74.1436 19.0319 73.9069 19.5344 73.5873 19.9833C73.2753 20.413 72.8678 20.7644 72.3969 21.0098C71.8717 21.2792 71.2874 21.4127 70.6974 21.398C70.4109 21.3979 70.125 21.372 69.8431 21.3206C69.5612 21.2687 69.2862 21.1847 69.0234 21.0703C68.7619 20.9592 68.5177 20.8109 68.2985 20.6302C68.0808 20.453 67.8918 20.2434 67.738 20.0087H67.7036V24.4257H65.7538V12.3079ZM72.5692 16.7419C72.5696 16.3486 72.5174 15.957 72.4138 15.5775C72.3188 15.2191 72.1609 14.8803 71.9477 14.5769C71.7465 14.2901 71.4843 14.0515 71.1799 13.878C70.7 13.6282 70.1489 13.5501 69.6185 13.6568C69.088 13.7635 68.61 14.0485 68.264 14.4645C67.8197 15.1381 67.6019 15.936 67.6425 16.7419C67.6371 17.162 67.6923 17.5806 67.8064 17.9849C67.903 18.3423 68.0701 18.6768 68.2979 18.9686C68.5062 19.2384 68.7712 19.4593 69.0742 19.6155C69.4155 19.7801 69.7906 19.8627 70.1696 19.8567C70.5485 19.8508 70.9208 19.7563 71.2567 19.581C71.5587 19.4038 71.8179 19.1623 72.0161 18.8736C72.2199 18.5725 72.3661 18.2361 72.4472 17.8815C72.5267 17.507 72.5672 17.1253 72.5681 16.7425L72.5692 16.7419ZM76.0105 8.93555H77.9603V10.7819H76.0105V8.93555ZM76.0105 12.3085H77.9603V21.1596H76.0105V12.3085ZM79.7016 8.93555H81.6513V21.1596H79.7016V8.93555ZM87.6294 21.4014C86.9823 21.4115 86.3398 21.2912 85.7401 21.0477C85.2056 20.8312 84.7249 20.5005 84.3315 20.0788C83.9381 19.6571 83.6416 19.1546 83.4627 18.6064C83.2572 18.0008 83.1552 17.365 83.161 16.7256C83.1558 16.0915 83.2578 15.4612 83.4627 14.8611C83.6488 14.3148 83.9454 13.8127 84.3339 13.3859C84.7271 12.9659 85.2069 12.6362 85.7401 12.4198C86.9555 11.9482 88.3034 11.9482 89.5188 12.4198C90.0533 12.6363 90.534 12.967 90.9274 13.3887C91.3208 13.8104 91.6173 14.3129 91.7962 14.8611C92.0011 15.4612 92.1031 16.0915 92.0979 16.7256C92.1037 17.365 92.0017 18.0008 91.7962 18.6064C91.6101 19.1527 91.3135 19.6548 90.925 20.0816C90.5317 20.5017 90.0519 20.8313 89.5188 21.0477C88.9195 21.291 88.2773 21.4113 87.6306 21.4014H87.6294ZM87.6294 19.8573C88.0238 19.8654 88.4133 19.7701 88.7594 19.581C89.0711 19.4039 89.3392 19.1593 89.5442 18.8652C89.7529 18.5604 89.9075 18.2219 90.0013 17.8646C90.1967 17.1209 90.1967 16.3393 90.0013 15.5956C89.9129 15.2364 89.7579 14.8969 89.5442 14.595C89.3389 14.3034 89.0707 14.0616 88.7594 13.8876C88.4104 13.7063 88.0228 13.6117 87.6294 13.6117C87.2361 13.6117 86.8485 13.7063 86.4995 13.8876C86.1901 14.0643 85.9224 14.3055 85.7147 14.595C85.5044 14.8989 85.3497 15.2377 85.2576 15.5956C85.0622 16.3393 85.0622 17.1209 85.2576 17.8646C85.3477 18.2232 85.5026 18.5623 85.7147 18.8652C85.9197 19.1593 86.1878 19.4039 86.4995 19.581C86.8444 19.7742 87.2354 19.8697 87.6306 19.8573H87.6294ZM92.6674 12.3085H94.1426V9.65308H96.0923V12.3085H97.8523V13.7662H96.0923V18.494C96.0911 18.6727 96.0998 18.8513 96.1183 19.029C96.1323 19.1625 96.1734 19.2917 96.2392 19.4087C96.3043 19.5161 96.4039 19.5982 96.5217 19.6415C96.6878 19.6998 96.8634 19.726 97.0393 19.7189C97.1771 19.7189 97.3156 19.7189 97.4534 19.7104C97.593 19.7029 97.7316 19.6827 97.8675 19.6499V21.1596C97.6517 21.1856 97.4364 21.2025 97.2376 21.2285C97.0285 21.2531 96.8181 21.2646 96.6076 21.263C96.1884 21.274 95.7698 21.2245 95.3646 21.1161C95.0856 21.0408 94.8319 20.8919 94.6302 20.685C94.4479 20.4861 94.3228 20.2417 94.268 19.9776C94.2004 19.6569 94.1626 19.3307 94.155 19.003V13.7837H92.6798V12.3085H92.6674Z" fill="white"/>
                                  <path d="M23.5332 8.93554H14.5957L11.8352 0.429688L9.06672 8.93554L0.128662 8.92706L7.36669 14.1893L4.59826 22.6867L11.8352 17.4357L19.067 22.6901L16.3042 14.1893L23.5332 8.93554Z" fill="#00B67A"/>
                                  <path d="M16.9252 16.1152L16.3037 14.1914L11.8352 17.435L16.9252 16.1152Z" fill="#005128"/>
                              </g>
                              <defs>
                                  <clipPath id="clip0_1696_1946">
                                    <rect width="97.7424" height="24" fill="white" transform="translate(0.128784 0.429688)"/>
                                  </clipPath>
                              </defs>
                            </svg>
                        </p>
                      </div>
                  </div>
                </div>
                <div class="grid-item col-span-4 content-center border-l border-[rgba(70,26,26,0.1)] text-center pt-5">
                  <h5 class=" text-white text-[56px] font-semibold ">$16 - $2_?</h5>
                  <p class=" text-white text-[16px] font-medium ">Per Developer, Per hour</p>
                  <div class="d-block mt-[40px]">
                      <a class="bg-[#FF4D02] inline-block w-[170px] text-center text-[18px] p-4 rounded-[4px] text-white ">
                        Pricing 
                        <svg class=" inline-block ml-[35px] " xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38461 12.0058H15.7745C14.6474 10.8779 13.9292 9.34187 13.9292 7.70433V6.78125H15.7754V7.70433C15.7754 9.95571 17.8265 12.0058 20.0769 12.0058H21V13.852H20.0769C17.8265 13.852 15.7754 15.9021 15.7754 18.1535V19.0766H13.9292V18.1535C13.9292 16.516 14.6474 14.98 15.7745 13.852H4.38461V12.0058Z" fill="white"/>
                        </svg>
                      </a>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>

  <!-- Client Section -->

    <div class="w-full relative pt-6 bg-section-trusted">
      <div class="px-10">
          <h3 class="text-center small-intro"> Clients </h3>
          <h5 class="flex flex-col items-center justify-center text-center md:leading-tight"> <span class="text-2xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium  text-white">Trusted By</span><span class="text-2xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium text-dark-orange mt-[24px]">100+ of Organizations</span> </h5>
          
          <div class="grid grid-cols-1 w-[100%] min-h-[350px] max-w-[100%]">
              <div class="grid-item col-span-1 pt-[40px]">
                <div class="logoSlider">
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/trust1.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/trust1.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/firstfence.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/firstfence.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/barley.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/barley.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/trident.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/trident.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/gab.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/gab.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/conpic.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/conpic.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/another.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/another.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/silver.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/silver.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/rebel.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/rebel.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/trust1.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/trust1.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/firstfence.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/firstfence.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/barley.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/barley.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/trident.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/trident.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/gab.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/gab.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/conpic.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/conpic.svg">
                    </div>
                    <div class="bg-trust-box py-3 px-2 rounded-xl">
                        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/another.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/another.svg">
                    </div>
                </div>
              </div>
          </div>
      </div>
    </div>


    <!-- Blog Section  -->

    <?php get_template_part( 'template-parts/home-blog' );?>

    <!-- FAQ Section  -->
    <div class="w-full relative grid items-center pb-28 pt-16 md:pt-36">
        <div class="container mx-auto md:px-0 px-10">
            <h3 class="text-center small-intro"> FAQ's </h3>
            <h5 class="font-bold text-[35px] md:text-[56px] mb-4 text-center text-white">Common questions<br><span class="text-dark-orange">and their answers </span></h5>
            <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 "> Didn't answer your question? </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-28">
          <?php 
            $faq_argument = array( 'post_type' => 'faq');
            $faq_query	= new WP_Query($faq_argument);
          ?>
          <?php while ($faq_query->have_posts()) : $faq_query->the_post();?>
          <?php $post_id = get_the_ID(); ?>

          <div>
            <div class="accordian-sec-bg mb-5">
            <button class="w-full text-left py-1 px-4  focus:outline-none flex justify-between items-center" onclick="toggleAccordion(<?php echo $post_id; ?>)">
              <span id="accordion-label-<?php echo $post_id; ?>" class="text-xl pt-6 pb-6 font-medium text-white"><?php the_title();?></span>
              <svg id="arrow-down-<?php echo $post_id; ?>" class="h-4 w-4 text-gray-500 rounded-full" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l4 4 4-4"></path>
              </svg>
              <svg id="arrow-up-<?php echo $post_id; ?>" class="h-4 w-4 hidden text-gray-500 rounded-full" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l4-4 4 4"></path>
              </svg>
            </button>
            <div id="accordion-section-<?php echo $post_id; ?>" class="overflow-hidden transition-max-height duration-300 rounded-xl" style="max-height:0;">
              <p class="p-4 text-base text-white"><?php echo get_the_excerpt();?></p>
            </div>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata();?>
        </div>

        </div>
    </div>


    <div class="w-full  relative grid items-center pb-28">
      <div class="container mx-auto md:px-0 px-10 ready-hire-bg">
        <div class="grid grid-cols-1 md:grid-cols-2 min-h-[400px] gap-4">
          <div class="col-span-2 md:col-span-1 content-center pl-7 pr-7 md:pl-48 md:pr-12 mb-10">
            <h5 class="text-center md:text-left text-3xl md:text-5xl lg:text-[45px] 3xl:text-58 font-medium text-white  md:leading-tight mb-4">Ready to Hire a Developer?</h5>
            <span class="text-center md:text-left md:text-[24px] lg:text-[24px] text-white text-base"> It is quick and easy with Smart Working </span>
            
          </div>
          <div class="col-span-2 relative md:col-span-1 px-2 lg:px-6 py-10">
            <div class="bg-white lg:right-[150px] relative lg:absolute top-[-50px] h-[500px] rounded-3xl px-6 py-6 w-[100%] max-w-[538px]">
                <div class="rounded-2xl border-pattern px-6 py-6 w-full">
                  <h4 class="text-dark-orange text-2xl font-bold leading-9"> Share your requirements </h4>
                  <form method="post">
                    <input type="text"  name="skills"  class="mt-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-dark-black focus:border-dark-black  sm:text-sm" fdprocessedid="w0z9xl">
                    <input type="text" name="fullname" placeholder="Full Name" class="mt-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-dark-black focus:border-dark-black  sm:text-sm" fdprocessedid="3p8zek">
                    <input type="email" name="email-address" placeholder="Email Address" class="mt-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-dark-black focus:border-dark-black  sm:text-sm" fdprocessedid="qmz9kh">
                    <button type="submit" class="w-full flex items-center justify-center bg-dark-orange text-white mt-4 py-2 px-4 rounded-md hover:bg-dark-black focus:outline-none focus:bg-dark-black transition duration-200" fdprocessedid="ytbjb">Submit Now <img class="ml-4"  src="<?php echo get_template_directory_uri();?>/images/forward_arrow.svg" alt=""></button>
                  </form>
                  <h4 class="text-center text-dark-black text-sm font-semibold py-6"> Our recruitment specialist will be in touch soon! </h4>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="w-full relative grid items-center px-4 pt-3 md:pt-10">
        <div class="max-w-[1280px] mx-auto">
              <div class="d-block">
                <h3 class="text-center small-intro"> Hire </h3>
                <h5 class=" text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium text-white text-center px-0  md:leading-tight">Hire Offshore<br><span class="text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 text-dark-orange">
                WordPress Developer</span></h5>
              </div>

              <div class="grid grid-cols-1 lg:grid-cols-10 gap-5 content-center mt-5">
                  <div class="grid-item col-span-8 content-center">
                      <h5 class="text-[22px] lg:text-[36px] text-[#fff] font-medium">Why Hiring an Offshore WordPress Developer is the Smart Choice (A Guide)</h5>
                      <p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[20px] text-[#ffffff] font-normal ">
                        The globally popular content management system WordPress is revolutionising website development with its user-friendly interface and robust features. We've compiled this guide to answer your offshore WordPress developer hiring concerns. And if you still have any unanswered questions, you can talk to our consultants anytime. We're happy to <span class="text-[#FF4D02]">help and chat for free.</span>
                      </p>
                      <p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[20px] text-[#FF4F04] font-normal "> 
                        <svg id="change-icons" class="inline-block mr-3" xmlns="http://www.w3.org/2000/svg" width="28" height="29" viewBox="0 0 28 29" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0769 23.1698V9.88162C16.3929 11.1965 18.1849 12.0344 20.0953 12.0344H21.1722V9.88054H20.0953C17.4687 9.88054 15.0769 7.48762 15.0769 4.86208V3.78516H12.923V4.86208C12.923 7.48762 10.5312 9.88054 7.90458 9.88054H6.82766V12.0344H7.90458C9.81504 12.0344 11.607 11.1965 12.923 9.88162L12.923 23.1698H15.0769Z" fill="#FF4F04"/>
                        </svg>
                        <span class="cursor-pointer" id="show-more">Show more</span></p>
                  </div>
                  <div class="grid-item col-span-2 content-center text-end pt-5">
                      <img class="img-3 inline w-[214px]" src="<?php echo get_template_directory_uri();?>/images/show-more-img.png" />
                  </div>
              </div>
            </div>


        </div>
    </div>
    </div>
    <div class="w-full relative" id="sticky-details">
        <div class="max-w-[1280px] mx-auto">
              <div class="show-more-box mt-[20px]">
                <div class="grid grid-cols-1 lg:grid-cols-10 gap-5 mt-5">
                  <div class="grid-item col-span-2 content-start" id="fix-side-box">
                    <div class="stickysidenav">
                      <ul class="scroll-menu">
                        <li><a class=" cursor-pointer" data-location="target1"><span>1.</span> Challenges Businesses Face While Finding Qualified Offshore WordPress Developers</a></li>
                        <li><a class=" cursor-pointer" data-location="target2"><span>2.</span> Why Hire an Offshore WordPress Developer?</a></li>
                        <li><a class=" cursor-pointer" data-location="target3"><span>3.</span> Top Benefits of Hiring Dedicated Offshore WordPress Developers</a></li>
                        <li><a class=" cursor-pointer" data-location="target4"><span>4.</span> Questions to Ask When Hiring an Offshore WordPress Developer</a></li>
                        <li><a class=" cursor-pointer" data-location="target5"><span>5.</span> Conclusion</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="grid-item col-span-6 content-start">
                    <div class="scroll-section min-h-[500px]" id="target1">
                      <h5 class="text-[36px] text-white font-semibold">Challenges Businesses Face While Finding Qualified Offshore WordPress Developers</h5>
                      <h3 class="text-[24px] text-white font-semibold">1. Finding reliable partners</h3>
                      <p class="text-[18px] text-white font-medium ">Finding trustworthy offshore development companies can be difficult. In today's saturated market, countless businesses seem to pop up everywhere. And let's be honest: Many of them cannot perform as per the market expectations and aren't to be trusted with your sensitive information.</p>
                      <h3 class="text-[24px] text-white font-semibold">2. Communication barriers</h3>
                      <p class="text-[18px] text-white font-medium ">These can arise when dealing with offshore developers. For instance, not being in the same time zone can make it difficult to iron out work coordination issues or exchange project feedback.</p>
                    
                      <h3 class="text-[24px] text-white font-semibold">3. Cultural differences</h3>
                      <p class="text-[18px] text-white font-medium ">Variations in work culture, communication methods, and business practices between onshore and offshore developers can often lead to confusion and misunderstanding.</p>
                    
                      <h3 class="text-[24px] text-white font-semibold">4. Quality assurance</h3>
                      <p class="text-[18px] text-white font-medium ">Ensuring the quality and reliability of outsourced development can be challenging, notably when direct oversight and supervision are lacking.</p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">6. Security concerns</h3>
                      <p class="text-[18px] text-white font-medium ">
                      Businesses worry about security when considering offshore software development. They think going outside the country to develop their software will be problematic. When the software they create for the business runs amok, it can bring about significant issues like data breaches, data leaks, etc.

                      </p>

                      <h3 class="text-[24px] text-white font-semibold">7. Scalability and flexibility</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">6. Security concerns</h3>
                      <p class="text-[18px] text-white font-medium ">
                      Businesses worry about security when considering offshore software development. They think going outside the country to develop their software will be problematic. When the software they create for the business runs amok, it can bring about significant issues like data breaches, data leaks, etc.

                      </p>

                      <h3 class="text-[24px] text-white font-semibold">7. Scalability and flexibility</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                    

                    </div>
                    <div class="scroll-section min-h-[500px]" id="target2">
                    <h5 class="text-[36px] text-white font-semibold">Why Hire an Offshore WordPress Developer?</h5>
                      <h3 class="text-[24px] text-white font-semibold">1. Finding reliable partners</h3>
                      <p class="text-[18px] text-white font-medium ">Finding trustworthy offshore development companies can be difficult. In today's saturated market, countless businesses seem to pop up everywhere. And let's be honest: Many of them cannot perform as per the market expectations and aren't to be trusted with your sensitive information.</p>
                      <h3 class="text-[24px] text-white font-semibold">2. Communication barriers</h3>
                      <p class="text-[18px] text-white font-medium ">These can arise when dealing with offshore developers. For instance, not being in the same time zone can make it difficult to iron out work coordination issues or exchange project feedback.</p>
                    
                      <h3 class="text-[24px] text-white font-semibold">3. Cultural differences</h3>
                      <p class="text-[18px] text-white font-medium ">Variations in work culture, communication methods, and business practices between onshore and offshore developers can often lead to confusion and misunderstanding.</p>
                    
                      <h3 class="text-[24px] text-white font-semibold">4. Quality assurance</h3>
                      <p class="text-[18px] text-white font-medium ">Ensuring the quality and reliability of outsourced development can be challenging, notably when direct oversight and supervision are lacking.</p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">6. Security concerns</h3>
                      <p class="text-[18px] text-white font-medium ">
                      Businesses worry about security when considering offshore software development. They think going outside the country to develop their software will be problematic. When the software they create for the business runs amok, it can bring about significant issues like data breaches, data leaks, etc.

                      </p>

                      <h3 class="text-[24px] text-white font-semibold">7. Scalability and flexibility</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">6. Security concerns</h3>
                      <p class="text-[18px] text-white font-medium ">
                      Businesses worry about security when considering offshore software development. They think going outside the country to develop their software will be problematic. When the software they create for the business runs amok, it can bring about significant issues like data breaches, data leaks, etc.

                      </p>

                      <h3 class="text-[24px] text-white font-semibold">7. Scalability and flexibility</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>
                      
                    </div>
                    <div class="scroll-section min-h-[500px]" id="target3">
                    <h5 class="text-[36px] text-white font-semibold">Top Benefits of Hiring Dedicated Offshore WordPress Developers</h5>
                      <h3 class="text-[24px] text-white font-semibold">1. Finding reliable partners</h3>
                      <p class="text-[18px] text-white font-medium ">Finding trustworthy offshore development companies can be difficult. In today's saturated market, countless businesses seem to pop up everywhere. And let's be honest: Many of them cannot perform as per the market expectations and aren't to be trusted with your sensitive information.</p>
                      <h3 class="text-[24px] text-white font-semibold">2. Communication barriers</h3>
                      <p class="text-[18px] text-white font-medium ">These can arise when dealing with offshore developers. For instance, not being in the same time zone can make it difficult to iron out work coordination issues or exchange project feedback.</p>
                    
                      <h3 class="text-[24px] text-white font-semibold">3. Cultural differences</h3>
                      <p class="text-[18px] text-white font-medium ">Variations in work culture, communication methods, and business practices between onshore and offshore developers can often lead to confusion and misunderstanding.</p>
                    
                      <h3 class="text-[24px] text-white font-semibold">4. Quality assurance</h3>
                      <p class="text-[18px] text-white font-medium ">Ensuring the quality and reliability of outsourced development can be challenging, notably when direct oversight and supervision are lacking.</p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">6. Security concerns</h3>
                      <p class="text-[18px] text-white font-medium ">
                      Businesses worry about security when considering offshore software development. They think going outside the country to develop their software will be problematic. When the software they create for the business runs amok, it can bring about significant issues like data breaches, data leaks, etc.

                      </p>

                      <h3 class="text-[24px] text-white font-semibold">7. Scalability and flexibility</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">6. Security concerns</h3>
                      <p class="text-[18px] text-white font-medium ">
                      Businesses worry about security when considering offshore software development. They think going outside the country to develop their software will be problematic. When the software they create for the business runs amok, it can bring about significant issues like data breaches, data leaks, etc.

                      </p>

                      <h3 class="text-[24px] text-white font-semibold">7. Scalability and flexibility</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>
                    
                    </div>
                    <div class="scroll-section min-h-[500px]" id="target4">
                    <h5 class="text-[36px] text-white font-semibold">Questions to Ask When Hiring an Offshore WordPress Developer</h5>
                      <h3 class="text-[24px] text-white font-semibold">1. Finding reliable partners</h3>
                      <p class="text-[18px] text-white font-medium ">Finding trustworthy offshore development companies can be difficult. In today's saturated market, countless businesses seem to pop up everywhere. And let's be honest: Many of them cannot perform as per the market expectations and aren't to be trusted with your sensitive information.</p>
                      <h3 class="text-[24px] text-white font-semibold">2. Communication barriers</h3>
                      <p class="text-[18px] text-white font-medium ">These can arise when dealing with offshore developers. For instance, not being in the same time zone can make it difficult to iron out work coordination issues or exchange project feedback.</p>
                    
                      <h3 class="text-[24px] text-white font-semibold">3. Cultural differences</h3>
                      <p class="text-[18px] text-white font-medium ">Variations in work culture, communication methods, and business practices between onshore and offshore developers can often lead to confusion and misunderstanding.</p>
                    
                      <h3 class="text-[24px] text-white font-semibold">4. Quality assurance</h3>
                      <p class="text-[18px] text-white font-medium ">Ensuring the quality and reliability of outsourced development can be challenging, notably when direct oversight and supervision are lacking.</p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">6. Security concerns</h3>
                      <p class="text-[18px] text-white font-medium ">
                      Businesses worry about security when considering offshore software development. They think going outside the country to develop their software will be problematic. When the software they create for the business runs amok, it can bring about significant issues like data breaches, data leaks, etc.

                      </p>

                      <h3 class="text-[24px] text-white font-semibold">7. Scalability and flexibility</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">6. Security concerns</h3>
                      <p class="text-[18px] text-white font-medium ">
                      Businesses worry about security when considering offshore software development. They think going outside the country to develop their software will be problematic. When the software they create for the business runs amok, it can bring about significant issues like data breaches, data leaks, etc.

                      </p>

                      <h3 class="text-[24px] text-white font-semibold">7. Scalability and flexibility</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>
                      
                      
                    </div>
                    <div class="scroll-section min-h-[500px]" id="target5">
                    <h5 class="text-[36px] text-white font-semibold">Conclusion</h5>
                      <h3 class="text-[24px] text-white font-semibold">1. Finding reliable partners</h3>
                      <p class="text-[18px] text-white font-medium ">Finding trustworthy offshore development companies can be difficult. In today's saturated market, countless businesses seem to pop up everywhere. And let's be honest: Many of them cannot perform as per the market expectations and aren't to be trusted with your sensitive information.</p>
                      <h3 class="text-[24px] text-white font-semibold">2. Communication barriers</h3>
                      <p class="text-[18px] text-white font-medium ">These can arise when dealing with offshore developers. For instance, not being in the same time zone can make it difficult to iron out work coordination issues or exchange project feedback.</p>
                    
                      <h3 class="text-[24px] text-white font-semibold">3. Cultural differences</h3>
                      <p class="text-[18px] text-white font-medium ">Variations in work culture, communication methods, and business practices between onshore and offshore developers can often lead to confusion and misunderstanding.</p>
                    
                      <h3 class="text-[24px] text-white font-semibold">4. Quality assurance</h3>
                      <p class="text-[18px] text-white font-medium ">Ensuring the quality and reliability of outsourced development can be challenging, notably when direct oversight and supervision are lacking.</p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">6. Security concerns</h3>
                      <p class="text-[18px] text-white font-medium ">
                      Businesses worry about security when considering offshore software development. They think going outside the country to develop their software will be problematic. When the software they create for the business runs amok, it can bring about significant issues like data breaches, data leaks, etc.

                      </p>

                      <h3 class="text-[24px] text-white font-semibold">7. Scalability and flexibility</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">6. Security concerns</h3>
                      <p class="text-[18px] text-white font-medium ">
                      Businesses worry about security when considering offshore software development. They think going outside the country to develop their software will be problematic. When the software they create for the business runs amok, it can bring about significant issues like data breaches, data leaks, etc.

                      </p>

                      <h3 class="text-[24px] text-white font-semibold">7. Scalability and flexibility</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>

                      <h3 class="text-[24px] text-white font-semibold">5. Technical expertise</h3>
                      <p class="text-[18px] text-white font-medium ">
                        Assessing the technical skills of offshore developers, including their proficiency in WordPress development, plugin customisation, and theme integration, can be difficult without proper evaluation processes.
                      </p>
                      
                    </div>
                  </div>
                  <div class="grid-item col-span-2 content-start">
                    <div class="bg-[#c282fa] rounded-[10px] min-h-[300px] p-3 stickysidenav">
                        <h5  class="text-[22px] lg:text-[24px] text-[#fff] text-center font-medium mt-[25%]">Hire diverloer</h5>
                        <a class="bg-[#fff] inline-block w-[100%] py-4 text-center text-[18px] px-2 rounded-[14px] text-[#FF4D02] mt-[25%]">Pricing 
                          <svg class="inline-block ml-[35px] " xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38461 12.0058H15.7745C14.6474 10.8779 13.9292 9.34187 13.9292 7.70433V6.78125H15.7754V7.70433C15.7754 9.95571 17.8265 12.0058 20.0769 12.0058H21V13.852H20.0769C17.8265 13.852 15.7754 15.9021 15.7754 18.1535V19.0766H13.9292V18.1535C13.9292 16.516 14.6474 14.98 15.7745 13.852H4.38461V12.0058Z" fill="#FF4D02"/>
                          </svg>
                        </a>
                    <div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    </div>
    </div>

  </div>
</div>



<?php get_footer();?>