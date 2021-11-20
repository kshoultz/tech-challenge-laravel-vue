@extends('layouts.app')

@section('content')
    <div>
        <form class="mwi-form" action="/posts" method="POST">
            @csrf
            <h2>Create Post</h2>
            <div class="mwi-fields-container">
                <input
                    type="text"
                    name="title"
                    placeholder="Title..."
                />
                <input
                    type="text"
                    name="paragraph"
                    placeholder="Paragraph..."
                />
                <input
                    type="text"
                    name="image_url"
                    placeholder="Image Name..."
                />
                <input
                    type="text"
                    name="active"
                    placeholder="Y / N"
                />
                <div class="mwi-toolbar">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection