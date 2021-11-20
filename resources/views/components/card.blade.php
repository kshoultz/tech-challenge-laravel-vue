<div class="mwi-card">
    <div class="mwi-card-icon">
        <img src="images/{{ $post->image_url }}" alt="{{ $post->image_url }} Image" />
    </div>
    <h2>{{ $post->title }}</h2>
    <p>{{  $post->paragraph }}</p>
    <div class="mwi-toolbar"><a href="/posts/{{ $post->id }}" class="mwi-toolbar-link">Learn More</a></div>
</div>