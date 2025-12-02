document.addEventListener("DOMContentLoaded", function () {
    // Initialize CKEditor for all textareas with class rich-editor
    document.querySelectorAll('textarea.rich-editor').forEach(element => {
        ClassicEditor
            .create(element)
            .catch(error => {
                console.error(error);
            });
    });
});
