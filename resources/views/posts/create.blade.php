<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-4 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Create Post</h2>
            <ul
                class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                <li class="me-2">
                    <a href="#" aria-current="page" id="english-link"
                        class="inline-block p-4 rounded-t-lg text-blue-600 bg-gray-100">English</a>
                </li>
                <li class="me-2">
                    <a href="#" id="spanish-link"
                        class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Arabic</a>
                </li>
            </ul>
            <form action="{{ route('posts.store') }}" method="post" class="pt-4">
                @csrf
                <div class="card-body" id="english-form">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                        <div class="sm:col-span-2">
                            <label for="en_title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                                Title (EN)</label>
                            <input type="text" name="en_title" id="en_title" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="en_content"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                                Content (EN)</label>
                            <textarea name="en_content" id="en_content" rows="8" required
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-body hidden" id="spanish-form">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                        <div class="sm:col-span-2">
                            <label for="ar_title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                                Title (AR)</label>
                            <input type="text" name="ar_title" id="ar_title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="ar_content"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                                Content (AR)</label>
                            <textarea name="ar_content" id="ar_content" rows="8"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button type="submit"
                        class="text-blue-600 inline-flex items-center hover:text-white border border-blue-600 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-900">
                        Create Post
                    </button>
                </div>
            </form>
        </div>
    </section>
    <script>
        var $englishForm = $('#english-form');
        var $spanishForm = $('#spanish-form');
        var $englishLink = $('#english-link');
        var $spanishLink = $('#spanish-link');

        $englishLink.click(function() {
            $englishForm.removeClass('hidden');
            $spanishForm.addClass('hidden');
            $englishLink.addClass('text-blue-600 bg-gray-100');
            $spanishLink.removeClass('text-blue-600 bg-gray-100');
            $englishLink.removeClass('hover:text-gray-600 hover:bg-gray-50');
            $spanishLink.addClass('hover:text-gray-600 hover:bg-gray-50');
        });

        $spanishLink.click(function() {
            $englishForm.addClass('hidden');
            $spanishForm.removeClass('hidden');
            $spanishLink.addClass('text-blue-600 bg-gray-100');
            $englishLink.removeClass('text-blue-600 bg-gray-100');
            $spanishLink.removeClass('hover:text-gray-600 hover:bg-gray-50');
            $englishLink.addClass('hover:text-gray-600 hover:bg-gray-50');
        });
    </script>
</x-app-layout>
