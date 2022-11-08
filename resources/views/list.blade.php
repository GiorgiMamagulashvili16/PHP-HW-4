<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($posts as $post)

    <span>{{$post->title}}</span><br>
    <span>{{$post->body}}</span><br>
    <span>{{$post->author}}</span><br>
    <span></span><br>
    @endforeach
</body>
</html>