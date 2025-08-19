@extends('layouts.app')

@section('content')
<h2 class="text-3xl font-bold text-[#f5deb3] mb-6">All Posts</h2>

<div class="space-y-6" style="text-shadow:none";>
    @forelse($posts as $post)
    <div class="bg-white bg-opacity-90 rounded-lg shadow-md p-6">
        <h3 class="text-2xl font-semibold text-[#D4A373] mb-2">{{ $post->title }}</h3>
        <p class="text-gray-700 mb-4">{{ $post->content }}</p>
        <small class="text-sm text-gray-600">
            By <span class="font-semibold">{{ $post->user->name }}</span> — {{ $post->created_at->format('M d, Y') }}
        </small>

        <div class="mt-4 flex gap-3">
            @can('update', $post)
                <a href="{{ route('posts.edit', $post) }}" 
                   class="px-3 py-2 bg-[#4F709C] text-white rounded-[18px] hover:bg-[#3B5A82] transition-colors font-semibold">
                   Edit
                </a>
            @endcan

            @can('delete', $post)
                <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                        class="px-3 py-2 bg-red-600 text-white rounded-[18px] hover:bg-red-400 transition-colors font-semibold">
                        Delete
                    </button>
                </form>
            @endcan
        </div>
    </div>
    @empty
    <p class="text-[#f5deb3] text-lg">No posts yet.</p>
    @endforelse
</div>
@endsection
