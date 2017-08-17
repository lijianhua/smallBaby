<div id="fh5co-board" data-columns=4>
@foreach($posts as $post)
    <div class="item">
        <div class="animate-box">
            <a href="{{ $post->image_url }}" class="image-popup fh5co-board-img"
                                             title="{{ $post->title }}"><img src="{{ $post->image_url }}" alt="{{
                $post->title }}"></a>
        </div>
        <div class="fh5co-desc">{{ $post->description }}</div>
    </div>
@endforeach
</div>
