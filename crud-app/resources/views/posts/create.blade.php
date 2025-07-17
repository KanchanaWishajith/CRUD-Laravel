<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>Create New Post</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <p>
            Title: <input type="text" name="title" value="{{ old('title') }}">
        </p>
        <p>
            Content: <textarea name="content">{{ old('content') }}</textarea>
        </p>
        <button type="submit">Create</button>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">Back to List</a>
</body>
</html>
