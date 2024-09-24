@extends('layouts.app')
@section('title', 'about-us')
@section('content')
<div class="bg-primary">
    <div class="d-flex flex-center">
    <div class="d-flex flex-column flex-center pt-20 gap-4">
        <div class="h-4px w-50px bg-primary-light"></div>
        <div class="mt-10"><h1 class="fs-5hx text-primary fw-medium text-center">About Us</h1></div>
        <div class="w-25px mt-10">
            <img src="{{ asset('admin-themes/assets/media/qsalary/circle.svg') }}" alt="" class="w-100 mb-n4">
        </div>
    </div>
    </div>
</div>
<section class="container py-80px px-5">
    <div class="d-flex flex-column flex-md-row gap-16 align-items-center container">
        <div class="col-lg-6 d-flex flex-center"><img src="{{ asset('admin-themes/assets/media/qsalary/about-us-icons/about-us-icon-1.svg') }}" alt="" class="w-md-100 w-75 h-md-300px"></div>
        <div class="col-lg-6">
            <h3 class="text-primary fs-24px mb-6">Our Mission</h3>
            <p class="fs-4 mb-5 lh-xl text-black-1">At Qsalary, our mission is to empower employers and their employees with an innovative financial solution that complies with Shariah principles.</p>
            <p class="fs-4 mb-5 lh-xl text-black-1">We aim to enhance employees’ financial independence and provide immediate financial liquidity, relieving their burdens.</p>
        </div>
    </div>
</section>
<section class="py-80px bg-primary px-5">
    <div class="container">
        <div class="d-flex flex-column flex-md-row gap-16 align-items-center">
            <div class="col-lg-6 order-2 order-md-1">
                <h3 class="text-primary fs-24px mb-6">Our Mission</h3>
                <p class="fs-4 mb-5 lh-xl text-black-1">At Qsalary, our mission is to empower employers and their employees with an innovative financial solution that complies with Shariah principles.</p>
                <p class="fs-4 mb-5 lh-xl text-black-1">We aim to enhance employees’ financial independence and provide immediate financial liquidity, relieving their burdens.</p>
            </div>
            <div class="col-lg-6 d-flex flex-center order-1 order-md-2"><img src="{{ asset('admin-themes/assets/media/qsalary/about-us-icons/about-us-icon-2.svg') }}" alt="" class="w-md-100 w-75 h-md-300px"></div>
        </div>
    </div>
</section>
<section class="container pb-12 px-5">
        <div><h2 class="text-primary text-center my-12 fs-2hx">Our Values</h2></div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-6">

            <div class="col d-flex align-items-lg-center">
                <div class="p-5 border border-gray-300 rounded-4">
                    <img src="{{ asset('admin-themes/assets/media/qsalary/about-us-icons/about-us-icon-3.svg') }}" alt="">
                    <h3 class="text-black fs-24px my-5">Legal Compliance </h3>
                    <p class="lh-lg text-black-1 text-justify">
                        At Qsalary, we understand the importance of adhering to the highest compliance standards.
                        Therefore, we ensure that our solutions fully comply with the principles of Shariah, legislation, and legal frameworks. 
                    </p>
                </div>
            </div>

            <div class="col d-flex flex-column gap-lg-6">
                <div class="p-5 border border-gray-300 rounded-4">
                    <img src="{{ asset('admin-themes/assets/media/qsalary/about-us-icons/about-us-icon-4.svg') }}" alt="">
                    <h3 class="text-black fs-24px my-5">Legal Compliance </h3>
                    <p class="lh-lg text-black-1 text-justify">
                        At Qsalary, we understand the importance of adhering to the highest compliance standards.
                        Therefore, we ensure that our solutions fully comply with the principles of Shariah, legislation, and legal frameworks. 
                    </p>
                </div>
                <div id="kt_docs_swapper_parent_2"></div>
            </div>
            <div class="col d-flex align-items-lg-center">
                <div class="p-5 border border-gray-300 rounded-4">
                    <img src="{{ asset('admin-themes/assets/media/qsalary/about-us-icons/about-us-icon-5.svg') }}" alt="">
                    <h3 class="text-black fs-24px my-5">Legal Compliance </h3>
                    <p class="lh-lg text-black-1 text-justify">
                        At Qsalary, we understand the importance of adhering to the highest compliance standards.
                        Therefore, we ensure that our solutions fully comply with the principles of Shariah, legislation, and legal frameworks. 
                    </p>
                </div>
                
            </div>

            <div class="col" id="kt_docs_swapper_parent_1">
             
                <!--begin::Swapper-->
                <div class=""
                data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{
                    default: '#kt_docs_swapper_parent_1',
                    lg: '#kt_docs_swapper_parent_2'
                }">
                <div class="p-5 border border-gray-300 rounded-4">
                    <img src="{{ asset('admin-themes/assets/media/qsalary/about-us-icons/about-us-icon-6.svg') }}" alt="">
                    <h3 class="text-black fs-24px my-5">Legal Compliance </h3>
                    <p class="lh-lg text-black-1 text-justify">
                        At Qsalary, we understand the importance of adhering to the highest compliance standards.
                        Therefore, we ensure that our solutions fully comply with the principles of Shariah, legislation, and legal frameworks. 
                    </p>
                </div>
                </div>
                <!--end::Swapper-->
                 
            </div>
        </div>
        
        
</section>
@component('components.request-demo')
@endcomponent
@component('components.subscribe-to-mailing')
@endcomponent
@endsection