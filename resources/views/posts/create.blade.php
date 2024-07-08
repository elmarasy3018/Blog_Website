<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-4 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Create Post</h2>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="#" id="english-link">EN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="spanish-link">ES</a>
                </li>
            </ul>
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
                <div class="card-body" id="english-form">
                    <div class="form-group">
                        <label class="required" for="en_title">{{ trans('cruds.article.fields.title') }} (EN)</label>
                        <input class="form-control {{ $errors->has('en_title') ? 'is-invalid' : '' }}" type="text"
                            name="en_title" id="en_title" value="{{ old('en_title', '') }}" required>
                        @if ($errors->has('en_title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('en_title') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.article.fields.title_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="en_content">{{ trans('cruds.article.fields.content') }} (EN)</label>
                        <textarea class="form-control {{ $errors->has('en_content') ? 'is-invalid' : '' }}" name="en_content" id="en_content">{{ old('en_content') }}</textarea>
                        @if ($errors->has('en_content'))
                            <div class="invalid-feedback">
                                {{ $errors->first('en_content') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.article.fields.content_helper') }}</span>
                    </div>
                </div>
                <div class="card-body hidden" id="spanish-form">
                    <div class="form-group">
                        <label class="required" for="title">{{ trans('cruds.article.fields.title') }} (ES)</label>
                        <input class="form-control {{ $errors->has('es_title') ? 'is-invalid' : '' }}" type="text"
                            name="es_title" id="es_title" value="{{ old('es_title', '') }}" required>
                        @if ($errors->has('es_title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('es_title') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.article.fields.title_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="es_content">{{ trans('cruds.article.fields.content') }} (ES)</label>
                        <textarea class="form-control {{ $errors->has('es_content') ? 'is-invalid' : '' }}" name="es_content" id="es_content">{{ old('es_content') }}</textarea>
                        @if ($errors->has('es_content'))
                            <div class="invalid-feedback">
                                {{ $errors->first('es_content') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.article.fields.content_helper') }}</span>
                    </div>
                </div>
                {{-- <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                            Title</label>
                        <input type="text" name="title" id="title" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                            Content</label>
                        <textarea name="content" id="content" rows="8" required
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                    </div>
                </div> --}}
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
            $englishForm.toggleClass('hidden');
            $spanishForm.toggleClass('hidden');
        });

        $spanishLink.click(function() {
            $englishForm.toggleClass('hidden');
            $spanishForm.toggleClass('hidden');
        });
    </script>
</x-app-layout>
