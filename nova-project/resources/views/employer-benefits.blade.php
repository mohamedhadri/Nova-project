@extends('layouts.app')
@section('title', 'employer-benefits')
@section('content')
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.14/lottie.min.js"></script>
</head>
	<div>
		<div class="bg-primary">
			<div class="d-flex flex-center">
				<div class="d-flex flex-column flex-center pt-100 gap-4">
					<div class="h-4px w-50px bg-primary-light"></div>
					<div class="mt-10"><h1 class="fs-5hx text-primary fw-medium text-center">Employer Benefits</h1></div>
					<div class="w-25px mt-10">
						<img src="{{ asset('admin-themes/assets/media/qsalary/circle.svg') }}" alt="" class="w-100 mb-n4">
					</div>
				</div>
			</div>
		</div>
		<section class="container py-80px px-5">
			<div class="d-flex flex-column flex-md-row justify-content-evenly">
				<div class="w-md-300px"><h3 class="text-primary fs-24px fw-lighter lh-base mt-6">Eliminate Administrative Burdens, Empower Your Employees</h3></div>
				<div class="mw-500px min-w-md-425px">
					<p class="fs-16px text-black-1">Boost productivity and job satisfaction, and reduce turnover rates with our simple and Shariah-compliant financial solution that aligns with your organization goals</p>
					<p class="fs-16px text-black-1">Qsalary relies on FinTech to offer partners a flexible and simple system tailored to their needs. We ensure employees receive transparent and hassle-free financial facilities to meet their needs.</p>
				</div>
			</div>
		</section>
		<section class="bg-primary py-100 px-5">
			<div class="container">
				<h2 class="text-center text-primary fs-2qx mb-20">Register now to enjoy Qsalary's benefits</h2>
				<div class="d-flex gap-8 flex-wrap">
					<div class="col col-lg-5 d-flex flex-center">
						<div class="lottie-rounded-bg bg-white"></div>
						<div id="lottie-container-1" class="lottie-container"></div>
					</div>
					<div class="d-flex flex-column gap-18 col-12 col-lg-6">
						<div class="d-flex flex-column flex-md-row gap-2">
							<div>
								<img class="w-md-80px w-50px" src="{{ asset('admin-themes/assets/media/qsalary/employer-icons/employer-icon-1.svg') }}" alt="">
							</div>
							<div class="col-lg-9">
								<div>
									<h4 class="text-primary fs-5">Lead the Whole Process</h4>
									<p class="fs-4 text-gray-700 text-justify lh-lg">
										The application provides a flexible and user-friendly interface, allowing you to customize, manage, 
										and track the process of granting earned wages to your employees with utmost flexibility.
									</p>
								</div>
							</div>
						</div>
						<div class="d-flex flex-column flex-md-row gap-2">
							<div>
								<img class="w-md-80px w-50px" src="{{ asset('admin-themes/assets/media/qsalary/employer-icons/employer-icon-2.svg') }}" alt="">
							</div>
							<div class="col-lg-9">
								<div>
									<h4 class="text-primary fs-5">Lead the Whole Process</h4>
									<p class="fs-4 text-gray-700 text-justify lh-lg">
										The application provides a flexible and user-friendly interface, allowing you to customize, manage, 
										and track the process of granting earned wages to your employees with utmost flexibility.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="py-100 px-5">
			<div class="container">
				<div class="d-flex gap-8 flex-wrap">
					<div class="d-flex flex-column gap-18 col-12 col-lg-6 order-2 order-lg-1 gap-2">
						<div class="d-flex flex-column flex-md-row">
							<div>
								<img class="w-md-80px w-50px" src="{{ asset('admin-themes/assets/media/qsalary/employer-icons/employer-icon-3.svg') }}" alt="">
							</div>
							<div class="col-lg-9">
								<div>
									<h4 class="text-primary fs-5">Lead the Whole Process</h4>
									<p class="fs-4 text-gray-700 text-justify lh-lg">
										The application provides a flexible and user-friendly interface, allowing you to customize, manage, 
										and track the process of granting earned wages to your employees with utmost flexibility.
									</p>
								</div>
							</div>
						</div>
						<div class="d-flex flex-column flex-md-row gap-2">
							<div>
								<img class="w-md-80px w-50px" src="{{ asset('admin-themes/assets/media/qsalary/employer-icons/employer-icon-4.svg') }}" alt="">
							</div>
							<div class="col-lg-9">
								<div>
									<h4 class="text-primary fs-5">Lead the Whole Process</h4>
									<p class="fs-4 text-gray-700 text-justify lh-lg">
										The application provides a flexible and user-friendly interface, allowing you to customize, manage, 
										and track the process of granting earned wages to your employees with utmost flexibility.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col col-lg-5 d-flex flex-center order-1 order-lg-2">
						<div class="lottie-rounded-bg bg-gray-200"></div>
						<div id="lottie-container-2" class="lottie-container"></div>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-primary py-100 px-5">
			<div class="container">
				<div class="d-flex gap-8 flex-wrap">
					<div class="col col-lg-5 d-flex flex-center">
						<div class="lottie-rounded-bg bg-white"></div>
						<div id="lottie-container-3" class="lottie-container"></div>
					</div>
					<div class="d-flex flex-column gap-18 col-12 col-lg-6">
						<div class="d-flex flex-column flex-md-row gap-2">
							<div>
								<img class="w-md-80px w-50px" src="{{ asset('admin-themes/assets/media/qsalary/employer-icons/employer-icon-5.svg') }}" alt="">
							</div>
							<div class="col-lg-9">
								<div>
									<h4 class="text-primary fs-5">Lead the Whole Process</h4>
									<p class="fs-4 text-gray-700 text-justify lh-lg">
										The application provides a flexible and user-friendly interface, allowing you to customize, manage, 
										and track the process of granting earned wages to your employees with utmost flexibility.
									</p>
								</div>
							</div>
						</div>
						<div class="d-flex flex-column flex-md-row gap-2">
							<div>
								<img class="w-md-80px w-50px" src="{{ asset('admin-themes/assets/media/qsalary/employer-icons/employer-icon-1.svg') }}" alt="">
							</div>
							<div class="col-lg-9">
								<div>
									<h4 class="text-primary fs-5">Lead the Whole Process</h4>
									<p class="fs-4 text-gray-700 text-justify lh-lg">
										The application provides a flexible and user-friendly interface, allowing you to customize, manage, 
										and track the process of granting earned wages to your employees with utmost flexibility.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="py-100 px-5">
			<div class="container">
				<div class="d-flex gap-8 flex-wrap">
					<div class="d-flex flex-column gap-18 col-12 col-lg-6 order-2 order-lg-1">
						<div class="d-flex flex-column flex-md-row gap-2">
							<div>
								<img class="w-md-80px w-50px" src="{{ asset('admin-themes/assets/media/qsalary/employer-icons/employer-icon-8.svg') }}" alt="">
							</div>
							<div class="col-lg-9">
								<div>
									<h4 class="text-primary fs-5">Lead the Whole Process</h4>
									<p class="fs-4 text-gray-700 text-justify lh-lg">
										The application provides a flexible and user-friendly interface, allowing you to customize, manage, 
										and track the process of granting earned wages to your employees with utmost flexibility.
									</p>
								</div>
							</div>
						</div>
						<div class="d-flex flex-column flex-md-row gap-2">
							<div>
								<img class="w-md-80px w-50px" src="{{ asset('admin-themes/assets/media/qsalary/employer-icons/employer-icon-7.svg') }}" alt="">
							</div>
							<div class="col-lg-9">
								<div>
									<h4 class="text-primary fs-5">Lead the Whole Process</h4>
									<p class="fs-4 text-gray-700 text-justify lh-lg">
										The application provides a flexible and user-friendly interface, allowing you to customize, manage, 
										and track the process of granting earned wages to your employees with utmost flexibility.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col col-lg-5 d-flex flex-center order-1 order-lg-2">
						<div class="lottie-rounded-bg bg-gray-200"></div>
						<div id="lottie-container-4" class="lottie-container"></div>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-lienear-purble py-100 px-5">
			<div class="container">
				<div class="d-flex gap-8 flex-wrap">
					<div class="col col-lg-5 d-flex flex-center">
						<div class="lottie-rounded-bg bg-white"></div>
						<div id="lottie-container-5" class="lottie-container"></div>
					</div>

					<div class="d-flex flex-column gap-18 col-12 col-lg-6">
						<div class="d-flex flex-column flex-md-row gap-2">
							<div>
								<img class="w-md-80px w-50px" src="{{ asset('admin-themes/assets/media/qsalary/employer-icons/employer-icon-9.svg') }}" alt="">
							</div>
							<div class="col-lg-9">
								<div>
									<h4 class="text-primary fs-5">Lead the Whole Process</h4>
									<p class="fs-4 text-gray-700 text-justify lh-lg">
										The application complies with Saudi Arabia's security and privacy standards, safeguarding sensitive information for your organization.
										<span><a href="#" class="text-primary-light underline-light-purple fw-lighter">Read our Privacy Policy</a></span>
									</p>
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
	</div>
	<script>
		let animationPath1 = "{{ asset('admin-themes/assets/animation/emp-2.json') }}";
        var animation1 = lottie.loadAnimation({
            container: document.getElementById('lottie-container-2'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: animationPath1
        });
		let animationPath2 = "{{ asset('admin-themes/assets/animation/emp-1.json') }}";
        var animation2 = lottie.loadAnimation({
            container: document.getElementById('lottie-container-1'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: animationPath2
        });
		let animationPath3 = "{{ asset('admin-themes/assets/animation/emp-3.json') }}";
		var animation3 = lottie.loadAnimation({
            container: document.getElementById('lottie-container-3'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: animationPath3
        });
		let animationPath4 = "{{ asset('admin-themes/assets/animation/emp-4.json') }}";
		var animation4 = lottie.loadAnimation({
            container: document.getElementById('lottie-container-4'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: animationPath4
        });
		let animationPath5 = "{{ asset('admin-themes/assets/animation/emp-5.json') }}";
		var animation5 = lottie.loadAnimation({
            container: document.getElementById('lottie-container-5'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: animationPath5
        });
    </script>
@endsection