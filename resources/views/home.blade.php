@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-green-50">
    <!-- Hero Section with Login Form -->
    <div class="relative h-screen overflow-hidden flex items-center justify-center">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
        
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        
        <!-- Content Container -->
        <div class="relative z-10 container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <!-- Welcome Message -->
                <div class="lg:w-1/2 mb-12 lg:mb-0 text-white">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6 font-serif">Welcome to Panglao Resort Booking</h1>
                    <p class="text-xl md:text-2xl mb-8 max-w-lg">
                        Discover and book your perfect getaway resort with ease in beautiful Panglao, Bohol.
                    </p>
                    <a href="{{ route('resorts.index') }}" 
                       class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-3 px-8 rounded-full shadow-lg transform hover:scale-105 transition duration-300 inline-block">
                        View Resorts
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection