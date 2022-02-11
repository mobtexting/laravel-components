<input {!! $attributes->merge(['class' => ($hasError($name) ? 'is-invalid' : '')]) !!}
    type="checkbox"
    value="{{ $value }}"

    @if($isWired())
        wire:model{!! $wireModifier() !!}="{{ $name }}"
    @endif

    @if($name)
        name="{{ $name }}"
    @endif
    
    @if($label && !$attributes->get('id'))
        id="{{ $id() }}"
    @endif

    @if($checked)
        checked="checked"
    @endif
/>

<x-form-label :label="$label" :for="$attributes->get('id') ?: $id()" class="form-check-label" />

{!! $help ?? null !!}

@if($hasErrorAndShow($name))
    <x-form-errors :name="$name" />
@endif
