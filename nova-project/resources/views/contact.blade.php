@extends('layouts.app')
@section('title', 'contact')
@section('content')
    <div class="bg-primary">
        <div class="d-flex flex-center">
            <div class="d-flex flex-column flex-center pt-100 gap-4">
                <div class="h-4px w-50px bg-primary-light"></div>
                <div class="mt-10"><h1 class="fs-5hx text-primary fw-medium text-center">Contact Us</h1></div>
                <div class="w-25px mt-10">
                    <img src="{{ asset('admin-themes/assets/media/qsalary/circle.svg') }}" alt="" class="w-100 mb-n4">
                </div>
            </div>
        </div>
    </div>
    <section class="container py-80px">
        <div class="d-flex flex-column flex-lg-row justify-content-evenly gap-6">
            <div class="col-lg-6">
                <div class="mw-lg-550px">
                    <div class="py-8 border-bottom border-gray-800">
                        <h2 class="fs-2hx">Feel free to contact us for any questions and doubts</h2>
                    </div>
                    <div class="d-flex justify-content-between py-8">
                        <a href="#">
                            <i class="bi bi-instagram text-black fs-2qx"></i>
                        </a>
                        <a href="https://twitter.com/qsalaryapp" class="w-20px w-md-30px" tabindex="-1" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-100 mt-n2 mt-md-n1" width="30" height="30" viewBox="0 0 1107.906 986.689"><g id="layer1" transform="translate(-224.291 -142.311)"><path id="Union_1" data-name="Union 1" d="M-10105.831-2773l-264.572-353.751L-10697.855-2773H-10853.5l413.549-446.753-403.814-539.936h360.234L-10240.7-3435l300.541-324.688h155.645L-10171.149-3342l425.556,569Zm12.521-25h0l-275.051-367.76L-10708.781-2798h0l340.421-367.76Zm169.09-64.471-604.13-807.758h0Zm-124.29-25h74.372l-566.733-757.759h-74.372Zm-358.951-330.58-386.39-516.639Zm203.821-125.649,361.918-390.99Z" transform="translate(11077.791 3902)"></path></g></svg>				
                        </a>
                        <a href="#">
                            <i class="bi bi-facebook text-black fs-2qx"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-linkedin text-black fs-2qx"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-primary rounded-4 p-8">
                    <form action="#">

                        <div class="mb-10">
                            <div class="d-flex gap-4">
                            <input type="text" name="name" class="form-control form-control-solid" placeholder="FirstName"/>
                            <input type="text" name="name" class="form-control form-control-solid" placeholder="LastName"/>
                            </div>
                        </div>
                        <div class="mb-10">
                            <input type="email" name="email" class="form-control form-control-solid" placeholder="Email"/>
                        </div>
                        <div class="mb-10">
                            <input type="text" name="name" class="form-control form-control-solid" placeholder="Company name"/>
                        </div>
                        <div class="mb-10">
                            <input type="tel" name="email" class="form-control form-control-solid" placeholder="Phone No"/>
                        </div>
                        <div class="mb-10">
                           <textarea name="message" id="message" class="form-control" rows="5" placeholder="comment or message"></textarea>
                        </div>

                        <div class="mb-10">
                            <div class="recaptcha">
                            </div>
                        </div>
                        <div>
                            <button class="nav-link outline-btn-purple rounded-3 px-6 py-4 text-uppercase fw-bold mb-6">Submits</button>
                          </div>
                    </form>
                </div>
        </div>
    </section>
    <section class="container py-80px">
        <div class="d-flex flex-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d226.52415305270782!2d46.67515066642954!3d24.713609690128038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDQyJzQ4LjgiTiA0NsKwNDAnMzEuMSJF!5e0!3m2!1sen!2str!4v1719948913463!5m2!1sen!2str" width="1600" height="600" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <section class="container">
        <div class="border-top border-gray-800 py-16">
            <div class="d-flex justify-content-around flex-column flex-md-row gap-8">
                <div class="d-flex gap-4">
                    <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center w-60px h-60px">
                        <i class="bi  bi-envelope text-primary fs-2qx"></i>
                    </div>
                    <div class="d-flex flex-column gap-4">
                        <span class="fs-3 text-primary">Email Me</span>
                        <span class="fs-3">info@qsalary.com</span>
                    </div>
                </div>

                <div class="d-flex gap-4">
                    <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center w-60px h-60px">
                        <i class="bi bi-geo-alt-fill text-primary fs-2qx"></i>
                    </div>
                    <div class="d-flex flex-column gap-4">
                        <span class="fs-3 text-primary">Phone No</span>
                        <span class="fs-3">92 002 3346</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection