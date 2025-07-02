<!-- Start Main Content -->
<div class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
    <div class="grid grid-cols-12 gap-x-4">
        <!-- Start Dashboard Header -->
        <div class="col-span-full">
            <div class="card bg-heading dark:bg-primary-500 py-7 xl:mb-[104px] shadow-xl rounded-3xl transition-all duration-300">
                <div class="flex flex-col-reverse sm:flex-row gap-5 justify-between items-center">
                    <div class="shrink-0">
                        <h1 class="text-white text-[2rem] leading-none font-bold flex items-center gap-2">
                            <span class="shrink-0" id="greeting">Good Day, Orion</span>
                            <span class="select-none hidden md:inline-block animate-hand-wave origin-[70%_70%]">🐾</span>
                        </h1>
                        <p class="font-spline_sans text-base text-dark-text dark:text-white mt-2">Here's what's updating with your Pet Store today</p>
                    </div>
                    <div class="shrink-0">
                        <p class="font-spline_sans text-base !leading-none text-white today">Today is Monday, June 30, 2025</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 px-0 sm:px-6 mt-8 xl:mb-[-116px]">
                    <!-- Total Sales Card -->
                    <div class="card col-span-full md:col-span-6 xl:col-span-3 p-6 rounded-2xl flex flex-col gap-8 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% mb-0 shadow-lg hover:shadow-2xl transition-shadow duration-300 group cursor-pointer focus:outline-none focus:ring-2 focus:ring-primary-500" tabindex="0" aria-label="Total Sales">
                        <div class="flex justify-between items-center">
                            <h6 class="leading-none text-gray-500 dark:text-dark-text font-semibold text-lg">Total Sales</h6>
                            <div class="size-12 rounded-lg text-primary-500 dark:text-white bg-primary-200 dark:bg-dark-icon flex items-center justify-center dk-theme-card-square group-hover:bg-primary-500 group-hover:text-white transition-colors duration-200">
                                <i class="ri-money-dollar-circle-line pet-icon text-2xl"></i>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="card-title text-4xl font-bold text-heading dark:text-white">
                                KES <span class="counter-value" data-value="150000">0</span>
                            </div>
                            <div class="leading-none text-gray-500 dark:text-dark-text mt-2 flex items-center gap-2">
                                <span class="text-lg font-semibold text-primary-500 flex items-center">
                                    <i class="ri-arrow-up-line text-inherit font-normal"></i>
                                    3.12%
                                </span>
                                <span class="font-spline_sans text-gray-700 dark:text-dark-text-two">VS / last week</span>
                            </div>
                        </div>
                    </div>
                    <!-- Total Orders Card -->
                    <div class="card col-span-full md:col-span-6 xl:col-span-3 p-6 rounded-2xl flex flex-col gap-8 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% mb-0 shadow-lg hover:shadow-2xl transition-shadow duration-300 group cursor-pointer focus:outline-none focus:ring-2 focus:ring-primary-500" tabindex="0" aria-label="Total Orders">
                        <div class="flex justify-between items-center">
                            <h6 class="leading-none text-gray-500 dark:text-dark-text font-semibold text-lg">Total Orders</h6>
                            <div class="size-12 rounded-lg text-primary-500 dark:text-white bg-primary-200 dark:bg-dark-icon flex items-center justify-center dk-theme-card-square group-hover:bg-primary-500 group-hover:text-white transition-colors duration-200">
                                <i class="ri-shopping-cart-line pet-icon text-2xl"></i>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="card-title text-4xl font-bold text-heading dark:text-white">
                                <span class="counter-value" data-value="1800">0</span>
                            </div>
                            <div class="leading-none text-gray-500 dark:text-dark-text mt-2 flex items-center gap-2">
                                <span class="text-lg font-semibold text-success flex items-center">
                                    <i class="ri-arrow-up-line text-inherit font-normal"></i>
                                    4.85%
                                </span>
                                <span class="font-spline_sans text-gray-700 dark:text-dark-text-two">VS / last week</span>
                            </div>
                        </div>
                    </div>
                    <!-- Customers Card -->
                    <div class="card col-span-full md:col-span-6 xl:col-span-3 p-6 rounded-2xl flex flex-col gap-8 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% mb-0 shadow-lg hover:shadow-2xl transition-shadow duration-300 group cursor-pointer focus:outline-none focus:ring-2 focus:ring-primary-500" tabindex="0" aria-label="Customers">
                        <div class="flex justify-between items-center">
                            <h6 class="leading-none text-gray-500 dark:text-dark-text font-semibold text-lg">Customers</h6>
                            <div class="size-12 rounded-lg text-primary-500 dark:text-white bg-primary-200 dark:bg-dark-icon flex items-center justify-center dk-theme-card-square group-hover:bg-primary-500 group-hover:text-white transition-colors duration-200">
                                <i class="ri-user-heart-line pet-icon text-2xl"></i>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="card-title text-4xl font-bold text-heading dark:text-white">
                                <span class="counter-value" data-value="35000">0</span>
                            </div>
                            <div class="leading-none text-gray-500 dark:text-dark-text mt-2 flex items-center gap-2">
                                <span class="text-lg font-semibold text-danger flex items-center">
                                    <i class="ri-arrow-down-line text-inherit font-normal"></i>
                                    0.95%
                                </span>
                                <span class="font-spline_sans text-gray-700 dark:text-dark-text-two">VS / last week</span>
                            </div>
                        </div>
                    </div>
                    <!-- Growth Card -->
                    <div class="card col-span-full md:col-span-6 xl:col-span-3 p-6 rounded-2xl flex flex-col gap-8 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% mb-0 shadow-lg hover:shadow-2xl transition-shadow duration-300 group cursor-pointer focus:outline-none focus:ring-2 focus:ring-primary-500" tabindex="0" aria-label="Growth">
                        <div class="flex justify-between items-center">
                            <h6 class="leading-none text-gray-500 dark:text-dark-text font-semibold text-lg">Growth</h6>
                            <div class="size-12 rounded-lg text-primary-500 dark:text-white bg-primary-200 dark:bg-dark-icon flex items-center justify-center dk-theme-card-square group-hover:bg-primary-500 group-hover:text-white transition-colors duration-200">
                                <i class="ri-line-chart-line pet-icon text-2xl"></i>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="card-title text-4xl font-bold text-heading dark:text-white">
                                +<span class="counter-value" data-value="25.75">0</span>%
                            </div>
                            <div class="leading-none text-gray-500 dark:text-dark-text mt-2 flex items-center gap-2">
                                <span class="text-lg font-semibold text-success flex items-center">
                                    <i class="ri-arrow-up-line text-inherit font-normal"></i>
                                    5.32%
                                </span>
                                <span class="font-spline_sans text-gray-700 dark:text-dark-text-two">VS / last week</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Dashboard Header -->

        <!-- Start Sells Overview -->
        <div class="col-span-full 2xl:col-span-7 card mt-8 shadow-lg rounded-2xl">
            <div class="flex justify-between items-center p-6 pb-2">
                <h6 class="card-title text-xl font-bold text-heading">Sells Overview</h6>
                <select class="form-input form-select rounded-lg border-gray-300 focus:ring-primary-500 focus:border-primary-500 transition-all">
                    <option>This Month</option>
                    <option>This Year</option>
                    <option>This Week</option>
                </select>
            </div>
            <div id="sells-overview-chart" class="px-6 pb-6"></div>
        </div>
        <!-- End Sells Overview -->

        <!-- Start Recent Order -->
        <div class="col-span-full 2xl:col-span-5 card mt-8 shadow-lg rounded-2xl">
            <div class="flex justify-between items-center p-6 pb-2">
                <h6 class="card-title text-xl font-bold text-heading">Recent Order</h6>
                <a href="#" class="btn b-solid btn-primary-solid btn-sm dk-theme-card-square rounded-lg shadow hover:shadow-md transition-all">View all</a>
            </div>
            <div class="mt-5 px-6 pb-6">
                <!-- Product List Tab -->
                <div class="dashkit-tab flex items-center gap-2 flex-nowrap overflow-y-hidden overscroll-x-auto py-5 dk-border-one !border-x-0" id="recentOrderTab">
                    <button id="productOne" class="dashkit-tab-btn p-2 rounded-lg dk-border-one text-gray-800 dark:text-dark-text hover:bg-primary-500 [&.active]:bg-primary-500 hover:text-white [&.active]:text-white !border-primary-200 [&.active]:border-primary-500 dark:!border-dark-border flex-center shrink-0 gap-2 cursor-pointer ac-transition group/product dk-theme-card-square focus:outline-none focus:ring-2 focus:ring-primary-500 transition-all" tabindex="0">
                        <div class="size-6 flex-center bg-primary-200 dark:bg-dark-icon group-hover/product:bg-white group-[.active]/product:bg-white rounded-[4px] shrink-0">
                            <i class="ri-bowl-line pet-icon"></i>
                        </div>
                        <h6 class="text-inherit font-medium leading-none shrink-0 hidden sm:block">Pet Food</h6>
                    </button>
                    <button id="productTwo" class="dashkit-tab-btn p-2 rounded-lg dk-border-one text-gray-800 dark:text-dark-text hover:bg-primary-500 [&.active]:bg-primary-500 hover:text-white [&.active]:text-white !border-primary-200 [&.active]:border-primary-500 dark:!border-dark-border flex-center shrink-0 gap-2 cursor-pointer ac-transition group/product dk-theme-card-square active focus:outline-none focus:ring-2 focus:ring-primary-500 transition-all" tabindex="0">
                        <div class="size-6 flex-center bg-primary-200 dark:bg-dark-icon group-hover/product:bg-white group-[.active]/product:bg-white rounded-[4px] shrink-0">
                            <i class="ri-t-shirt-line pet-icon"></i>
                        </div>
                        <h6 class="text-inherit font-medium leading-none shrink-0 hidden sm:block">Pet Apparel</h6>
                    </button>
                    <button id="productThree" class="dashkit-tab-btn p-2 rounded-lg dk-border-one text-gray-800 dark:text-dark-text hover:bg-primary-500 [&.active]:bg-primary-500 hover:text-white [&.active]:text-white !border-primary-200 [&.active]:border-primary-500 dark:!border-dark-border flex-center shrink-0 gap-2 cursor-pointer ac-transition group/product dk-theme-card-square focus:outline-none focus:ring-2 focus:ring-primary-500 transition-all" tabindex="0">
                        <div class="size-6 flex-center bg-primary-200 dark:bg-dark-icon group-hover/product:bg-white group-[.active]/product:bg-white rounded-[4px] shrink-0">
                            <i class="ri-bear-smile-line pet-icon"></i>
                        </div>
                        <h6 class="text-inherit font-medium leading-none shrink-0 hidden sm:block">Toys</h6>
                    </button>
                    <button id="productFour" class="dashkit-tab-btn p-2 rounded-lg dk-border-one text-gray-800 dark:text-dark-text hover:bg-primary-500 [&.active]:bg-primary-500 hover:text-white [&.active]:text-white !border-primary-200 [&.active]:border-primary-500 dark:!border-dark-border flex-center shrink-0 gap-2 cursor-pointer ac-transition group/product dk-theme-card-square focus:outline-none focus:ring-2 focus:ring-primary-500 transition-all" tabindex="0">
                        <div class="size-6 flex-center bg-primary-200 dark:bg-dark-icon group-hover/product:bg-white group-[.active]/product:bg-white rounded-[4px] shrink-0">
                            <i class="ri-scissors-line pet-icon"></i>
                        </div>
                        <h6 class="text-inherit font-medium leading-none shrink-0 hidden sm:block">Grooming</h6>
                    </button>
                </div>
                <!-- Product Content -->
                <div class="dashkit-tab-content mt-0 *:hidden" id="recentOrderTabContent">
                    <!-- Pet Food Tab -->
                    <div class="dashkit-tab-pane" data-tab="productOne">
                        <div class="overflow-x-auto scrollbar-table">
                            <table class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                    <!-- Table Row -->
                                    <tr class="hover:bg-primary-50 dark:hover:bg-dark-icon transition-colors">
                                        <td class="px-4 py-5 first:pl-0">
                                            <div class="flex items-center gap-3">
                                                <a href="#" class="size-12 rounded-lg overflow-hidden shrink-0 dk-theme-card-square">
                                                    <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=96&q=80" alt="Premium Dry Dog Food">
                                                </a>
                                                <div>
                                                    <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">Premium Dry Dog Food</h6>
                                                    <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">100 Items</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-5 first:pl-0">75</td>
                                        <td class="px-4 py-5 first:pl-0">2.5k</td>
                                        <td class="px-4 py-5 first:pl-0">KES 4,500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Pet Apparel Tab -->
                    <div class="dashkit-tab-pane !block" data-tab="productTwo">
                        <div class="overflow-x-auto scrollbar-table">
                            <table class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                    <!-- Table Row -->
                                    <tr class="hover:bg-primary-50 dark:hover:bg-dark-icon transition-colors">
                                        <td class="px-4 py-5 first:pl-0">
                                            <div class="flex items-center gap-3">
                                                <a href="#" class="size-12 rounded-lg overflow-hidden shrink-0 dk-theme-card-square">
                                                    <img src="https://images.unsplash.com/photo-1518717758536-85ae29035b6d?auto=format&fit=crop&w=96&q=80" alt="Cozy Dog Sweater">
                                                </a>
                                                <div>
                                                    <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">Cozy Dog Sweater</h6>
                                                    <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">150 Items</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-5 first:pl-0">60</td>
                                        <td class="px-4 py-5 first:pl-0">3.2k</td>
                                        <td class="px-4 py-5 first:pl-0">KES 3,200</td>
                                    </tr>
                                    <!-- Table Row -->
                                    <tr class="hover:bg-primary-50 dark:hover:bg-dark-icon transition-colors">
                                        <td class="px-4 py-5 first:pl-0">
                                            <div class="flex items-center gap-3">
                                                <a href="#" class="size-12 rounded-lg overflow-hidden shrink-0 dk-theme-card-square">
                                                    <img src="https://images.unsplash.com/photo-1518715308788-3005759c61d3?auto=format&fit=crop&w=96&q=80" alt="Fancy Cat Collar">
                                                </a>
                                                <div>
                                                    <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">Fancy Cat Collar</h6>
                                                    <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">200 Items</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-5 first:pl-0">80</td>
                                        <td class="px-4 py-5 first:pl-0">4.1k</td>
                                        <td class="px-4 py-5 first:pl-0">KES 1,250</td>
                                    </tr>
                                    <!-- Table Row -->
                                    <tr class="hover:bg-primary-50 dark:hover:bg-dark-icon transition-colors">
                                        <td class="px-4 py-5 first:pl-0">
                                            <div class="flex items-center gap-3">
                                                <a href="#" class="size-12 rounded-lg overflow-hidden shrink-0 dk-theme-card-square">
                                                    <img src="https://images.unsplash.com/photo-1518715308788-3005759c61d3?auto=format&fit=crop&w=96&q=80" alt="Stylish Pet Bandana">
                                                </a>
                                                <div>
                                                    <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">Stylish Pet Bandana</h6>
                                                    <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">90 Items</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-5 first:pl-0">45</td>
                                        <td class="px-4 py-5 first:pl-0">1.8k</td>
                                        <td class="px-4 py-5 first:pl-0">KES 900</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Toys Tab -->
                    <div class="dashkit-tab-pane" data-tab="productThree">
                        <div class="overflow-x-auto scrollbar-table">
                            <table class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                    <!-- Table Row -->
                                    <tr class="hover:bg-primary-50 dark:hover:bg-dark-icon transition-colors">
                                        <td class="px-4 py-5 first:pl-0">
                                            <div class="flex items-center gap-3">
                                                <a href="#" class="size-12 rounded-lg overflow-hidden shrink-0 dk-theme-card-square">
                                                    <img src="https://images.unsplash.com/photo-1518715308788-3005759c61d3?auto=format&fit=crop&w=96&q=80" alt="Durable Chew Toy">
                                                </a>
                                                <div>
                                                    <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">Durable Chew Toy</h6>
                                                    <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">120 Items</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-5 first:pl-0">65</td>
                                        <td class="px-4 py-5 first:pl-0">2.8k</td>
                                        <td class="px-4 py-5 first:pl-0">KES 1,600</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Grooming Tab -->
                    <div class="dashkit-tab-pane" data-tab="productFour">
                        <div class="overflow-x-auto scrollbar-table">
                            <table class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                    <!-- Table Row -->
                                    <tr class="hover:bg-primary-50 dark:hover:bg-dark-icon transition-colors">
                                        <td class="px-4 py-5 first:pl-0">
                                            <div class="flex items-center gap-3">
                                                <a href="#" class="size-12 rounded-lg overflow-hidden shrink-0 dk-theme-card-square">
                                                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=96&q=80" alt="Pet Grooming Kit">
                                                </a>
                                                <div>
                                                    <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">Pet Grooming Kit</h6>
                                                    <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">50 Items</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-5 first:pl-0">30</td>
                                        <td class="px-4 py-5 first:pl-0">1.1k</td>
                                        <td class="px-4 py-5 first:pl-0">KES 2,200</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Recent Order -->
    </div>
</div>
<!-- End Main Content -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const greeting = document.getElementById('greeting');
        const userName = 'Orion';
        const now = new Date();
        const hour = now.getHours();
        let greetText = 'Good Day';
        if (hour < 12) {
            greetText = 'Good Morning';
        } else if (hour < 18) {
            greetText = 'Good Afternoon';
        } else {
            greetText = 'Good Evening';
        }
        greeting.textContent = `${greetText}, ${userName}`;
    });
</script>
