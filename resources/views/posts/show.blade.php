<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Post</title>
    @vite('resources/css/app.css')
</head>

<body>
    <h1>{{$post->title}}</h1>
    <h1>{{$post->content}}</h1>
    <h1>Created By {{$post->user->name}}</h1>
    <p class="text-gray-500 mt-1 font-medium">Created {{ $post->created_at->diffForHumans() }}</p>
    <p class="text-gray-500 mt-1 font-medium">Updated {{ $post->updated_at->diffForHumans() }}</p>
    <a href="{{route('posts.edit',$post->id)}}"><button>edit</button></a>
    <form action="{{route('posts.destroy',$post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>
    <ul>
        <?php $i=0; ?>
        @foreach ($post->comment as $loop)
        <li>
            {{ $post->comment[$i]->content }}
            by {{ $post->comment[$i]->user->name }}
            at {{ $post->comment[$i]->created_at }}
        </li>
        <?php $i++; ?>
        @endforeach
    </ul>
    <form action="{{route('comments.store')}}" method="post">
        @csrf
        <input type="hidden" name="post_id" id="post_id" value="{{$post->id}}">
        <input type="text" name="content" id="content">
        <button type="submit">Save</button>
    </form>
</body>

</html>