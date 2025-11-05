<div {{ $attributes->class([
    'grid'
])}}>
    @if(isset($title))
        <label for="" class="block text-sm font-medium text-gray-700 mb-1">{{ $title }}</label>
    @endif
    {{ $slot }}
</div>
