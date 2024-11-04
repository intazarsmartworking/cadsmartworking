<?php
/**
 * Template Name: Gated Content Landing Page
 *
 * @package sws
 */

 get_header();
?>
<section class="w-full py-16">
    <img class="bg-img absolute w-[100%] right-[0] z-0 top-[-1100px]" src="<?php echo get_template_directory_uri();?>/images/bg-left.svg" alt="">
    
    <div class="w-full relative z-10">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-10 gap-4 mb-10">
                    <div class="grid-item col-span-5">
                        <div class="text-left small-intro !ml-0"> REPORTS </div>
                        <h1 class="text-[26px] lg:text-[56px] font-medium text-white lg:leading-tight"> The Challenges and <br>
                            <span class="gradient-text">Opportunities Related to</span> <br>
                            <span class="text-dark-orange">Delivering Digital Experiences</span>
                        </h1>
                        <ul class="text-[#fff] text-[18px] mt-[40px]">
                            <li>How DXPs drive digital transformation and why they remain a top business priority</li>
                            <li>How organizations are using DXPs to address business challenges and opportunities</li>
                            <li>YThe factors respondents value most when evaluating DXP vendors</li>
                        </ul>
                    </div>
                    <div class="grid-item col-span-5">
                        <div class=" w-[100%] ml-auto max-w-[460px] bg-[#1F0C04] rounded-[30px] px-[35px] pt-[35px] border border-[#401A0A]">
                            <img class=" w-[100%] max-w-[100%] h-auto" src="<?php echo get_template_directory_uri();?>/images/gant-img.svg" />
                        </div>
                    </div>
            </div>
        </div>
        <div class="container mx-auto mt-6 md:mt-[100px]">
            <div class="grid grid-cols-1 md:grid-cols-10 gap-2 md:gap-6 p-3 md:p-[80px] bg-[#1F0C04] border border-[#401A0A] rounded-[30px]">
                    <div class="grid-item col-span-6">
                    <p class="text-white text-[20px] mb-10">Modern businesses face unprecedented challenges in meeting modern consumer expectations, hindered by legacy web content management systems 
                    that fail to support dynamic, personalized content delivery across diverse platforms. While emerging solutions like headless and composable 
                    content management systems seek to fill that gap, many organizations continue to grapple with the complexities of implementation and integration 
                    in an ever-evolving digital landscape.</p>

                    <p class="text-white text-[20px] mb-10">To address these challenges, TechTarget’s Enterprise Strategy Group explored the business drivers, challenges, and opportunities influencing 
                    the DXP market in an e-book titled The Evolution of Digital Experience Platforms.</p>

                    <p class="text-white text-[20px] mb-10">The report offers comprehensive insights into the shifting digital experience landscape, explores real business use cases, and highlights 
                    strategies for success.</p>
                    </div>
                    <div class="grid-item col-span-4">
                        <div class=" w-[100%] ml-auto max-w-[480px] bg-[#fff] rounded-[20px] p-[35px] border border-[#fff]">
                            <h5 class="text-[#000] font-bold text-[30px] mb-[30px]">Download the Report</h5>
                            <div class="mb-5">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your name" required />
                            </div>
                            <div class="mb-5">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Work Email</label>
                                <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email" required />
                            </div>
                            <div class="mb-5">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                                <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your company" required />
                            </div>
                            <div class="mb-5">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                                <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your Phone" required />
                            </div> 
                            <div class="mb-5">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Annual Revenue Range</label>
                                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>France</option>
                                    <option>Germany</option>
                                </select>
                            </div> 
                            <div class="mb-5">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>France</option>
                                    <option>Germany</option>
                                </select>
                            </div> 
                            <div class="">
                                <button class="button w-[100%] block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange ">Download</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>
</section>





<?php get_footer();?>