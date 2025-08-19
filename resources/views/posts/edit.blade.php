@extends('layouts.app')

@section('content')
<div class="w-7xl mx-auto mt-10 bg-white shadow-lg rounded-xl p-8" style="text-shadow: none";>
    <h2 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-2">Edit Post</h2>

    <form action="{{ route('posts.update', $post) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        {{-- Title --}}
        <div>
            <label for="title" class="block text-sm font-semibold text-gray-700">Title</label>
            <input 
                type="text" 
                name="title" 
                id="title" 
                value="{{ old('title', $post->title) }}" 
                required 
                class="w-full border border-gray-300 rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-400 focus:outline-none text-gray-700"
            >
        </div>

        {{-- Content --}}
        <div>
            <label for="content" class="block text-sm font-semibold text-gray-700">Content</label>
            <textarea 
                name="content" 
                id="content" 
                rows="6" 
                required 
                class="w-full border border-gray-300 rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-400 focus:outline-none text-gray-700"
            >{{ old('content', $post->content) }}</textarea>
        </div>

        {{-- Buttons --}}
        <div class="flex items-center justify-between">
            <a href="{{ url()->previous() }}" class="text-gray-600 hover:text-gray-800 text-sm">
                ← Back
            </a>
            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg shadow-md transition-all duration-200"
            >
                Update
            </button>
        </div>
    </form>
</div>
@endsection
