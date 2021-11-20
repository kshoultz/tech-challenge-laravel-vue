@extends('layouts.app')

@section('content')

    <div>
        <div class="mwi-copy-section">
            <h1>Posts</h1>
        </div>
        <div class="mwi-toolbar">
            <a href="posts/create">Add a new Post &rarr;</a>
        </div>
        <div >
            @foreach ($posts as $post)
                <div class="mwi-card-layout">
                    <div>
                        <a href="/posts/{{ $post->id }}/edit">Edit Post &rarr;</a>
                        <form action="/posts/{{ $post->id }}" method="POST">
                            @csrf
                            @method('DELETE')


                            <div>
                                <div style="background-color:#FFFFFF;">
                                    <img src="images/{{ $post->image_url }}" alt="{{ $post->image_url }} Image" />
                                </div>
                                <h2>
                                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                                </h2>
                                <p>
                                    {{ $post->paragraph }}
                                </p>
                                <hr />
                            </div>

                            <div class="mwi-toolbar">
                                <button type="submit">Delete Post &rarr;</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection