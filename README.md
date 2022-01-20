# Laravel Components

### Usage

#### Counter

```html
<x-theme-counter number="10" />
```

#### Switch

```html
<x-form-switch label="Active?" name="status" />
```

#### Select Group

```html
<x-form-group label="Mail Type">
    <x-form-select-group>
        <x-form-select-item label="From" name="type" checked value="from" />
        <x-form-select-item label="Reply To" name="type" value="reply" />
    </x-form-select-group>
</x-form-group>
```

#### Modal

```html
<x-theme-modal title="Preview" name="preview">
    <iframe class="absolute" width="100%" height="100%" data-html-preview-target></iframe>
</x-theme-modal>
```

#### Buttons

```html
<x-form-button :label="Save content" />
<x-form-button-secondary :label="Preview" />
<x-form-button-cancel :label="Cancel" />
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information about what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
