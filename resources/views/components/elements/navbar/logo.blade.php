@props(['url' => 'images/vivek-dev.png', 'height' => 50, 'width' => 300, 'alt' => 'vivek.dev'])

<div class="flex-1">
    <a href="/">
        <img
            src="{{ asset($url) }}"
            alt="{{ $alt }}"
            height="{{ $height }}"
            width="{{ $width }}"
        >
    </a>
</div>
