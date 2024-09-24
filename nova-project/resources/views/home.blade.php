@extends('layouts.app')
@section('title', 'Home')
@section('content')
<section class="container py-8 px-5">
    <div class="rounded-4 bg-primary">
        <div class="d-flex flex-column flex-lg-row justify-content-around">
            <div class="pt-12 d-flex flex-column align-items-center text-center text-lg-start px-4">
                <div class=" d-flex flex-center flex-lg-start w-100">
                    <span class="w-50px h-4px bg-primary-light mb-6"></span>
                </div>
                <div class="w-lg-500px">
                    <h1 class="text-primary fs-3tx mb-8">Financial Wellness Gate for Your Employees</h1>
                    <p class="fs-4 text-black-1">Empower your employees to access their earned wages anytime, and make every day a payday.</p>
                </div>
                <div class="d-flex flex-column flex-md-row gap-6 my-12 w-100 w-md-auto w-lg-500px">
                    <a href="#" class="purple-btn rounded-3 px-6 py-4 w-100 w-md-auto text-center fw-bold">REQUEST A DEMO</a>
                    <button class="outline-btn-purple rounded-3 px-12 py-4 text-uppercase w-100 w-md-auto fw-bold text-hover-white"><span><i class="bi bi-download text-primary-light fs-3 me-2"></i></span> download the app</button>
                </div>
            </div>
            <div class="hero-section-bg">
                <div class="d-flex justify-content-center"><img src="{{ asset('admin-themes/assets/media/qsalary/hero-section-img.png') }}" class="h-md-350px h-lg-450px w-100 w-md-auto" alt=""></div>
            </div>
        </div>
    </div>
</section>
<section class="container py-14 px-5">
    <div class="text-center">
        <div class=""><h2 class="text-primary fs-2qx lh-base mb-16">Employer Benefits</h2></div>
        <div>
                <div class="row row-cols-2 row-cols-lg-4 g-8">
                    <div class="col">
                        <div>
                            <div><img src="{{ asset('admin-themes/assets/media/qsalary/landing-page-icons/landing-icon-1.svg') }}" class="w-25 hover-elevate-up" alt=""></div>
                            <h3 class="text-black fs-1">Zero Cost</h3>
                            <p class="fw-lighter fs-4 text-black-1">No hidden, surprise or additional fees.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <div><img src="{{ asset('admin-themes/assets/media/qsalary/landing-page-icons/landing-icon-2.svg') }}" class="w-25 hover-elevate-up" alt=""></div>
                            <h3 class="text-black fs-1">Zero Cost</h3>
                            <p class="fw-lighter fs-4 text-black-1">No hidden, surprise or additional fees.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <div><img src="{{ asset('admin-themes/assets/media/qsalary/landing-page-icons/landing-icon-3.svg') }}" class="w-25 hover-elevate-up" alt=""></div>
                            <h3 class="text-black fs-1">Zero Cost</h3>
                            <p class="fw-lighter fs-4 text-black-1">No hidden, surprise or additional fees.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <div><img src="{{ asset('admin-themes/assets/media/qsalary/landing-page-icons/landing-icon-4.svg') }}" class="w-25 hover-elevate-up" alt=""></div>
                            <h3 class="text-black fs-1">Zero Cost</h3>
                            <p class="fw-lighter fs-4 text-black-1">No hidden, surprise or additional fees.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <div><img src="{{ asset('admin-themes/assets/media/qsalary/landing-page-icons/landing-icon-5.svg') }}" class="w-25 hover-elevate-up" alt=""></div>
                            <h3 class="text-black fs-1">Zero Cost</h3>
                            <p class="fw-lighter fs-4 text-black-1">No hidden, surprise or additional fees.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <div><img src="{{ asset('admin-themes/assets/media/qsalary/landing-page-icons/landing-icon-6.svg') }}" class="w-25 hover-elevate-up" alt=""></div>
                            <h3 class="text-black fs-1">Zero Cost</h3>
                            <p class="fw-lighter fs-4 text-black-1">No hidden, surprise or additional fees.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <div><img src="{{ asset('admin-themes/assets/media/qsalary/landing-page-icons/landing-icon-7.svg') }}" class="w-25 hover-elevate-up" alt=""></div>
                            <h3 class="text-black fs-1">Zero Cost</h3>
                            <p class="fw-lighter fs-4 text-black-1">No hidden, surprise or additional fees.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <div><img src="{{ asset('admin-themes/assets/media/qsalary/landing-page-icons/landing-icon-8.svg') }}" class="w-25 hover-elevate-up" alt=""></div>
                            <h3 class="text-black fs-1">Zero Cost</h3>
                            <p class="fw-lighter fs-4 text-black-1">No hidden, surprise or additional fees.</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="d-flex flex-center mt-12">
            <a href="#" class="purple-btn rounded-3 px-12 py-4 w-100 w-md-auto text-center fw-bold text-uppercase fs-5">See more</a>
    </div>
    
