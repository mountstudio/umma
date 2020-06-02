tinymce.init({
    selector: '#content_area',
    setup: function (editor) {
        editor.on('init change', function () {
            editor.save();
        });
    },
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste imagetools"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    image_title: true,
    automatic_uploads: true,
    relative_urls: false,
    remove_script_host: false,
    image_class_list: [
        {title: 'Fluid image', value: 'img-fluid'},
    ],
    images_upload_url: '/image-upload',
    file_picker_types: 'image',
    file_picker_callback: function(cb, value, meta) {
        let input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function() {
            let file = this.files[0];

            let reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {
                let id = 'blobid' + (new Date()).getTime();
                let blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                let base64 = reader.result.split(',')[1];
                let blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), { title: file.name });
            };
        };
        input.click();
    }
});
