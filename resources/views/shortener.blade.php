@extends('layouts.app')

@section('title', 'URL Shortener')

@section('content')
<div class="bg-gray-100 flex items-center justify-center mb-50">

    <div class="w-full max-w-md mt-20">
        <form action="{{ route('shorten.url') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <h2 class="text-center text-2xl font-bold mb-4">URL Shortener</h2>
            <div class="mb-4">
                <label for="url" class="block text-gray-700 text-sm font-bold mb-2">Enter URL:</label>
                <input type="url" name="url" id="url" placeholder="https://example.com" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="alias" class="block text-gray-700 text-sm font-bold mb-2">Custom Alias (optional):</label>
                <input type="text" name="alias" id="alias" placeholder="alias" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            @if(session('shortened_url'))
            <div class="mb-4">
                <p class="text-green-500 font-bold">Shortened URL:</p>
                <a href="{{ session('shortened_url') }}" target="_blank" class="text-blue-500">{{ session('shortened_url') }}</a>
            </div>
            @endif
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Shorten URL
                </button>
            </div>
        </form>
    </div>

</div>

@endsection