</section>
<section class="bg-primary py-100 px-5">
    <div class="container">
        <h6 class="text-center text-primary mb-4">How Does Qsalary Work?</h6>
        <div class="d-flex flex-center">
            <h2 class="text-center text-primary fs-2qx mb-20 w-lg-600px lh-lg">Financial Freedom for Your Employees in 3 Simple Steps</h2>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 g-4">
              <div class="col">
                <div class="text-center">
                  <img src="{{ asset('admin-themes/assets/media/qsalary/landing-img-1.png') }}" class="w-75 hover-elevate-up" alt="Description of image 1">
                  <div class="card-body">
                    <h3 class="card-title fs-1 mb-6">Heading 1</h3>
                    <p class="card-text text-black-1 fs-4">This is the paragraph for the first item. Add your content here.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="text-center">
                  <img src="{{ asset('admin-themes/assets/media/qsalary/landing-img-2.png') }}" class="w-75 hover-elevate-up" alt="Description of image 2">
                  <div class="card-body">
                    <h3 class="card-title fs-1 mb-6">Heading 2</h3>
                    <p class="card-text text-black-1 fs-4">This is the paragraph for the second item. Add your content here.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="text-center">
                  <img src="{{ asset('admin-themes/assets/media/qsalary/landing-img-3.png') }}" class="w-75 hover-elevate-up" alt="Description of image 3">
                  <div class="card-body">
                    <h3 class="card-title fs-1 mb-6">Heading 3</h3>
                    <p class="card-text text-black-1 fs-4">This is the paragraph for the third item. Add your content here.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</section>
<section class="py-100 border-bottom-gray-1 px-5">
    <div class="container">
        <h2 class="text-primary fs-24px lh-base mb-16 fs-2qx text-center">Taking your employees out of their financial stress</h2>
        <div class="row row-cols-1 row-cols-md-3 g-8 text-center">
            <div class="col">
            <div class="d-flex flex-center align-items-center">
                <div class="fs-5hx fw-bold" data-kt-countup="true" data-kt-countup-value="72" data-kt-countup-suffix ="%" >0</div>
            </div>				
            <div class="fw-light fs-2 text-black-1">of individuals experience financial stress at least once a year</div>
            </div>
            <div class="col">
            <div class="d-flex flex-center align-items-center">
                <div class="fs-5hx fw-bold" data-kt-countup="true" data-kt-countup-value="300"  >0</div>
                <div class="d-flex gap-4"><span class="fs-3hx">k</span> <span class="fs-4qx">$</span></div>
            </div>
            <div class="fw-light fs-2 text-black-1">of individuals experience financial stress at least once a year</div>
            </div>
            <div class="col">
            <div class="d-flex flex-center align-items-center">
                <div class="fs-5hx fw-bold" data-kt-countup="true" data-kt-countup-value="20" data-kt-countup-suffix ="%" >0</div>
            </div>				
            <div class="fw-light fs-2 text-black-1">of individuals experience financial stress at least once a year</div>
            </div>
        </div>
        <div class="d-flex flex-center mt-14">
            <a href="#" class="purple-btn rounded-3 px-8 py-4 w-100 w-md-auto text-center fw-bold text-uppercase fs-5">request a demo</a>
        </div>
    </div>
