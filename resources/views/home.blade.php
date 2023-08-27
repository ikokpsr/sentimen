@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @include('components.sidebar')

    <div class="grid grid-cols-12 gap-4 p-4 ml-64">
        <div class="col-span-12">
            <div class="flex items-center space-x-2 text-gray-500 border-b border-gray-500 w-fit p-2">
                <i class="fa-solid fa-house fa-xl"></i>
                <h2 class="text-2xl font-bold">Home</h2>
            </div>
        </div>
        <a href="{{ route('integration.index') }}" class="col-span-6 bg-white text-gray-500 rounded-lg shadow-xl flex justify-between items-center p-6 hover:bg-green-400 hover:text-white duration-200">
            <i class="fa-solid fa-circle-nodes fa-xl"></i>
            <p class="text-xl font-bold">API Integration</p>
        </a>
        <a href="{{ route('analysis.index') }}" class="col-span-6 bg-white text-gray-500 rounded-lg shadow-xl flex justify-between items-center p-6 hover:bg-yellow-300 hover:text-white duration-200">
            <i class="fa-solid fa-magnifying-glass-chart fa-xl"></i>
            <p class="text-xl font-bold">Sentiment Analysis</p>
        </a>
    </div>

@endsection