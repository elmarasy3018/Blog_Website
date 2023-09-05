<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update Post</title>
</head>

<body>
    <form action="{{route('posts.update',$post->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="number" name="id" id="id" value="{{$post->id}}">
        <input type="text" name="title" id="title" value="{{$post->title}}">
        <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
        <input type="number" name="user_id" id="user_id" value="{{$post->user_id}}">
        <button type="submit">Save</button>
    </form>
</body>

</html>