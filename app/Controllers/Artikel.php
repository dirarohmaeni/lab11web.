<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;

class Artikel extends BaseController
{
    public function index()
    {
        $title = 'Daftar Artikel';

        $model = new ArtikelModel();
        $artikel = $model->getArtikelDenganKategori();

        return view('artikel/index', compact('artikel', 'title'));
    }

    public function view($slug)
    {
        $model = new ArtikelModel();

        $artikel = $model->where([
            'slug' => $slug
        ])->first();

        if (!$artikel) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $title = $artikel['judul'];

        return view('artikel/detail', compact('artikel', 'title'));
    }

    public function admin_index()
    {
        $title = 'Daftar Artikel (Admin)';

        $model = new ArtikelModel();
        $kategoriModel = new KategoriModel();

        $q = $this->request->getGet('q');
        $kategori_id = $this->request->getGet('kategori_id');

        $model->select('artikel.*, kategori.nama_kategori')
              ->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left');

        if (!empty($q)) {
            $model->like('artikel.judul', $q);
        }

        if (!empty($kategori_id)) {
            $model->where('artikel.id_kategori', $kategori_id);
        }

        $data = [
            'title'       => $title,
            'artikel'     => $model->paginate(5, 'artikel'),
            'pager'       => $model->pager,
            'q'           => $q,
            'kategori_id' => $kategori_id,
            'kategori'    => $kategoriModel->findAll()
        ];

        return view('artikel/admin_ajax', $data);
    }

    public function add()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'judul'        => 'required',
            'id_kategori'  => 'required',
        ]);

        $kategoriModel = new KategoriModel();

        if ($validation->withRequest($this->request)->run()) {

            $artikel = new ArtikelModel();

            $file = $this->request->getFile('gambar');
            $namaGambar = '';

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $namaGambar = $file->getRandomName();
                $file->move(ROOTPATH . 'public/gambar', $namaGambar);
            }

            $artikel->save([
                'judul'       => $this->request->getPost('judul'),
                'isi'         => $this->request->getPost('isi'),
                'slug'        => url_title($this->request->getPost('judul'), '-', true),
                'status'      => 0,
                'gambar'      => $namaGambar,
                'id_kategori' => $this->request->getPost('id_kategori'),
            ]);

            return redirect()->to(base_url('admin/artikel'));
        }

        $data = [
            'title'    => 'Tambah Artikel',
            'kategori' => $kategoriModel->findAll(),
        ];

        return view('artikel/form_add', $data);
    }

    public function edit($id)
    {
        $artikel = new ArtikelModel();
        $data = $artikel->find($id);

        if (!$data) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $validation = \Config\Services::validation();

        $validation->setRules([
            'judul' => 'required'
        ]);

        if ($validation->withRequest($this->request)->run()) {

            $dataUpdate = [
                'judul' => $this->request->getPost('judul'),
                'isi'   => $this->request->getPost('isi'),
                'slug'  => url_title($this->request->getPost('judul'), '-', true),
            ];

            $file = $this->request->getFile('gambar');

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $namaGambar = $file->getRandomName();
                $file->move(ROOTPATH . 'public/gambar', $namaGambar);
                $dataUpdate['gambar'] = $namaGambar;
            }

            $artikel->update($id, $dataUpdate);

            return redirect()->to(base_url('admin/artikel'));
        }

        return view('artikel/form_edit', [
            'artikel' => $data,
            'title'   => 'Edit Artikel'
        ]);
    }
}