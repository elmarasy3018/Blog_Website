<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-4 mx-auto lg:py-16">
            <a href="{{ route('posts.index') }}">
                <h1 style="text-decoration: underline;">Go back to home</h1>
            </a>
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Show Post</h2>
            @livewire('one-post', ['id' => $post->id])
            @livewire('add-comment', ['id' => $post->id])
        </div>
    </section>
</x-app-layout>
