<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary'])->except(['label']) }}
>
    {{ $label ?? __('Save')  }}
</button>
