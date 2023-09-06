<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create Post</title>
</head>

<body>
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <input type="text" name="title" id="title">
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <button type="submit">Save</button>
    </form>
</body>

</html>