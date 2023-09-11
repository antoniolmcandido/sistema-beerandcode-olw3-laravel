<div
    @class([
        "flex items-center justify-between",
        "border-t border-white border-opacity-10 pt-6 text-white" => $isLast ?? false,
    ])
>
    <dt class="text-primary-200">{{ $title }}</dt>
    <dt class="text-secondary-300">R$ {{ $value }}</dt>
</div>
