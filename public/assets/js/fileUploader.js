const fileUploadWrapper = document.getElementById('fileUploadWrapper');
const fileInput = document.getElementById('fileInput');
const fileUploadText = document.getElementById('fileUploadText');
const selectFileBtn = document.getElementById('selectFileBtn');

// Handle file selection
fileInput.addEventListener('change', function(e) {
    const files = e.target.files;
    if (files.length > 0) {
        fileUploadWrapper.classList.add('has-file');
        if (files.length === 1) {
            fileUploadText.textContent = files[0].name;
        } else {
            fileUploadText.textContent = `${files.length} files selected`;
        }
    } else {
        fileUploadWrapper.classList.remove('has-file');
        fileUploadText.textContent = 'File Upload';
    }
});

// Handle drag and drop
fileUploadWrapper.addEventListener('dragover', function(e) {
    e.preventDefault();
    fileUploadWrapper.classList.add('drag-over');
});

fileUploadWrapper.addEventListener('dragleave', function(e) {
    e.preventDefault();
    fileUploadWrapper.classList.remove('drag-over');
});

fileUploadWrapper.addEventListener('drop', function(e) {
    e.preventDefault();
    fileUploadWrapper.classList.remove('drag-over');

    const files = e.dataTransfer.files;
    if (files.length > 0) {
        fileInput.files = files;
        // Trigger change event
        const event = new Event('change', { bubbles: true });
        fileInput.dispatchEvent(event);
    }
});

// Handle click on wrapper or button
fileUploadWrapper.addEventListener('click', function() {
    fileInput.click();
});
