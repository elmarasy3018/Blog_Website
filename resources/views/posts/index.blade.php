<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    @vite('resources/css/app.css')
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
</head>

<body>
    <nav
        class="bg-white dark:bg-gray-900 sticky w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="flex flex-wrap items-center justify-between mx-auto p-2">
            <a href="{{route('posts.index')}}" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <div class="flex md:order-2">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
                    started</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="flex justify-between">
        <div class="sticky self-start top-0 min-w-[16.6%] bg-gray-200">
            <ul>
                <a class="" href="{{ route('posts.create') }}">
                    <li
                        class="m-3 pl-3 p-1 rounded-lg bg-gray-200 hover:bg-gray-300 border border-black border-opacity-5">
                        {{-- <i class="fa-solid fa-plus fa-sm inline"></i> --}}
                        <span class="pl-1 font-medium">Create New Post</span>
                    </li>
                </a>
                <a class="" href="{{ route('posts.create') }}">
                    <li
                        class="m-3 pl-3 p-1 rounded-lg bg-gray-200 hover:bg-gray-300 border border-black border-opacity-5">
                        {{-- <i class="fa-solid fa-plus fa-sm inline"></i> --}}
                        <span class="pl-1 font-medium">Create New Post</span>
                    </li>
                </a>
            </ul>
        </div>
        <div class="m-4">
            <div class="grid grid-cols-3 gap-3">
                @foreach ($posts as $post)
                <div class="p-4 rounded-lg border border-black border-opacity-5 bg-gray-100 hover:bg-gray-200">
                    <img class="rounded-lg" src="{{ asset('images/illustration-1.png') }}" alt="illustration-1"
                        width="2500px">
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
                            <p><span class="font-medium">{{ $post->user->name }}</span></p>
                        </div>
                        <div>
                            <a href="{{ route('posts.show', $post->id) }}">
                                <button class="px-3 py-1 bg-gray-300 hover:bg-gray-400 rounded-full">Read
                                    More</button>
                            </a>
                        </div>
                    </footer>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>