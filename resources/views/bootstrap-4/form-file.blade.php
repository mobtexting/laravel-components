<div class="form-group">
    <x-form-label :label="$label" :for="$attributes->get('id') ?: $id()" />

    <input data-filepond name="{{ $name }}" type="file" {!! $attributes !!}>

    @if($hasErrorAndShow($name))
    <x-form-errors :name="$name" />
    @endif
    {!! $help ?? null !!}
</div>
