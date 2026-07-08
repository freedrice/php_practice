<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @auth

    <p>You are Logged in.</p>

    <form action="/logout" method="POST">
        <button>LOGOUT</button>
    </form>

    <div style="border: 3px solid black;">
        <h2>create new post</h2>
        <form action="/create-post" method="POST" placeholder="post title">
            <input type="text" name = "title">
            <textarea name="body" placeholder="post something!"></textarea>
            <button>Save Post</button>
        </form>
    </div>

    <div style="border: 3px solid black;">
        <h2>All Posts</h2>
        @foreach($posts as $post)
        <div style="background-color: gray; padding: 10px; margin: 10px;">
            <h2>{{$post['title']}}</h2>
            {{$post['body']}}
            <h4>by {{$post->user->name}} created at {{$post->created_at}}</h4>
            <h4>last update {{$post->updated_at}}</h4>
            <p><a href="/edit-post/{{$post->id}}">Edit post</a></p>
            <form action="/delete-post/{{$post->id}}" method="POST">
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
        @endforeach
    </div>


    @else

    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            <input name="name" type="text" placeholder= "name">
            <input name="email" type="text" placeholder= "email">
            <input name="password" type="password" placeholder= "password">
            <button>Register</button>
        </form>
    </div>

    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
            <input name="loginname" type="text" placeholder= "name">
            <input name="loginpassword" type="password" placeholder= "password">
            <button>Login</button>
        </form>
    </div>

    @endauth

    
</body>
</html>