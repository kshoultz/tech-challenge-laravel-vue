@extends('layouts.app')

@section('content')
    <div>
        <form class="mwi-form" class="mwi-form" action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <h2>Update Post</h2>
            <div class="mwi-fields-container">
                <input
                    type="text"
                    name="title"
                    placeholder="Title..."
                    value="{{ $post->title }}"
                />
                <input
                    type="text"
                    name="paragraph"
                    placeholder="Paragraph..."
                    value="{{ $post->paragraph }}"
                />
                <input
                    type="text"
                    name="image_url"
                    placeholder="Image Name..."
                    value="{{ $post->image_url }}"
                />
                <input
                    type="text"
                    name="active"
                    placeholder="Y / N"
                    value="{{ $post->active }}"
                />
                <div class="mwi-toolbar">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection