<?php
if (!$_SESSION["user_session"]) {
    header("Location:" . BASEURL . "auth/login");
}

?>
<!-- <a href="<?= BASEURL ?>auth/Logout">Logout</a> -->

<!-- <?= Flasher::flash() ?> -->



<div class="container-admin">
    <?php
    $this->view('admin/templates/sidebar', $data);
    ?>
    <div id="contentAdmin" class="container-content-admin">
        <header>
            <?php
            $this->view('admin/templates/navbar', $data);
            ?>
        </header>
        <main>
            <div class="container-dashboard">
                <div class="container-katalog">
                    <div class="header">
                        <div class="title">
                            <h1>Data Semua Katalog</h1>
                        </div>
                        <div class="tambah">
                            <a href="<?= BASEURL ?>Admin/formAddKatalog">Tambah Katalog</a>
                        </div>
                    </div>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama Katalog</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Terjual</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        foreach ($data['katalog2'] as $item2) {


                        ?>

                        <?php } ?>
                        <?php
                        $i = 1;
                        foreach ($data['katalog'] as $item) {

                        ?>
                            <tr class="table-active">
                                <td><?= $i++; ?></td>
                                <td class="image-katalog"><img src="<?= BASEURL . 'assets/img/katalog/' . $item['nama_gambar'] ?>" alt="" style="width:50%; height:4pc; text-align:center;"></td>
                                <td><?= $item['nama_katalog'] ?></td>
                                <td><?= $item['harga'] ?></td>
                                <td><?= $item['stock'] ?></td>
                                <td><?= $item['sold'] ?></td>
                                <td>
                                    <a class="ubah" href="<?= BASEURL . 'Admin/formEditKatalog/' . $item['katalog_id'] ?>">Edit</a>
                                    <a class="hapus" href="<?= BASEURL . 'Admin/deleteKatalog/' . $item['katalog_id'] ?>">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </main>
        <footer></footer>
    </div>
</div>