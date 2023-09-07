<x-app-layout>
    <div class="bg-white py-5 px-10">
        @if (count($posts)==0)
        <h1 class="py-40 text-center items-center text-3xl mt-3 font-medium">There is no posts yet.</h1>
        @else
        <div class="grid grid-cols-3 gap-4">
            @foreach ($posts as $post)
            <div class="p-4 rounded-lg border border-black border-opacity-5 bg-gray-200 hover:bg-gray-300">
                {{-- <img class="rounded-lg" src="{{ asset('images/illustration-1.png') }}" alt="illustration-1" width="2500px"> --}}
                <img class="rounded-lg" src="http://127.0.0.1:8000/images/illustration-<?php echo rand(1,4); ?>.png" alt="illustration-1" width="2500px">
                <header class="my-4">
                    <h1 class="text-3xl mt-3 font-medium">{{ $post->title }}</h1>
                    <p class="text-gray-500 mt-1 font-medium">Created {{ $post->created_at->diffForHumans() }}</p>
                    <p class="text-gray-500 mt-1 font-medium">Updated {{ $post->updated_at->diffForHumans() }}</p>
                </header>
                <main class="my-6">
                    <p>{{ $post->content }}</p>
                </main>
                <footer class="flex justify-between items-center">
                    <div class="flex">
                        <p>By <span class="font-medium underline">{{ $post->user->name }}</span></p>
                    </div>
                    <div>
                        <a href="{{ route('posts.show', $post->id) }}">
                            <button class="px-3 py-1 bg-gray-400 rounded-full">Read
                                More</button>
                        </a>
                    </div>
                </footer>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</x-app-layout>