<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-4 mx-auto lg:py-16">
            <a href="{{ route('posts.index') }}">
                <h1 style="text-decoration: underline;">Go back to home</h1>
            </a>
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Show Post</h2>
            <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                <div class="sm:col-span-2">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                        Title</label>
                    <input type="text" name="title" id="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        value="{{$post->title}}" placeholder="Type product name" readonly>
                </div>
                <div class="sm:col-span-2">
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                        Content</label>
                    <textarea name="content" id="content" rows="8"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        readonly>{{$post->content}}</textarea>
                </div>
                <div class="w-full my-auto">
                    <div class="flex items-center space-x-4">
                        <a href="{{route('posts.edit',$post->id)}}">
                            <button type="button"
                                class="text-blue-600 inline-flex items-center hover:text-white border border-blue-600 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-900">
                                Update Post
                            </button>
                        </a>
                        <form action="{{route('posts.destroy',$post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Delete Post
                            </button>
                        </form>
                    </div>
                </div>
                <div class="w-full">
                    <label for="content"
                        class="float-right inline-block text-sm font-medium text-gray-900 dark:text-white">
                        Created By <span class="underline text-base font-semibold">{{$post->user->name}}</span>
                    </label>
                    <br>
                    <label for="content"
                        class="float-right inline-block text-sm font-medium text-gray-900 dark:text-white">
                        Created <span class="underline text-base font-semibold">{{ $post->created_at->diffForHumans()
                            }}</span>
                    </label>
                </div>
                <div class="sm:col-span-2">
                    <?php $i=0; ?>
                    @foreach ($post->comment as $loop)
                    <article
                        class="p-3 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <div class="flex justify-between items-center mb-2">
                            <div>
                                <p class="mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                                    {{ $post->comment[$i]->user->name }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    {{ $post->comment[$i]->created_at }}
                                </p>
                            </div>
                        </div>
                        <p class="text-gray-500 dark:text-gray-400">{{ $post->comment[$i]->content }}</p>
                    </article>
                    <?php $i++; ?>
                    @endforeach
                </div>
                <div id="comments" class="sm:col-span-2">
                    <form action="{{route('comments.store')}}" method="post">
                        @csrf
                        <label for="content" class="sr-only">Your message</label>
                        <div
                            class="flex items-center py-2 rounded-lg bg-gray-50 dark:bg-gray-700 border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <input type="hidden" name="post_id" id="post_id" value="{{$post->id}}">
                            <textarea name="content" id="content" rows="1" required
                                class="block mr-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Your message..."></textarea>
                            <button type="submit"
                                class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                                <svg class="w-5 h-5 rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 18 20">
                                    <path
                                        d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z" />
                                </svg>
                                <span class="sr-only">Send message</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>