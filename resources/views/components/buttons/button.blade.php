<button wire:click="{{ $route }}" type="{{ $type }}"
    {{ $attributes->merge(['class' => "bg-$color-500 hover:bg-$color-600 text-white py-2 px-4  $class "]) }}>
    {{ $text }}
</button>
