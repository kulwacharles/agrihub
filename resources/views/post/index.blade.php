<html>
    <head>
        <title>Kulwa</title>
    </head>
    <body>
        @if(count($post)>0)
        @foreach($post as  $posts)
             <h2><a href="post/{{$posts->id}}">{{$posts->title}}</a></h2><br>
             <h2>{{$posts->body}}</h2><br>
        @endforeach
        {{ $post->links() }}
        @else
        <h2>No post</h2>
        @endif
    </body>
</html>