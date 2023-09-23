<?php

class Katalog extends Controller
{
    public  function index()
    {
        $data['judul'] = 'Katalog';
        $data['kategori'] = $this->model('admin_model')->getALLKategori();
        $data['katalog'] = $this->model('admin_model')->getALLKatalog();
        $this->view('templates/header', $data);
        $this->view('katalog/katalog', $data);
        $this->view('templates/footer');
    }

    public  function detail($id = 5)
    {
        $data['judul'] = 'Detail Katalog';
        $data['kategori'] = $this->model('admin_model')->getALLKategori();
        $data['katalog'] = $this->model('admin_model')->getALLKatalogById($id);
        $this->view('templates/header', $data);
        $this->view('katalog/detail', $data);
        $this->view('templates/footer');
    }
}
