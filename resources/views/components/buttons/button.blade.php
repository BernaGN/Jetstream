<button
    @if ($route == 'store()') wire:click.prevent="{{ $route }}" @else wire:click="{{ $route }}" @endif
    type="{{ $type }}"
    {{ $attributes->merge(['class' => "bg-$bgColor hover:$hoverElement-$hover text-$textColor py-2 px-4 rounded-md"]) }}>
    {{ $text }}
</button>
