@extends('layouts.plantilla')
<x-app-layout>
    <x-slot name="header" class="bg-blue-300">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-red-600">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="" method="get">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 grid-rows-7 sm:grid-rows-5 gap-4">
                            <div class="col-span-1 sm:col-span-2 row-span-1 sm:row-span-1">
                                
                            </div>
                            <div class="row-start-2 sm:col-span-1">
                                <label for="">Name
                                    <input type="text">
                                </label>
                            </div>
                            <div class="row-start-3 sm:col-span-1">
                                <label for="">Name
                                    <input type="text">
                                </label>
                            </div>
                            <div class="row-start-4 sm:col-span-1">
                                <label for="">Name
                                    <input type="text">
                                </label>
                            </div>
                            <div class="row-start-5 sm:col-span-1">
                                <label for="">Name
                                    <input type="text">
                                </label>
                            </div>
                            <div class="col-span-1 sm:col-span-2 row-start-6 sm:row-start-5">6</div>
                            <div class="col-span-1 sm:col-span-2 row-start-7 sm:row-start-5">7</div>
                        </div>
                        
    
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
