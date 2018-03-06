<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
            <h4>use Laravel Blade</h4>
            <hr>
            <ul>
                @foreach($posts as $post)
                    <li> {{ $post->title }}</li>
                @endforeach
            </ul>
    </body>
</html>
