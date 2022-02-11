# Laravel Components

### Usage

#### Counter

```html
<x-theme-counter number="10" />
```

will be output as

```html
<span class="counter"> 10 </span>
```

#### Switch

```html
<x-form-switch label="Test" name="status" value="status" />
```

will be output as

```html
<div class="form-group">
    <label class="custom-switch">
        <input class="custom-switch-input" type="checkbox" value="status" name="status" />

        <span class="custom-switch-indicator"></span>
        <span class="custom-switch-description text-upper">Test</span>
    </label>
</div>
```

#### Select Group

```html
<x-form-group label="Mail Type">
    <x-form-select-group>
        <x-form-select-item label="From" name="type" value="from" checked />
        <x-form-select-item label="Reply To" name="type" value="reply" />
    </x-form-select-group>
</x-form-group>
```

##### will be output as

```html
<div class="form-group">
    <label> Mail Type </label>
    <div class="selectgroup">
        <label class="selectgroup-item">
            <input type="radio" class="selectgroup-input" value="from" name="type" checked />
            <span class="selectgroup-button"> From </span>
            <input type="radio" class="selectgroup-input" value="reply" name="type" />
            <span class="selectgroup-button"> Reply To </span>
        </label>
    </div>
</div>
```

#### Modal

```html
<x-theme-modal title="Preview" name="preview">
    <iframe class="absolute" width="100%" height="100%" data-html-preview-target></iframe>
</x-theme-modal>
```

##### will be output as

```html
@push("modals")
<div class="modal modal-box" data-modal="preview" id="preview" data-modal-backdrop>
    <div class="modal-dialog animated bounceInRight">
        <div class="modal-content">
            <div class="modal-wrapper">
                <button type="button" class="close modal-close" data-dismiss="modal"></button>
                <div class="modal-body">
                    <header class="modal-header">
                        <span class="modal-title"> Preview </span>
                    </header>
                    <div class="modal-content scrollbar">
                        <iframe class="absolute" width="100%" height="100%" data-html-preview-target></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endpush
```

#### Buttons

```html
<x-form-button />
```

##### will be output as

```html
<button type="submit" class="btn btn-primary">
    Submit
</button>
```

##### We can also use label

```html
<x-form-button label="Update" />
```

##### will be output as

```html
<button type="submit" class="btn btn-primary">
    Update
</button>
```

But if you want to display some text or icons in button instead of submit you can use it as a \$slot

##### Example:

```html
<x-form-button> Update </x-form-button>
```

##### it will be output as

```html
<button type="submit" class="btn btn-primary">
    Update
</button>
```

##### For button with btn-secondary we can use

```html
<x-form-button-secondary />
```

##### will be output as

```html
<button type="button" class="btn btn-secondary">
    Submit
</button>
```

##### We can also use label for btn-secondary

```html
<x-form-button-secondary label="Submit This" />
```

##### will be output as

```html
<button type="button" class="btn btn-secondary">
    Submit This
</button>
```

##### For button with btn-cancel we can use

```html
<x-form-button-cancel />
```

##### will be output as

```html
<button type="button" class="btn btn-cancel" data-modal-dismiss>
    Cancel
</button>
```

##### We can also use label for btn-cancel

```html
<x-form-button-cancel label="Cancel This" />
```

##### will be output as

```html
<button type="button" class="btn btn-cancel">
    Cancel This
</button>
```

##### Theme Checkbox

```
<x-theme-checkbox label="Select All" name="box" data-segments-all />
```

```html
<label class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" name="box" class="custom-control-input" data-segments-all />
    <span class="custom-control-label">Select All</span>
</label>
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
