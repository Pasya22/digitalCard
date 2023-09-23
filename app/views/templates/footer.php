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
    var button = document.querySelectorAll('.button-cat');
    var category = document.querySelectorAll('.contentCategory');

    category[0].style.display = 'flex ';
    button[0].classList.toggle('active');
    for (let i = 0; i < button.length; i++) {
        button[i].addEventListener('click', function() {
            for (let a = 0; a < button.length; a++) {
                category[a].style.display = 'none';
                button[a].classList.remove('active');
            }
            category[i].style.display = 'flex ';
            button[i].classList.toggle('active');
        })
    }
</script>
</body>

</html>