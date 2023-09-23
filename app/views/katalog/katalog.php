<?php
if (!$_SESSION["user_session"]) {
    header("Location:" . BASEURL . "auth/login");
}
$this->view('templates/navbar', $data);
?>
<main>
    <div class="container-katalog">
        <div class="container-produk-katalog">
            <div class="header">
                <div class="title title-home">
                    <h2>Produk Per Kategori</h2>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-gem"></i>
                    <span class="border"></span>
                </div>
            </div>
            <div class="button-box">
                <ul>
                    <?php foreach ($data['kategori'] as $kategori) : ?>
                        <li>
                            <button class="button-cat"><?= $kategori['nama_kategori'] ?></button>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="content-box">
                <?php foreach ($data['kategori'] as $kategori) : ?>
                    <?php $data['katalogId'] = $this->model('admin_model')->getALLKatalogKategoriById($kategori['id_kategori']); ?>
                    <div class="contentCategory" id="content">
                        <?php foreach ($data['katalogId'] as $katalog) : ?>
                            <div class="product-1">
                                <figure>
                                    <img src="<?= BASEURL ?>assets/img/katalog/<?= $katalog['nama_gambar'] ?>" alt=''>
                                </figure>
                                <div class="deskripsi">
                                    <h5><?= $katalog['nama_katalog'] ?></h5>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</main>
<?php
$this->view('templates/footer1', $data);
?>