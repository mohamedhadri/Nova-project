@extends('layouts.app')
@section('title', 'blog-content')
@section('content')
<div class="bg-primary">
    <div class="d-flex flex-center">
    <div class="d-flex flex-column flex-center pt-100 gap-4">
        <div class="h-4px w-50px bg-primary-light"></div>
        <div class="mt-10 mw-1000px"><h1 class="fs-3hx text-primary fw-medium text-center">Master Your Money: The Ultimate Guide to Personal Finance Management</h1></div>
        <span class="fs-3 text-gray-700"> June 23, 2024 </span>
        <div class="w-25px mt-10">
            <img src="{{ asset('admin-themes/assets/media/qsalary/circle.svg') }}" alt="" class="w-100 mb-n4">
        </div>
    </div>
    </div>
</div>
<section class="container px-12 py-80px">
    <div class="py-8">
            <div class="mb-6">
                <img class="rounded-4 w-100" src="{{ asset('admin-themes/assets/media/qsalary/blog-1.png') }}" alt="">
            </div>
            <p class="fs-4 lh-lg text-gray-700 py-4">Financial problems can cause many people a lot of stress. This anxiety can worsen during economic downturns or when people lack savings to weather such storms. Financial stress can cloud judgment, leading to decisions that worsen the situation. But what if you could make smart decisions that help you achieve financial security? How can you […]</p>
            <p class="fs-4 lh-lg text-gray-700 py-4">Financial problems can cause many people a lot of stress. This anxiety can worsen during economic downturns or when people lack savings to weather such storms. Financial stress can cloud judgment, leading to decisions that worsen the situation. But what if you could make smart decisions that help you achieve financial security? How can you […]</p>
            <span class="fs-2qx text-primary mt-4">Master Your Money: The Ultimate Guide to Personal Finance Management</span>

        </div>
</section>
@component('components.request-demo')
@endcomponent
@component('components.subscribe-to-mailing')
@endcomponent
@endsection