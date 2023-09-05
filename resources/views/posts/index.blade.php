<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    @vite('resources/css/app.css')
    <style>
        #sticky {
            background: red;
            position: sticky;
            top: 70px;
            align-self: flex-start;
        }
    </style>
</head>

<body>
    <div class="flex justify-between">
        <div id="sticky">here 1</div>
        <div>
            <div class="grid grid-cols-3 gap-4">
                @foreach ($posts as $post)
                    <div class="mr-3 p-6 rounded-lg border border-black border-opacity-5 bg-gray-100 hover:bg-gray-200">
                        <img class="rounded-lg" src="{{ asset('images/illustration-1.png') }}" alt="illustration-1"
                            width="2500px">
                        <header class="my-4">
                            <h1 class="text-3xl mt-3 font-medium">{{ $post->title }}</h1>
                            <p class="text-gray-500 mt-1 font-medium">Published 6 days Ago</p>
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
        <div class="sticky self-start top-0">here 2</div>
    </div>
    <a href="{{ route('posts.create') }}">Create</a>
</body>

</html>
