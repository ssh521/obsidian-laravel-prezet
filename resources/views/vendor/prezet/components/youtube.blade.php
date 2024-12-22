@php
    if (!isset($attributes['videoid'])) {
        throw new \InvalidArgumentException('The videoid attribute is required.');
    }
    if (!isset($attributes['title'])) {
        throw new \InvalidArgumentException('The title attribute is required.');
    }

    $ytData = new \BenBjurstrom\Prezet\Data\YoutubeData($attributes->getAttributes());
@endphp

<div class="aspect-video" {{ $attributes }}>
    <lite-youtube
        videoid="{{ $attributes['videoid'] }}"
        style="background-image: url('https://i.ytimg.com/vi/{{ $attributes['videoid'] }}/hqdefault.jpg');"
        title="{{ $attributes['title'] }}"
    >
        <a href="https://youtube.com/watch?v={{ $attributes['videoid'] }}" class="lty-playbtn" title="Play Video">
            <span class="lyt-visually-hidden">Play Video: {{ $attributes['title'] }}</span>
        </a>
    </lite-youtube>

</div>
