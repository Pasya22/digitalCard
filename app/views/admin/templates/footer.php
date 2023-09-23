<footer>

</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://kit.fontawesome.com/09e00d7278.js" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>js/script.js"></script>
<script>
    $('input').focus(function() {
        $(this).parents('.form-group').addClass('focused');
    });

    $('input').blur(function() {
        var inputValue = $(this).val();
        if (inputValue == "") {
            $(this).removeClass('filled');
            $(this).parents('.form-group').removeClass('focused');
        } else {
            $(this).addClass('filled');
        }
    })
</script>
<script>
    var btnMenu = document.getElementById('btn-menu-admin');
    var sidebar = document.getElementById('sidebarAdmin');
    var ctnAdmin = document.getElementById('contentAdmin');
    btnMenu.addEventListener('click', function() {
        if (sidebar.style.display === "none") {
            sidebar.style.display = "block";
        } else {
            sidebar.style.display = "none";
            ctnAdmin.style.width = "100%";
        }
    })
</script>
<script>
    const previewImage = (event) => {
        /**
         * Get the selected files.
         */
        const imageFiles = event.target.files
        /**
         * Count the number of files selected.
         */
        const imageFilesLength = imageFiles.length
        /**
         * If at least one image is selected, then proceed to display the preview.
         */
        if (imageFilesLength > 0) {
            /**
             * Get the image path.
             */
            const imageSrc = URL.createObjectURL(imageFiles[0])
            /**
             * Select the image preview element.
             */
            const imagePreviewElement = document.querySelector("#preview-selected-image")
            const imageBefore = document.querySelector("#gambarLama")
            /**
             * Assign the path to the image preview element.
             */
            imagePreviewElement.src = imageSrc
            /**
             * Show the element by changing the display value to "block".
             */
            imagePreviewElement.style.display = "block"
            imageBefore.style.display = "none"
        }
    }

    const previewImage2 = (event) => {
        /**
         * Get the selected files.
         */
        const imageFiles = event.target.files
        /**
         * Count the number of files selected.
         */
        const imageFilesLength = imageFiles.length
        /**
         * If at least one image is selected, then proceed to display the preview.
         */
        if (imageFilesLength > 0) {
            /**
             * Get the image path.
             */
            const imageSrc = URL.createObjectURL(imageFiles[0])
            /**
             * Select the image preview element.
             */
            const imagePreviewElement = document.querySelector("#preview-selected-image2")
            const imageBefore = document.querySelector("#gambarLama2")
            /**
             * Assign the path to the image preview element.
             */
            imagePreviewElement.src = imageSrc
            /**
             * Show the element by changing the display value to "block".
             */
            imagePreviewElement.style.display = "block"
            imageBefore.style.display = "none"
        }
    }

    const previewImage3 = (event) => {
        /**
         * Get the selected files.
         */
        const imageFiles = event.target.files
        /**
         * Count the number of files selected.
         */
        const imageFilesLength = imageFiles.length
        /**
         * If at least one image is selected, then proceed to display the preview.
         */
        if (imageFilesLength > 0) {
            /**
             * Get the image path.
             */
            const imageSrc = URL.createObjectURL(imageFiles[0])
            /**
             * Select the image preview element.
             */
            const imagePreviewElement = document.querySelector("#preview-selected-image3")
            const imageBefore = document.querySelector("#gambarLama3")
            /**
             * Assign the path to the image preview element.
             */
            imagePreviewElement.src = imageSrc
            /**
             * Show the element by changing the display value to "block".
             */
            imagePreviewElement.style.display = "block"
            imageBefore.style.display = "none"
        }
    }

    const previewImage4 = (event) => {
        /**
         * Get the selected files.
         */
        const imageFiles = event.target.files
        /**
         * Count the number of files selected.
         */
        const imageFilesLength = imageFiles.length
        /**
         * If at least one image is selected, then proceed to display the preview.
         */
        if (imageFilesLength > 0) {
            /**
             * Get the image path.
             */
            const imageSrc = URL.createObjectURL(imageFiles[0])
            /**
             * Select the image preview element.
             */
            const imagePreviewElement = document.querySelector("#preview-selected-image4")
            const imageBefore = document.querySelector("#gambarLama4")
            /**
             * Assign the path to the image preview element.
             */
            imagePreviewElement.src = imageSrc
            /**
             * Show the element by changing the display value to "block".
             */
            imagePreviewElement.style.display = "block"
            imageBefore.style.display = "none"
        }
    }

    const previewImage5 = (event) => {
        /**
         * Get the selected files.
         */
        const imageFiles = event.target.files
        /**
         * Count the number of files selected.
         */
        const imageFilesLength = imageFiles.length
        /**
         * If at least one image is selected, then proceed to display the preview.
         */
        if (imageFilesLength > 0) {
            /**
             * Get the image path.
             */
            const imageSrc = URL.createObjectURL(imageFiles[0])
            /**
             * Select the image preview element.
             */
            const imagePreviewElement = document.querySelector("#preview-selected-image5")
            const imageBefore = document.querySelector("#gambarLama5")
            /**
             * Assign the path to the image preview element.
             */
            imagePreviewElement.src = imageSrc
            /**
             * Show the element by changing the display value to "block".
             */
            imagePreviewElement.style.display = "block"
            imageBefore.style.display = "none"
        }
    }
</script>
</body>

</html>

<script>
    // function previewImage(event) {
    //     var input = event.target;
    //     var preview = document.getElementById('preview');

    //     var reader = new FileReader();
    //     reader.onload = function () {
    //         preview.src = reader.result;
    //     };
    //     reader.readAsDataURL(input.files[0]);
    // }
</script>