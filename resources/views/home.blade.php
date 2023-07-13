@extends('layouts.plantilla')
@section('title', 'Lakers League for kids')
@vite(['resources/css/app.css', 'resources/js/app.js'])

@auth

    <div x-data="{ showPopup: true }" x-show="showPopup"
        class="fixed top-0 left-0 right-0 bottom-0 flex items-center justify-center z-50">
        <div class="flex flex-col bg-white border-solid  border-purple-500 shadow-purple-800 p-4 rounded-md shadow-lg">
            <div class="flex justify-center">
            <x-application-logo class="w-10"></x-application-logo>
        </div>
            <h3 class="text-lg text-purple-800 mb-2">Bienvenido, {{ Str::ucfirst(Auth::user()->name)  }}</h3>
            <button @click="showPopup = false" class="px-2 py-2 bg-purple-800 hover:bg-purple-500 text-white rounded">Cerrar</button>
        </div>
    </div>
@endauth



@if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ url('/teams') }}"
                class="font-semibold text-purple-800 hover:text-yellow-500 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Teams</a>
        @else
            <a href="{{ route('login') }}"
                class="font-semibold text-purple-800 hover:text-yellow-500 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 font-semibold text-purple-800 hover:text-yellow-500 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
@endif

<div class="py-2  ">


    <div class="  flex items-center justify-center">
        <div class=" flex justify-center bg-center w-14"><img src="{{ asset('images/cup.svg') }}" alt="Example Image">
        </div>

        <div class="flex items-center space-x-4">

            <svg class="w-5 h-5 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 22 20">
                <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 22 20">
                <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-3 h-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 22 20">
                <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-2 h-2 text-yellow-300 dark:text-gray-500" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
        </div>
        <!--Check ternary-->
        <a href="{{ Auth::check() ? route('teams.index') : route('register') }}">
            <x-application-logo class="w-52"></x-application-logo>
        </a>



        <div class="flex items-center space-x-4">
            <svg class="w-2 h-2 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 22 20">
                <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-3 h-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 22 20">
                <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 22 20">
                <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-5 h-5 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 22 20">
                <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>

        </div>

        <div class=" flex justify-center bg-center w-14 "><img src="{{ asset('images/cup.svg') }}" alt=" Image">
        </div>


    </div>

    <div class="flex justify-center  w-full text-center ">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-4 bg-yellow-500 ">
            <p class="text-base font-serif font-medium py-6"> Empowering Young Athletes through Fun and Sport

                Are you ready for an exciting adventure into the world of sports? Look no further than Leakers
                League, a sports league designed exclusively for children! We believe in nurturing the passion for
                sports in the younger generation and inspiring them to become the athletes of tomorrow.

                At Leakers League, we understand the importance of encouraging children to engage in physical
                activities from an early age. With a focus on teamwork, skill development, and healthy competition,
                our league aims to instill a love for sports that will last a lifetime.

                What sets Leakers League apart is our commitment to providing a safe and inclusive environment for
                young athletes. Our carefully designed programs cater to different age groups and skill levels,
                ensuring that every child feels welcome and motivated to participate. From beginners to budding
                superstars, there's a place for everyone in our league!

                We offer a wide range of sports options within Leakers League, including basketball, soccer,
                baseball, and more. Through these sports, children not only learn the fundamental techniques but
                also develop valuable life skills such as discipline, perseverance, and teamwork. Our experienced
                coaches are dedicated to guiding and mentoring the young athletes, fostering their growth both on
                and off the field.

                At Leakers League, we believe in the power of fun. We've created an environment where children can
                learn and play while enjoying every moment. From exciting tournaments to skill-building exercises,
                our league provides a holistic sports experience that goes beyond the game itself. We want children
                to form lasting friendships, build self-confidence, and create memories that will stay with them for
                a lifetime.

                Join us at Leakers League and let your child embark on a journey of athleticism, camaraderie, and
                personal growth. Together, we can inspire the next generation of sports stars and create a positive
                impact on their lives.



            </p>
        </div>
    </div>
</div>
