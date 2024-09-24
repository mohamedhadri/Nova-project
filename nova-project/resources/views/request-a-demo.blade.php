@extends('layouts.app')
@section('title', 'request-a-demo')
@section('content')
<div class="request-a-demo-bg">
  <section class="container h-100 ">
    <div class="d-flex flex-column flex-xl-row gap-16 align-items-end  py-8">
      <div class="col-xl-6 h-100">
        <div class="bg-gray-300 rounded-4 p-12">
          <div>
            <img src="{{ asset('admin-themes/assets/media/qsalary/logo.png') }}" alt="" class="w-150px">
          </div>
          <div>
            <h4 class="text-primary fw-light fs-4 my-6">Take Your Business to the Next Level</h4>
            <p class="fs-5 text-gray-700">Free Your Employees from Financial Stress for Increased Productivity and Unwavering Loyalty..</p>
          </div>
          <form action="">
              <div class="mb-10">
              <label for="exampleFormControlInput1" class="required form-label">Company Name</label>
              <input type="text" name="name" class="form-control form-control-solid" placeholder="example"/>
              </div>
              <div class="mb-10">
                <label for="NumOfEmployees" class=" mb-2">Number of Employees</label>
                <select id="NumOfEmployees" class="form-select form-select-solid h-60px" data-control="select2" data-placeholder="choose the number of Employees" data-hide-search="true">
                    <option>1-50 Employees</option>
                    <option value="1">50-250 Employees</option>
                    <option value="2">250-500 Employees</option>
                    <option value="2">500-5000 Employees</option>
                    <option value="2">More Than 5000 Employees</option>
                </select>
            </div>
            
            <div class="mb-10">
              <label for="exampleFormControlInput1" class="required form-label">name</label>
              <input type="text" name="name" class="form-control form-control-solid" placeholder="salim"/>
            </div>
            <div class="mb-10">
              <label for="exampleFormControlInput1" class="required form-label">Job Title</label>
              <input type="text" name="name" class="form-control form-control-solid"/>
            </div>
            <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">your Email</label>
            <input type="email" name="email" class="form-control form-control-solid" placeholder="example@email.com"/>
            </div>
            <div class="mb-10">
              <label for="exampleFormControlInput1" class="required form-label">Phone Number</label>
              <input type="tel" name="phone" class="form-control form-control-solid" placeholder="0512345678"/>
            </div>
            <div class="form-check form-check-custom form-check-success form-check-solid mb-10">
              <input class="form-check-input" type="checkbox" value=""  />
              <label class="form-check-label text-gray-800 fs-4" for="">
                I agree to the terms and conditions
              </label>
            </div>
            <div class="recaptcha mb-10">

            </div>
            <div>
              <button class="nav-link outline-btn-purple rounded-3 px-6 py-4 text-uppercase fw-bold">Submits</button>
            </div>
          </form>
        </div>
    </div>
      <div class="h-100 w-100 d-flex align-items-end">
          
            <div class="d-flex justify-content-around align-items-center gap-4 w-100">
            <a href="#">
              <i class="bi bi-facebook fs-3 text-white"></i>
            </a>

            <a href="#">
              <i class="bi bi-instagram fs-3 text-white"></i>
            </a>

            <a href="#">
              <i class="bi bi-youtube fs-3 text-white"></i>
            </a>
              
            <a href="#" class="mb-2">
              <span class="text-white fs-4">About Us</span>
            </a>

            <a href="#" class="mb-2">
              <span class="text-white fs-4">Contact</span>
            </a>

            <a href="#" class="mb-2">
              <div class="d-flex gap-2 fs-4 text-white">
                <img class="w-20px" src="{{ asset('admin-themes/assets/media/qsalary/ar-flag.svg') }}" alt="">
                <span>العربية</span>
              </div>
            </a>
            </div>
           
      </div>
    </div>
  </section>
</div>
	
@endsection