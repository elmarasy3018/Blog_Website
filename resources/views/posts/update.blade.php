<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-4 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update Post</h2>
            <form action="{{route('posts.update',$post->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                            Title</label>
                        <input type="text" name="title" id="title" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{$post->title}}" placeholder="Type product name">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                            Content</label>
                        <textarea name="content" id="content" rows="8" required
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{$post->content}}</textarea>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button type="submit"
                        class="text-blue-600 inline-flex items-center hover:text-white border border-blue-600 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-900">
                        Update Post
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>