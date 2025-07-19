<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <!-- ✅ Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Create New Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="5">{{ old('content') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary ms-2">Back to List</a>
    </form>
</div>
</body>
</html>
