@extends('layouts.app')
@section('content')

<!-- Hero Section -->
<div class="relative bg-[#F5F7FA]">
    <div class="container mx-auto px-6 py-16 text-center md:px-12 lg:px-20">
        <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
            <div class="text-left">
                <h1 class="text-4xl font-bold tracking-tight text-[#263238] sm:text-5xl">
                    Lessons and insights
                    <span class="block text-[#4CAF4F]">from 8 years</span>
                </h1>
                <p class="mt-6 text-xs leading-8 text-gray-600">
                    Where to grow your business as a photographer: site or social media?
                </p>
                <div class="mt-8">
                    <a href="#register" class="rounded-md bg-[#4CAF4F] px-8 py-3 text-base font-semibold text-white shadow-sm hover:bg-[#45a048] transition-colors duration-300">
                        Register
                    </a>
                </div>
            </div>
            <div class="relative flex justify-center items-center">
                <img src="{{ asset('images/hero.svg') }}" alt="Hero" class="w-3/4 h-auto object-contain">
            </div>
        </div>

        <!-- Slider Indicators -->
        <div class="flex justify-center gap-2 mt-8">
            <button class="h-3 w-3 rounded-full bg-[#4CAF4F]"></button>
            <button class="h-3 w-3 rounded-full bg-gray-300"></button>
            <button class="h-3 w-3 rounded-full bg-gray-300"></button>
        </div>
    </div>
</div>

<!-- Clients Section -->
<div class="bg-white py-12">
    <div class="container mx-auto px-14">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-[#263238] sm:text-4xl">Our Clients</h2>
            <p class="mt-4 text-lg text-gray-600">
                We have been working with some Fortune 500+ clients
            </p>
        </div>
        
        <div class="grid grid-cols-2 gap-4 md:grid-cols-4 lg:grid-cols-7 items-center">
            <!-- Client logos -->
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/client1.png') }}" alt="Client 1" class="h-10 object-contain">
            </div>
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/client2.png') }}" alt="Client 2" class="h-10 object-contain">
            </div>
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/client3.png') }}" alt="Client 3" class="h-10 object-contain">
            </div>
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/client4.png') }}" alt="Client 4" class="h-10 object-contain">
            </div>
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/client5.png') }}" alt="Client 5" class="h-10 object-contain">
            </div>
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/client6.png') }}" alt="Client 6" class="h-10 object-contain">
            </div>
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/client7.png') }}" alt="Client 7" class="h-10 object-contain">
            </div>
        </div>
    </div>
</div>

@endsection