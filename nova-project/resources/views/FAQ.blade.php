@extends('layouts.app')
@section('title', 'FAQs')
@section('content')

<div class="bg-primary">
    <div class="d-flex flex-center">
        <div class="d-flex flex-column flex-center pt-100 gap-4">
            <div class="h-4px w-50px bg-primary-light"></div>
            <div class="mt-10"><h1 class="fs-5hx text-primary text-center">FAQ</h1></div>
            <div class="w-25px mt-10">
                <img src="{{ asset('admin-themes/assets/media/qsalary/circle.svg') }}" alt="" class="w-100 mb-n4">
            </div>
        </div>
    </div>
</div>
<section class="container py-80px">
    <div class="row justify-content-end">
        <div class="col-lg-4 mb-12">
            <h5 class="mb-6 text-primary fs-4">index</h5>
            <div class="bg-primary rounded-4 p-5">
                <div class="border-bottom border-gray-400 py-4">
                    <a href="#Introductions and Key Benefits" class="" data-kt-scroll-toggle>
                    <span><i class="bi bi-chevron-right text-black"></i></span>
                    <span class="fs-5">Introductions and Key Benefits</span>
                    </a>
                </div>
                <div class="border-bottom border-gray-400 py-4">
                    <a href="#Compliances" class="" data-kt-scroll-toggle>
                    <span><i class="bi bi-chevron-right text-black"></i></span>
                    <span class="fs-5">Compliances</span>
                    </a>
                </div>
                <div class="border-bottom border-gray-400 py-4">
                    <a href="#Registration" class="" data-kt-scroll-toggle>
                    <span><i class="bi bi-chevron-right text-black"></i></span>
                    <span class="fs-5">Registration</span>
                    </a>
                </div>
                <div class="border-bottom border-gray-400 py-4">
                    <a href="#Transactions" class="" data-kt-scroll-toggle>
                    <span><i class="bi bi-chevron-right text-black"></i></span>
                    <span class="fs-5">Transactions</span>
                    </a>
                </div>
                <div class="border-bottom border-gray-400 py-4">
                    <a href="#Privacy and Security" class="" data-kt-scroll-toggle>
                    <span><i class="bi bi-chevron-right text-black"></i></span>
                    <span class="fs-5">Privacy and Security</span>
                    </a>
                </div>
                
            </div>
        </div>
        <div class="col-lg-8 py-14">
            <div id="Introductions and Key Benefits">
                <h3 class="text-primary fs-1 mb-8">Introductions and Key Benefits</h3>
                <div class="accordion accordion-icon-collapse" id="kt_accordion_1">

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_item_1">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_1_item_1" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_1">
                            ...
                        </div>
                    </div>

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_item_2">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_1_item_2" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_1">
                            ...
                        </div>
                    </div>

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_3_item_1">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_3_item_1" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_1">
                            ...
                        </div>
                    </div>

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_item_4">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_1_item_4" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_1">
                            ...
                        </div>
                    </div>
                    
                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_item_5">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_1_item_5" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_1">
                            ...
                        </div>
                    </div>

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_item_6">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_1_item_6" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_1">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 py-14">
            <div id="Compliances">
                <h3 class="text-primary fs-1 mb-8">Compliances</h3>
                <div class="accordion accordion-icon-collapse" id="kt_accordion_2">

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_1">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_2_item_1" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_2">
                            ...
                        </div>
                    </div>

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_2">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_2_item_2" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_2">
                            ...
                        </div>
                    </div>

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_3">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_2_item_3" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_2">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 py-14">
            <div id="Registration">
                <h3 class="text-primary fs-1 mb-8">Registration</h3>
                <div class="accordion accordion-icon-collapse" id="kt_accordion_3">

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_3_item_1">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_3_item_1" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_3">
                            ...
                        </div>
                    </div>

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_3_item_2">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_3_item_2" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_3">
                            ...
                        </div>
                    </div>

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_3_item_3">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_3_item_3" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_3">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 py-14">
            <div id="Transactions">
                <h3 class="text-primary fs-1 mb-8">Transactions</h3>
                <div class="accordion accordion-icon-collapse" id="kt_accordion_4">

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_4_item_1">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_4_item_1" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_4">
                            ...
                        </div>
                    </div>

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_4_item_2">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_4_item_2" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_4">
                            ...
                        </div>
                    </div>

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_4_item_3">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_4_item_3" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_4">
                            ...
                        </div>
                    </div>

                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_4_item_4">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_4_item_4" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_4">
                            ...
                        </div>
                    </div>
                    
                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_4_item_5">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_4_item_5" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_4">
                            ...
                        </div>
                    </div>
                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_4_item_6">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_4_item_6" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_4">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 py-14">
            <div id="Privacy and Security">
                <h3 class="text-primary fs-1 mb-8">Privacy and Security</h3>
                <div class="accordion accordion-icon-collapse" id="kt_accordion_5">
                    <div class="mb-5 border-bottom border-gray-300 py-2">
                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_5_item_1">
                            <span class="accordion-icon">
                                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                            
                        </div>
                        <div id="kt_accordion_5_item_1" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_5">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

@component('components.request-demo')
@endcomponent

@component('components.subscribe-to-mailing')
@endcomponent
@endsection