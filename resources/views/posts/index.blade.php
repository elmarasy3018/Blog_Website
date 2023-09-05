<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>

<body>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>content</th>
            <th>user</th>
            <th>show</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <th>{{$post->id}}</th>
            <th>{{$post->title}}</th>
            <th>{{$post->content}}</th>
            <th>{{$post->user->name}}</th>
            <th><a href="{{route('posts.show',$post->id)}}">View</a></th>
        </tr>
        @endforeach
    </table>
</body>

</html>