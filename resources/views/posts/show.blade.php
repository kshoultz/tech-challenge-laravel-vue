@extends('layouts.app')

@section('content')
    <div class="mwi-copy-section">
        <div class="mwi-card">
            <div class="mwi-card-icon">
                <img src="/images/{{ $post->image_url }}" alt="{{ $post->image_url }} Image" />
            </div>
        </div>
        <h1>{{ $post->title }}</h1>
        <p>
            {{ $post->paragraph }}
        </p>
        <hr />
    </div>
@endsection