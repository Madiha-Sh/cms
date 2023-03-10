<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>
    <form action="/posts" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Enter title">
        <input type="text" name="content" placeholder="Enter content for post">
        <input type="submit" name="submit">
    </form>
</body>
</html>