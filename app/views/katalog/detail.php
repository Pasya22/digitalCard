<?php
if (!$_SESSION["user_session"]) {
    header("Location:" . BASEURL . "auth/login");
}
$this->view('templates/navbar', $data);
?>
<main>
    <div class="container-detail-katalog">
        <div class="container-detail">
            <div class="primary-box">
                <div id="main-slider" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="<?= BASEURL ?>assets/img/banner/banner1.avif" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?= BASEURL ?>assets/img/banner/banner3.avif" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?= BASEURL ?>assets/img/banner/banner4.avif" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?= BASEURL ?>assets/img/banner/banner5.avif" />
                            </li>
                        </ul>
                    </div>
                </div>
                <ul id="thumbnails" class="thumbnails">
                    <li class="thumbnail">
                        <img src="<?= BASEURL ?>assets/img/banner/banner1.avif" />
                    </li>
                    <li class="thumbnail">
                        <img src="<?= BASEURL ?>assets/img/banner/banner3.avif" />
                    </li>
                    <li class="thumbnail">
                        <img src="<?= BASEURL ?>assets/img/banner/banner4.avif" />
                    </li>
                    <li class="thumbnail">
                        <img src="<?= BASEURL ?>assets/img/banner/banner5.avif" />
                    </li>
                </ul>
            </div>
            <div class="secondary-box content-box">
                <div class="title">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, placeat!</h2>
                </div>
                <div class="deskripsi">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam iure autem sunt distinctio aperiam accusantium voluptatem rerum voluptates atque eos numquam ex consequuntur praesentium harum, quia itaque fuga quod nisi animi laudantium doloremque incidunt quis ratione iste? Voluptate quo quidem, consequatur blanditiis consectetur, neque distinctio labore omnis autem molestiae aliquid nihil porro nesciunt quae ullam possimus maxime, rem ut ducimus! Eos aperiam ut repudiandae, delectus consequatur atque aspernatur corporis quisquam sunt iusto alias maiores excepturi qui neque impedit culpa consequuntur. Officiis sint enim cum nesciunt modi, voluptas placeat ab. Ea alias voluptas consectetur explicabo maiores, magnam quae. Quam, id eveniet!</p>
                </div>
                <div class="button">
                    <button>Click Me</button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
$this->view('templates/footer1', $data);
?>