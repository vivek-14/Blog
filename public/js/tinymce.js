import "tinymce/tinymce";
import "tinymce/themes/silver";
import "tinymce/icons/default";
import "tinymce/plugins/autolink";
import "tinymce/plugins/lists";
import "tinymce/plugins/link";
import "tinymce/plugins/image";
import "tinymce/plugins/charmap";
import "tinymce/plugins/print";
import "tinymce/plugins/preview";
import "tinymce/plugins/anchor";
import "tinymce/plugins/advlist";
import "tinymce/plugins/wordcount";
import "tinymce/plugins/imagetools";
import "tinymce/plugins/media";
import "tinymce/plugins/code";

document.addEventListener("DOMContentLoaded", function () {
    tinymce.init({
        selector: "textarea.tinymce-editor",
        height: 500,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table paste imagetools wordcount",
        ],
        toolbar:
            "undo redo | formatselect | bold italic backcolor | \
      alignleft aligncenter alignright alignjustify | \
      bullist numlist outdent indent | removeformat | image code",
        image_title: true,
        automatic_uploads: true,
        file_picker_types: "image",
        image_class_list: [{ title: "Responsive", value: "img-fluid" }],
        images_upload_url: "/your-image-upload-route",
        images_upload_handler: function (blobInfo, success, failure) {
            // Implement your image upload logic here and call either success() or failure() accordingly.
        },
    });
});
