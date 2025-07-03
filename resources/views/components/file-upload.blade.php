<div class="mb-3">
    <div class="file-upload-container">
        <div class="file-upload-wrapper" id="{{ $wrapperId ?? 'fileUploadWrapper' }}">
            <input type="file"
                   class="file-input @error($name) is-invalid @enderror"
                   id="{{ $inputId ?? 'fileInput' }}"
                   name="{{ $name }}"
                {{ $multiple ? 'multiple' : '' }}>
            <div class="file-upload-content">
                <p class="file-upload-text" id="{{ $textId ?? 'fileUploadText' }}">
                    {{ $label ?? __('translation.form.fields.file_upload') }}
                </p>
                <button type="button" class="select-file-btn" id="{{ $buttonId ?? 'selectFileBtn' }}">
                    <img src="{{ asset('assets/images/uploader-icon.svg') }}" alt="">
                    {{ $buttonLabel ?? __('translation.form.fields.select_file') }}
                </button>
            </div>
        </div>

        @error($name)
        <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
</div>
