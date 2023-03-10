<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        <!-- {{ csrf_field() }} -->
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" value="{{$post->title}}" placeholder="Enter title">
        <input type="text" name="content" value="{{$post->content}}" placeholder="Enter content for post">
        <input type="submit" name="submit" value="UPDATE">
    </form>
    
    <form method="POST" action="/posts/{{$post->id}}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" name="submit" value="DELETE">
    </form>
</body>
</html>