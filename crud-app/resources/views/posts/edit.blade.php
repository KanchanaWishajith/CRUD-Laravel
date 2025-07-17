<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            Title: <input type="text" name="title" value="{{ $post->title }}">
        </p>
        <p>
            Content: <textarea name="content">{{ $post->content }}</textarea>
        </p>
        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">Back to List</a>
</body>
</html>
