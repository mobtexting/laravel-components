<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-secondary'])->except(['label']) }}
>
    {{ $label ?? __('Save')  }}
</button>
