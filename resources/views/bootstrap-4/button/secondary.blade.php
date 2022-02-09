<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-secondary'])->except(['label']) :label="$label" }}
>
    {{ (isset($label) && $label != null) ? $label : ($slot->isNotEmpty() ? $slot : __('Submit')) }}
</button>
