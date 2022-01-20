
<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-cancel'])->except(['label']) }}
    data-modal-dismiss
>
    {{ $label ?? __('Cancel')  }}
</button>
