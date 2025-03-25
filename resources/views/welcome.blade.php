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
<div class="bg-[#F5F7FA] py-16 px-16">
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

<!-- Site Footer Section -->
<div class="bg-white py-10">
    <div class="container mx-auto px-12 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Image Column -->
            <div class="flex justify-center">
                <img src="{{ asset('images/pana.svg') }}" alt="Pana" class="w-4/5 h-auto">
            </div>
            <!-- Content Column -->
            <div>
                <h2 class="text-4xl font-bold text-[#263238] leading-tight mb-6">
                    How to design your site footer like we did                
                </h2>
                <p class="text-gray-600 text-sm mb-8">
                Donec a eros justo. Fusce egestas tristique ultrices. Nam tempor, augue nec tincidunt molestie, massa nunc varius arcu, at scelerisque elit erat a magna. Donec quis erat at libero ultrices mollis. In hac habitasse platea dictumst. Vivamus vehicula leo dui, at <br>porta nisi facilisis finibus. In euismod augue vitae nisi ultricies, non aliquet urna tincidunt. Integer in nisi eget nulla commodo faucibus efficitur quis massa. Praesent <br>felis est, finibus et nisi ac, hendrerit venenatis libero. Donec consectetur faucibus ipsum id gravida.
                </p>
                <a href="#" class="inline-block bg-[#4CAF4F] text-white px-8 py-3 rounded-md hover:bg-[#45a048] transition-colors duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial Section -->
<div class="bg-[#F5F7FA] py-16 px-16">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
            <!-- Left Column - Image -->
            <div class="flex justify-center lg:justify-start">
                <div class="rounded-lg w-72 h-72 flex items-center justify-center">
                    <img src="{{ asset('images/tesla.svg') }}" alt="Tesla Logo" class="w-full">
                </div>
            </div>
            
            <!-- Right Column - Content -->
            <div class="lg:-ml-8">
                <p class="text-gray-600 text-sm mb-4">
                    Maecenas dignissim justo eget nulla rutrum molestie. Maecenas lobortis sem dui, vel rutrum risus tincidunt ullamcorper. Proin eu enim metus. Vivamus sed libero ornare, tristique quam in, gravida enim. Nullam ut molestie arcu, at hendrerit elit. Morbi laoreet elit at ligula molestie, nec molestie mi blandit. Suspendisse cursus tellus sed augue ultrices, quis tristique nulla sodales.. Suspendisse eget lorem eu turpis vestibulum pretium. Suspendisse potenti. Quisque malesuada enim sapien, vitae placerat ante feugiat eget. Quisque vulputate odio neque, eget efficitur libero condimentum id. Curabitur id nibh id sem dignissim finibus ac sit amet magna.
                </p>
                
                <div class="mb-8">
                    <h3 class="text-[#4CAF4F] text-lg font-semibold">Tim Smith</h3>
                    <p class="text-gray-600">British Dragon Boat Racing Association</p>
                </div>
                
                <!-- Client Logos -->
                <div class="flex items-center gap-6 overflow-x-auto pb-2">
                    <img src="{{ asset('images/client1.png') }}" alt="Client 1" class="h-8">
                    <img src="{{ asset('images/client2.png') }}" alt="Client 2" class="h-8">
                    <img src="{{ asset('images/client3.png') }}" alt="Client 3" class="h-8">
                    <img src="{{ asset('images/client4.png') }}" alt="Client 4" class="h-8">
                    <img src="{{ asset('images/client5.png') }}" alt="Client 5" class="h-8">
                    <img src="{{ asset('images/client6.png') }}" alt="Client 6" class="h-8">
                    <a href="#" class="text-[#4CAF4F] font-semibold flex items-center gap-2 whitespace-nowrap">
                        Meet all customers
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog/Marketing Section -->
<div class="bg-white py-12">
    <div class="container mx-auto px-6 lg:px-16">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#263238] mb-4">Caring is the new marketing</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                The Nextcent blog is the best place to read about the latest membership insights, <br>trends and more. See who's joining the community, read about how our community <br>are increasing their membership income and lot's more.
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 px-4 pb-8">
            <!-- Card 1 -->
            <div class="relative group">
                <!-- Image -->
                <div class="rounded-xl overflow-hidden mb-6">
                    <img src="{{ asset('images/b1.svg') }}" alt="OneRen Process" class="w-full h-60 object-cover">
                </div>
                <!-- Overlay Card -->
                <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 bg-white rounded-lg px-3 py-3 shadow-xl w-[75%] transition-all duration-300">
                    <h3 class="text-lg font-semibold text-center text-[#263238] mb-3">Creating Streamlined Safeguarding Processes with OneRen</h3>
                    <div class="flex justify-center">
                        <a href="#" class="inline-flex items-center text-[#4CAF4F] font-semibold hover:text-[#3d8c3d] transition-colors">
                            Readmore 
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative group">
                <!-- Image -->
                <div class="rounded-xl overflow-hidden mb-6">
                    <img src="{{ asset('images/b2.svg') }}" alt="Safeguarding Responsibilities" class="w-full h-60 object-cover">
                </div>
                <!-- Overlay Card -->
                <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 bg-white rounded-lg px-3 py-3 shadow-xl w-[80%] transition-all duration-300">
                    <h3 class="text-lg font-semibold text-center text-[#263238] mb-4">What are your safeguarding responsibilities and how can <br>you manage them?</h3>
                    <div class="flex justify-center">
                        <a href="#" class="inline-flex items-center text-[#4CAF4F] font-semibold hover:text-[#3d8c3d] transition-colors">
                            Readmore 
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="relative group">
                <!-- Image -->
                <div class="rounded-xl overflow-hidden mb-6">
                    <img src="{{ asset('images/b3.svg') }}" alt="Triathlon Australia" class="w-full h-60 object-cover">
                </div>
                <!-- Overlay Card -->
                <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 bg-white rounded-lg px-3 py-3 shadow-xl w-[80%] transition-all duration-300">
                    <h3 class="text-lg font-semibold text-center text-[#263238] mb-4">Revamping the Membership Model with Triathlon <br>Australia</h3>
                    <div class="flex justify-center">
                        <a href="#" class="inline-flex items-center text-[#4CAF4F] font-semibold hover:text-[#3d8c3d] transition-colors">
                            Readmore 
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-[#F5F7FA] py-20">
    <div class="container mx-auto px-6 lg:px-16 text-center">
        <h2 class="text-4xl font-bold text-[#263238] mb-8">
            Pellentesque suscipit<br>
            fringilla libero eu.
        </h2>
        <a href="#" class="inline-flex items-center bg-[#4CAF4F] text-white px-6 py-3 rounded-md hover:bg-[#3d8c3d] transition-colors">
            Get a Demo
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
</div>

@endsection