@extends('layouts.app')
@section('title', 'employee-benefits')
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.14/lottie.min.js"></script>
</head>
@section('content')
<div class="bg-primary px-2">
    <div class="d-flex flex-center">
    <div class="d-flex flex-column flex-center pt-100 gap-4">
        <div class="h-4px w-50px bg-primary-light"></div>
        <div class="mt-10"><h1 class="fs-5hx text-primary fw-medium text-center">Employee Benefits</h1></div>
        <div class="w-25px mt-10">
            <img src="{{ asset('admin-themes/assets/media/qsalary/circle.svg') }}" alt="" class="w-100 mb-n4">
        </div>
    </div>
    </div>
</div>
<section class="container py-80px px-5">
    <div class="d-flex flex-column flex-md-row justify-content-evenly">
        <div class="w-md-300px"><h3 class="text-primary fs-24px fw-lighter lh-base mt-6">With Qsalary, Every Day is a Payday, and Liquidity is Readily Available.</h3></div>
        <div class="mw-500px min-w-md-425px">
            <h5 class="text-primary fs-3 fw-lighter mb-6 mt-2">Eliminate Your Financial Issues with Qsalary</h5>
            <p class="fs-16px text-black-1">The app allows you to get your earned wages at any time. No more waiting for the usual salary date or financial department approval to access liquidity.</p>
            <p class="fs-16px text-black-1">With the Qsalary, liquidity is just a click away. After requesting, the amount it will be  transferred directly to your bank account, helping you handle financial emergencies and personal needs easily and quickly.</p>
        </div>
    </div>
</section>
<section class="bg-primary py-100 px-4">
    <div class="container">
        <h2 class="text-center text-primary fs-2qx mb-16">Register Now to Enjoy Qsalary's Benefits</h2>
        <div class="d-flex flex-column flex-lg-row flex-wrap justify-content-center gap-6">
            <div class="p-8 rounded-4 border border-3 border-gray mw-lg-500px">
                <div class="d-flex">
                    <div><img class="w-100 w-lg-80px mt-2 min-w-50px" src="{{ asset('admin-themes/assets/media/qsalary/employee-icons/employee-card-1.svg') }}" alt=""></div>
                    <div>
                        <div class="mb-6"><h3 class="fs-2x">Track Your Expenses Accurately and Easily</h3></div>
                        <p class="fs-4 text-black-1">
                            Qsalary offers a simple and user-friendly interface displaying your withdrawals and the remaining wages.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="p-8 rounded-4 border border-3 border-gray mw-lg-500px">
                <div class="d-flex">
                    <div><img class="w-100 w-lg-80px mt-2 min-w-50px" src="{{ asset('admin-themes/assets/media/qsalary/employee-icons/employee-card-2.svg') }}" alt=""></div>
                    <div>
                        <div class="mb-6"><h3 class="fs-2x">Track Your Expenses Accurately and Easily</h3></div>
                        <p class="fs-4 text-black-1">
                            Qsalary offers a simple and user-friendly interface displaying your withdrawals and the remaining wages.
                        </p>
                    </div>
                </div>
            </div>

            <div class="p-8 rounded-4 border border-3 border-gray mw-lg-500px">
                <div class="d-flex">
                    <div><img class="w-100 w-lg-80px mt-2 min-w-50px" src="{{ asset('admin-themes/assets/media/qsalary/employee-icons/employee-card-3.svg') }}" alt=""></div>
                    <div>
                        <div class="mb-6"><h3 class="fs-2x">Track Your Expenses Accurately and Easily</h3></div>
                        <p class="fs-4 text-black-1">
                            Qsalary offers a simple and user-friendly interface displaying your withdrawals and the remaining wages.
                        </p>
                    </div>
                </div>
            </div>

            <div class="p-8 rounded-4 border border-3 border-gray mw-lg-500px">
                <div class="d-flex">
                    <div><img class="w-100 w-lg-80px mt-2 min-w-50px" src="{{ asset('admin-themes/assets/media/qsalary/employee-icons/employee-card-4.svg') }}" alt=""></div>
                    <div>
                        <div class="mb-6"><h3 class="fs-2x">Track Your Expenses Accurately and Easily</h3></div>
                        <p class="fs-4 text-black-1">
                            Qsalary offers a simple and user-friendly interface displaying your withdrawals and the remaining wages.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container pt-12 py-lg-20 px-5">
    <div class="text-center mb-16">
        <h2 class="text-center text-primary fs-2qx mb-10 fw-light">How Does the App Work?</h2>
        <p class="fs-4 text-black-1">Qsalary works easily and simply, allowing you to request your earned wages in just three steps</p>
    </div>
    <div class="d-flex flex-column flex-lg-row gap-6 flex-center">
        <div class="w-lg-375px">
            <div class="bg-primary rounded-4 mb-5">
                <div id="lottie-container-1" class="lottie-container"></div>
            </div>
            <div class="text-center">
                <h3 class="text-primary fs-1 fw-lighter mb-6">Registration & Authentication </h3>
                <p class="fs-4 lh-lg text-black-1">Download the app 
                    <strong>&gt;</strong> Enter your personal information 
                    <strong>&gt;</strong> Verify your data 
                    <strong>&gt;</strong> Access the Qsalary app to view company-provided data 
                    <strong>&gt;</strong> Access to your financial details. 
                </p>
            </div>
        </div>

        <div class="w-lg-375px">
            <div class="bg-primary rounded-4 mb-5">
                <div id="lottie-container-2" class="lottie-container"></div>
            </div>
            <div class="text-center">
                <h3 class="text-primary fs-1 fw-lighter mb-6">Submit Withdrawal Request</h3>
                <p class="fs-4 lh-lg text-black-1">After submitting your request, the amount will be transferred to your account and deducted from your salary the following month.</p>
            </div>
        </div>

        <div class="w-lg-375px">
            <div class="bg-primary rounded-4 mb-5">
                <div id="lottie-container-3" class="lottie-container"></div>
            </div>
            <div class="text-center">
                <h3 class="text-primary fs-1 fw-lighter mb-6">Approval and Receipt</h3>
                <p class="fs-4 lh-lg text-black-1">After submitting your request, the amount will be transferred to your account and deducted from your salary the following month.</p>
            </div>
        </div>
    </div>
</section>
@component('components.app-store')
@endcomponent
<script>
    let animationPath1 = "{{ asset('admin-themes/assets/animation/Gif-2.json') }}";
    var animation1 = lottie.loadAnimation({
        container: document.getElementById('lottie-container-2'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: animationPath1
    });
    let animationPath2 = "{{ asset('admin-themes/assets/animation/Gif-1.json') }}";
    var animation2 = lottie.loadAnimation({
        container: document.getElementById('lottie-container-1'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: animationPath2
    });
    let animationPath3 = "{{ asset('admin-themes/assets/animation/Gif-3.json') }}";
    var animation3 = lottie.loadAnimation({
        container: document.getElementById('lottie-container-3'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: animationPath3
    });
</script>
@endsection