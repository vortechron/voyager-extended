@props(['name', 'value', 'options' => []])

<textarea class="form-control richTextBox" name="{{ $name }}" id="richtext{{ $name }}">
    {{ old($name, $value ?? '') }}
</textarea>

@push('javascript')
    <script>
        $(document).ready(function() {
            var additionalConfig = {
                selector: 'textarea.richTextBox[name="{{ $name }}"]',
            }

            $.extend(additionalConfig, {!! json_encode($options ?? '{}') !!})

            tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));
        });
    </script>
@endpush
