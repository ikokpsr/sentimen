@extends('layouts.app')

@section('title', 'Sentiment Analysis')

@section('content')

    @include('components.sidebar')

    <div class="grid grid-cols-12 gap-4 p-4 ml-64">
        <div class="col-span-12">
            <div class="flex items-center space-x-2 text-gray-500 border-b border-gray-500 w-fit p-2">
                <i class="fa-solid fa-circle-nodes fa-xl"></i>
                <h2 class="text-2xl font-bold">API Integration</h2>
            </div>
        </div>
        <div class="col-span-6 bg-white h-24 rounded-lg shadow-xl">

        </div>
        <div class="col-span-6 bg-white h-24 rounded-lg shadow-xl">

        </div>
    </div>

@endsection