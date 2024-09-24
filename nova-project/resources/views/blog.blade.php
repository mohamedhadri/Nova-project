@extends('layouts.app')
@section('title', 'blog')
@section('content')
<div class="d-flex flex-center bg-primary">
    <div class="d-flex flex-column flex-center pt-100 gap-4">
        <div class="h-4px w-50px bg-primary-light"></div>
        <div class="mt-10"><h1 class="fs-5hx text-primary fw-medium text-center">Blog</h1></div>
        <p class="fs-5 text-gray-600">Various articles about finance and business</p>
        <div class="w-25px mt-10">
            <img src="{{ asset('admin-themes/assets/media/qsalary/circle.svg') }}" alt="" class="w-100 mb-n4">
        </div>
    </div>
</div>
<section class="container px-12 py-80px">
    <div class="py-8 border-bottom border-gray-400">
        <a href="#">
            <div class="mb-6">
                <img class="rounded-4 w-100" src="{{ asset('admin-themes/assets/media/qsalary/blog-1.png') }}" alt="">
            </div>
            <span class="fs-2qx text-gray-900 mt-6">Master Your Money: The Ultimate Guide to Personal Finance Management</span>
            <p class="fs-4 lh-lg text-gray-800 py-6">Financial problems can cause many people a lot of stress. This anxiety can worsen during economic downturns or when people lack savings to weather such storms. Financial stress can cloud judgment, leading to decisions that worsen the situation. But what if you could make smart decisions that help you achieve financial security? How can you […]</p>
            <span class="text-primary-light fs-4">Read More >></span>
        </a>
    </div>
</section>
<ul class="pagination mb-12">
    <li class="page-item previous disabled"><a href="#" class="page-link"><i class="previous"></i></a></li>
    <li class="page-item "><a href="#" class="page-link">1</a></li>
    <li class="page-item active"><a href="#" class="page-link">2</a></li>
    <li class="page-item "><a href="#" class="page-link">3</a></li>
    <li class="page-item "><a href="#" class="page-link">4</a></li>
    <li class="page-item "><a href="#" class="page-link">5</a></li>
    <li class="page-item "><a href="#" class="page-link">6</a></li>
    <li class="page-item next"><a href="#"  class="page-link"><i class="next"></i></a></li>
</ul>
@endsection