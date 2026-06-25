<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ArtikelModel;

class Post extends ResourceController
{
    use ResponseTrait;

    // ==========================
    // GET ALL DATA
    // ==========================
    public function index()
    {
        $model = new ArtikelModel();

        $data = [
            'artikel' => $model->orderBy('id', 'DESC')->findAll()
        ];

        return $this->respond($data);
    }

    // ==========================
    // GET SATU DATA
    // ==========================
    public function show($id = null)
    {
        $model = new ArtikelModel();

        $data = $model->find($id);

        if (!$data) {
            return $this->failNotFound('Data tidak ditemukan.');
        }

        return $this->respond($data);
    }

    // ==========================
    // TAMBAH DATA
    // ==========================
    public function create()
    {
        $model = new ArtikelModel();

        $data = [
            'judul'  => $this->request->getVar('judul'),
            'isi'    => $this->request->getVar('isi'),
            'status' => $this->request->getVar('status')
        ];

        $model->insert($data);

        return $this->respondCreated([
            'status' => 201,
            'messages' => [
                'success' => 'Data artikel berhasil ditambahkan.'
            ]
        ]);
    }

    // ==========================
    // UPDATE DATA
    // ==========================
    public function update($id = null)
    {
        $model = new ArtikelModel();

        if (!$model->find($id)) {
            return $this->failNotFound('Data tidak ditemukan.');
        }

        $data = [
            'judul'  => $this->request->getVar('judul'),
            'isi'    => $this->request->getVar('isi'),
            'status' => $this->request->getVar('status')
        ];

        $model->update($id, $data);

        return $this->respond([
            'status' => 200,
            'messages' => [
                'success' => 'Data artikel berhasil diubah.'
            ]
        ]);
    }

    // ==========================
    // HAPUS DATA
    // ==========================
    public function delete($id = null)
    {
        $model = new ArtikelModel();

        if (!$model->find($id)) {
            return $this->failNotFound('Data tidak ditemukan.');
        }

        $model->delete($id);

        return $this->respondDeleted([
            'status' => 200,
            'messages' => [
                'success' => 'Data artikel berhasil dihapus.'
            ]
        ]);
    }
}