</section>
<section class="container py-100 px-5">
    <div class="text-center ">
        <div class=""><h2 class="text-primary fs-2qx lh-base mb-16">Employer Benefits</h2></div>
        <div>
                <div class="row row-cols-1 row-cols-lg-3 flex-center g-8">
                    <div class="col my-16">
                        <div>
                            <div><img src="{{ asset('admin-themes/assets/media/qsalary/landing-page-icons/landing-icon-9.svg') }}" class="w-25 hover-elevate-up" alt=""></div>
                            <h3 class="text-black fs-1 mt-6">Instant Liquidity 24/7</h3>
                            <p class="fw-lighter fs-4 text-black-1">No hidden, surprise or additional fees.</p>
                        </div>
                    </div>
                    <div class="col my-16">
                        <div>
                            <div><img src="{{ asset('admin-themes/assets/media/qsalary/landing-page-icons/landing-icon-10.svg') }}" class="w-25 hover-elevate-up" alt=""></div>
                            <h3 class="text-black fs-1 mt-6">No More Wages Delays</h3>
                            <p class="fw-lighter fs-4 text-black-1">No hidden, surprise or additional fees.</p>
                        </div>
                    </div>
                    <div class="col my-16">
                        <div>
                            <div><img src="{{ asset('admin-themes/assets/media/qsalary/landing-page-icons/landing-icon-11.svg') }}" class="w-25 hover-elevate-up" alt=""></div>
                            <h3 class="text-black fs-1 mt-6">Zero Cost</h3>
                            <p class="fw-lighter fs-4 text-black-1">No hidden, surprise or additional fees.</p>
                        </div>
                    </div>
                    <div class="col my-16">
                        <div>
                            <div><img src="{{ asset('admin-themes/assets/media/qsalary/landing-page-icons/landing-icon-12.svg') }}" class="w-25 hover-elevate-up" alt=""></div>
                            <h3 class="text-black fs-1 mt-6">Zero Cost</h3>
                            <p class="fw-lighter fs-4 text-black-1">No hidden, surprise or additional fees.</p>
                        </div>
                    </div>
                    <div class="col my-16">
                        <div>
                            <div><img src="{{ asset('admin-themes/assets/media/qsalary/landing-page-icons/landing-icon-13.svg') }}" class="w-25 hover-elevate-up" alt=""></div>
                            <h3 class="text-black fs-1 mt-6">Zero Cost</h3>
                            <p class="fw-lighter fs-4 text-black-1">No hidden, surprise or additional fees.</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="d-flex flex-center mt-12">
            <a href="#" class="purple-btn rounded-3 px-12 py-4 w-100 w-md-auto text-center fw-bold text-uppercase fs-5">See more</a>
    </div>
    
