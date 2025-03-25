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

<!-- Community Management Section -->
<div class="bg-white py-10">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold tracking-tight text-[#263238] sm:text-4xl">Manage your entire community<br>in a single system</h2>
            <p class="mt-3 text-sm text-gray-600">Who is Nextcent suitable for?</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-24 mt-6 max-w-4xl mx-auto">
            <!-- Membership Organizations -->
            <div class="bg-white rounded p-4 text-center shadow-sm hover:shadow transition-shadow duration-300">
                <div class="flex justify-center mb-3">
                    <img src="{{asset('images/m1.svg')}}" alt="M1">
                </div>
                <h3 class="text-xl font-bold text-[#263238] mb-2">Membership<br>Organizations</h3>
                <p class="text-gray-600 text-xs leading-relaxed">Our membership management<br>software provides full automation<br>of membership renewals</p>
            </div>

            <!-- National Associations -->
            <div class="bg-white rounded p-4 text-center shadow-sm hover:shadow transition-shadow duration-300">
                <div class="flex justify-center mb-3">
                    <img src="{{asset('images/m2.svg')}}" alt="M2">
                </div>
                <h3 class="text-xl font-bold text-[#263238] mb-2">National<br>Associations</h3>
                <p class="text-gray-600 text-xs leading-relaxed">Our membership management<br>software provides full automation<br>of membership renewals</p>
            </div>

            <!-- Clubs and Groups -->
            <div class="bg-white rounded p-4 text-center shadow-sm hover:shadow transition-shadow duration-300">
                <div class="flex justify-center mb-3">
                    <img src="{{asset('images/m3.svg')}}" alt="M3">
                </div>
                <h3 class="text-xl font-bold text-[#263238] mb-2">Clubs And<br>Groups</h3>
                <p class="text-gray-600 text-xs leading-relaxed">Our membership management<br>software provides full automation<br>of membership renewals</p>
            </div>
        </div>
    </div>
</div>

<!-- Pixelgrade Experience Section -->
<div class="bg-white py-10">
    <div class="container mx-auto px-12 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Image Column -->
            <div class="flex justify-center">
                <img src="{{ asset('images/pixelgrade.svg') }}" alt="Pixelgrade Experience" class="w-4/5 h-auto">
            </div>
            <!-- Content Column -->
            <div>
                <h2 class="text-4xl font-bold text-[#263238] leading-tight mb-6">
                    The unseen of spending three years at Pixelgrade
                </h2>
                <p class="text-gray-600 text-sm mb-8">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet justo ipsum. Sed accumsan quam vitae est varius fringilla. Pellentesque placerat vestibulum lorem sed porta. Nullam mattis tristique iaculis.Nullam pulvinar sit amet risus pretium auctor. Etiam quis massa pulvinar, aliquam quam vitae, tempus sem. Donec elementum pulvinar odio.
                </p>
                <a href="#" class="inline-block bg-[#4CAF4F] text-white px-8 py-3 rounded-md hover:bg-[#45a048] transition-colors duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Business Statistics Section -->
<div class="bg-white py-16 px-16">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <!-- Left Column - Text -->
            <div>
                <h2 class="text-4xl font-bold text-[#263238] leading-tight">
                    Helping a local
                    <span class="text-[#4CAF4F] block">business reinvent itself</span>
                </h2>
                <p class="mt-4 text-gray-600">
                    We reached here with our hard work and dedication
                </p>
            </div>
            
            <!-- Right Column - Statistics -->
            <div class="grid grid-cols-2 gap-8">
                <!-- Members -->
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/members.svg') }}" alt="Members" class="w-12 h-12">
                    <div>
                        <h3 class="text-3xl font-bold text-[#263238]">2,245,341</h3>
                        <p class="text-gray-600">Members</p>
                    </div>
                </div>
                
                <!-- Clubs -->
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/clubs.svg') }}" alt="Clubs" class="w-14 h-14">
                    <div>
                        <h3 class="text-3xl font-bold text-[#263238]">46,328</h3>
                        <p class="text-gray-600">Clubs</p>
                    </div>
                </div>
                
                <!-- Event Bookings -->
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/event.svg') }}" alt="Event Bookings" class="w-12 h-12">
                    <div>
                        <h3 class="text-3xl font-bold text-[#263238]">828,867</h3>
                        <p class="text-gray-600">Event Bookings</p>
                    </div>
                </div>
                
                <!-- Payments -->
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/payments.svg') }}" alt="Payments" class="w-12 h-12">
                    <div>
                        <h3 class="text-3xl font-bold text-[#263238]">1,926,436</h3>
                        <p class="text-gray-600">Payments</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection