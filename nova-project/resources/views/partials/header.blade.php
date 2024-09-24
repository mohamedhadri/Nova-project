<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom-gray-1">
        <div class="container-lg py-3">
            <div class="d-flex justify-content-between w-100 w-lg-auto mb-2 mb-lg-0">
                <div class="d-flex align-items-center me-6">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('admin-themes/assets/media/qsalary/logo.png') }}" alt="Logo" height="40" class="d-inline-block align-top">
                    </a>
                    <span class="text-primary-light fs-4 d-none d-md-block">| Your Cash Solution </span>
                </div>
                <div class="d-flex align-items-center gap-6">
                <div>
                    <a class="nav-link" href="#contact">
                        <div class="d-flex gap-2 d-lg-none">
                            <img class="w-20px" src="{{ asset('admin-themes/assets/media/qsalary/ar-flag.svg') }}" alt="">
                            <span>العربية</span>
                        </div>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                    </button>
                </div>
            </div>
            
                <ul class="navbar-nav ms-auto d-flex align-items-lg-center gap-xl-4 col col-lg-auto">
                    <div class="d-lg-none">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <li class="nav-item p-4">
                                <x-nav-link :active="request()->is('/')" href="/">Home</x-nav-link>
                            </li>
                            <li class="nav-item p-4">
                                <x-nav-link :active="request()->is('about-us')" href="/about-us">About Us</x-nav-link>
                            </li>
                            <li class="nav-item p-4">
                                <x-nav-link :active="request()->is('employer-benefits')" href="/employer-benefits">Employer Benefits</x-nav-link>
                            </li>
                            <li class="nav-item p-4">
                                <x-nav-link :active="request()->is('employee-benefits')" href="/employee-benefits">Employee Benefits</x-nav-link>
                            </li>
                            <li class="nav-item p-4">
                                <x-nav-link :active="request()->is('contact')" href="/contact">Contact</x-nav-link>
                            </li>
                        </div>
                    </div>
                    <div class="d-none d-lg-flex align-items-center">
                        <li class="nav-item p-4">
                            <x-nav-link :active="request()->is('/')" href="/">Home</x-nav-link>
                        </li>
                        <li class="nav-item p-4">
                            <x-nav-link :active="request()->is('about-us')" href="/about-us">About Us</x-nav-link>
                        </li>
                        <li class="nav-item p-4">
                            <x-nav-link :active="request()->is('employer-benefits')" href="/employer-benefits">Employer Benefits</x-nav-link>
                        </li>
                        <li class="nav-item p-4">
                            <x-nav-link :active="request()->is('employee-benefits')" href="/employee-benefits">Employee Benefits</x-nav-link>
                        </li>
                        <li class="nav-item p-4">
                            <x-nav-link :active="request()->is('contact')" href="/contact">Contact</x-nav-link>
                        </li>
                        <li class="nav-item p-4">
                            <a class="nav-link" href="#contact">
                                <div class="d-flex gap-2">
                                    <span>العربية</span>
                                </div>
                            </a>
                        </li>
                        
                        <div class="app-navbar-item ms-1 ms-lg-3">
                            <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light px-12"
                                 data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"
                                 data-kt-menu-trigger="{default: 'click'}">
                                        <span class="symbol symbol-25px">
                                            <img class="w-20px rounded-circle" src="{{ asset('admin-themes/assets/media/flags/egypt.svg') }}" alt="">
                                        <span>المصرية</span>
                                        </span>
                            </div>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded bg-gray-200 menu-state-bg menu-state-primary fw-semibold py-4 fs-6 w-175px"
                                 data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="#">
                                        <div class="d-flex gap-2 align-items-center p-2 dropdown-item rounded-2">
                                            <img class="w-20px rounded-circle" src="{{ asset('admin-themes/assets/media/qsalary/ksa-flag.svg') }}" alt="">
                                            <span href="#" class="fs-7 text-base">السعودية</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#">
                                        <div class="d-flex gap-2 align-items-center p-2 dropdown-item rounded-2">
                                            <img class="w-20px rounded-circle" src="{{ asset('admin-themes/assets/media/flags/kuwait.svg') }}" alt="">
                                            <span href="#" class="fs-7 text-base">الكويت</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#">
                                        <div class="d-flex gap-2 align-items-center p-2 dropdown-item rounded-2">
                                            <img class="w-20px rounded-circle" src="{{ asset('admin-themes/assets/media/flags/qatar.svg') }}" alt="">
                                            <span href="#" class="fs-7 text-base">قطر</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <li class="nav-item ms-6 d-none d-lg-block">
                        <a class="nav-link outline-btn-purple rounded-3 px-6 py-4 text-uppercase" href="#contact">Join today</a>
                    </li>
                </ul>
        </div>
    </nav>
</header>