<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Post</title>
</head>

<body>
    <h1>Daftar Post</h1>

    <form action="{{ route('post.index') }}" method="GET">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="cari.....">
        <button type="submit">Cari</button>
    </form>

    <ul>
        @foreach ($posts as $post)
            <li><strong>{{ $post->title }}</strong><br>{{ $post->content }}</li>
        @endforeach
    </ul>

    {{ $posts->links() }}

</body>

</html>
