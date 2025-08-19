@extends('layouts.app')

@section('content')
<div class="w-full max-w-4xl mx-auto mt-5 p-10 bg-white bg-opacity-75 rounded-lg shadow-lg font-sans" style="font-family: 'Fredoka', sans-serif;">
    <h2 class="text-3xl font-bold text-[#f5deb3] mb-6">Create New Post</h2>

    <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="title" class="block mb-2 font-semibold text-[#4F709C]">Title</label>
            <input 
                id="title"
                name="title" 
                type="text" 
                value="{{ old('title') }}" 
                required 
                class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#4F709C] text-gray-900"
            >
            @error('title')
                <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="content" class="block mb-2 font-semibold text-[#4F709C]">Content</label>
            <textarea 
                id="content"
                name="content" 
                rows="6" 
                required 
                class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#4F709C] text-gray-900"
            >{{ old('content') }}</textarea>
            @error('content')
                <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <button 
            type="submit" 
            class="bg-[#f5deb3] text-[#1a1a1a] px-8 py-3 rounded-[15px] font-bold hover:bg-[#e6cdad] transition-colors"
        >
            Publish
        </button>
    </form>
</div>
@endsection
