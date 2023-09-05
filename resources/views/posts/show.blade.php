<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Post</title>
</head>

<body>
    <h1>{{$post->id}}</h1>
    <h1>{{$post->title}}</h1>
    <h1>{{$post->content}}</h1>
    <h1>{{$post->user->name}}</h1>
    <form action="{{route('posts.destroy',$post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>
</body>

</html>