</section>
@component('components.app-store')
@endcomponent
<section class="bg-primary py-100 px-5">
    <div class="container">
        <div class="text-center"><h2 class="text-primary fs-2qx lh-base mb-16">FAQs</h2></div>
        <div class="container w-lg-75">
            <div class="accordion accordion-icon-collapse" id="kt_accordion_3">
                <div class="mb-5 border-bottom border-gray-300 py-2">
        <div class="accordion-header py-3 d-flex collapsed justify-content-between" data-bs-toggle="collapse" data-bs-target="#kt_accordion_3_item_1">
            <h3 class="fs-4 fw-semibold mb-0 ms-4">The best way to quick start business</h3>
            <span class="accordion-icon">
                <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
            </span>
        </div>
        <div id="kt_accordion_3_item_1" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_3">
            ...
        </div>
                </div>
            
                <div class="mb-5 border-bottom border-gray-300 py-2">
                    <div class="accordion-header py-3 d-flex collapsed justify-content-between" data-bs-toggle="collapse" data-bs-target="#kt_accordion_3_item_2">
                        <h3 class="fs-4 fw-semibold mb-0 ms-4">The best way to quick start business</h3>
                        <span class="accordion-icon">
                            <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                            <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                        </span>
                    </div>
                    <div id="kt_accordion_3_item_2" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_3">
                        ...
                    </div>
                </div>
            
                <div class="mb-5 border-bottom border-gray-300 py-2">
                    <div class="accordion-header py-3 d-flex collapsed justify-content-between" data-bs-toggle="collapse" data-bs-target="#kt_accordion_3_item_3">
                        <h3 class="fs-4 fw-semibold mb-0 ms-4">Is there a minimum number of employees required from the company ? </h3>
                        <span class="accordion-icon">
                            <i class="bi bi-plus-circle fs-3 accordion-icon-off text-primary-light"></i>
                            <i class="bi bi-dash-circle fs-3 accordion-icon-on text-primary-light"></i>
                        </span>
                    </div>
                    <div id="kt_accordion_3_item_3" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_3">
                        ...
                    </div>
                </div>
                </div>
        </div>
        <div class="d-flex flex-center mt-12">
            <a href="#" class="fs-5 purple-btn px-12 py-4 rounded-3 text-center text-uppercase w-100 w-md-auto">See more</a>
        </div>
    </div>
</section>

<section class="py-100 container px-5">
    <div class="text-center"><h2 class="text-primary fs-2qx lh-base mb-16">Our Success Partners</h2></div>

    <div id="owl-one" class=" owl-carousel">
        <div class="item h-100 d-flex flex-center">
            <div class="w-150px">
                <img src="{{ asset('admin-themes/assets/media/qsalary/carousel-imgs/carousel-1.png') }}">
            </div>
        </div>
        <div class="item h-100 d-flex flex-center">
            <div class="w-150px">
                <img src="{{ asset('admin-themes/assets/media/qsalary/carousel-imgs/carousel-2.png') }}">
            </div>
        </div>
        <div class="item h-100 d-flex flex-center">
            <div class="w-150px">
                <img src="{{ asset('admin-themes/assets/media/qsalary/carousel-imgs/carousel-3.png') }}">
            </div>
        </div>
        <div class="item h-100 d-flex flex-center">
            <div class="w-150px">
                <img src="{{ asset('admin-themes/assets/media/qsalary/carousel-imgs/carousel-4.png') }}">
            </div>
        </div>
        <div class="item h-100 d-flex flex-center">
            <div class="w-150px">
                <img src="{{ asset('admin-themes/assets/media/qsalary/carousel-imgs/carousel-5.png') }}">
            </div>
        </div>
        <div class="item h-100 d-flex flex-center">
            <div class="w-150px">
                <img src="{{ asset('admin-themes/assets/media/qsalary/carousel-imgs/carousel-6.png') }}">
            </div>
        </div>
        <div class="item h-100 d-flex flex-center">
            <div class="w-150px">
                <img src="{{ asset('admin-themes/assets/media/qsalary/carousel-imgs/carousel-7.png') }}">
            </div>
        </div>
        <div class="item h-100 d-flex flex-center">
            <div class="w-150px">
                <img src="{{ asset('admin-themes/assets/media/qsalary/carousel-imgs/carousel-8.png') }}">
            </div>
        </div>
        <div class="item h-100 d-flex flex-center">
            <div class="w-150px">
                <img src="{{ asset('admin-themes/assets/media/qsalary/carousel-imgs/carousel-9.png') }}">
            </div>
        </div>
        <div class="item h-100 d-flex flex-center">
            <div class="w-150px">
                <img src="{{ asset('admin-themes/assets/media/qsalary/carousel-imgs/carousel-10.png') }}">
            </div>
        </div>
    </div>

    
</section>
@component('components.request-demo')
@endcomponent

@component('components.subscribe-to-mailing')
@endcomponent
@endsection
