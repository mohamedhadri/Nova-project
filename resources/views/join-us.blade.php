@extends('layouts.app')
@section('title', 'join-us')
@section('content')
<div class="bg-primary">
    <div class="d-flex flex-center">
        <div class="d-flex flex-column flex-center pt-100 gap-4">
            <div class="h-4px w-50px bg-primary-light"></div>
            <div class="mt-10"><h1 class="fs-5hx text-primary text-center">Join Us</h1></div>
            <div class="w-25px mt-10">
                <img src="{{ asset('admin-themes/assets/media/qsalary/circle.svg') }}" alt="" class="w-100 mb-n4">
            </div>
        </div>
    </div>
</div>
<section class="container py-80px">
    <div class="d-flex flex-column flex-xl-row gap-16 align-items-center">
        <div class="col-xl-6">
  <h2 class="text-primary fs-2hx mb-6">How to Apply</h2>
  <p class="fs-4 mb-6 lh-xl text-black-1">If you are interested in applying for any of our available job opportunities, please send your resume. We look forward to hearing from you and learning more about your experiences and skills. 
    Please ensure that you include all necessary information in your resume to facilitate the evaluation process.</p>
  <p class="fs-4">Thank you for your interest, and we look forward to receiving your application soon.</p>
</div>

<div class="col-xl-6">
    <div class="bg-primary rounded-4 p-12 py-18">
      <form action="">
          <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">Name</label>
          <input type="text" name="name" class="form-control form-control-solid" placeholder="salim"/>
          </div>
        <div class="mb-10">
        <label for="exampleFormControlInput1" class="required form-label">your Email</label>
        <input type="email" name="email" class="form-control form-control-solid" placeholder="example@email.com"/>
        </div>
        <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">Phone Number</label>
          <input type="tel" name="phone" class="form-control form-control-solid" placeholder="0512345678"/>
        </div>
        <div class="mb-10">
<div class="fv-row">
<div class="" id="kt_dropzonejs_example_1">
  <div class="dz-message needsclick">
      <div class="bg-white p-2 rounded-3 cursor-pointer">
          <h3 class="fs-5 fw-bold text-gray-900 mb-1">Upload Your Resume *</h3>
          <button class="bg-gray-400 mt-2">choose a file</button>
          <span class="fs-7 fw-semibold text-gray-500">File Extensions: pdf,docx,csv,xlsx. Max File Size:2MB</span>
      </div>
  </div>
</div>
</div>
        </div>
        <div>
          <button class="nav-link outline-btn-purple rounded-3 px-6 py-4 text-uppercase fw-bold">Submits</button>
        </div>
      </form>
    </div>
</div>
    </div>
</section>

@component('components.request-demo')
@endcomponent

@component('components.subscribe-to-mailing')
@endcomponent
@endsection