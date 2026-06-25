<?php

namespace App\Cells;

use App\Models\ArtikelModel;

class ArtikelTerbaru
{
    public function render()
    {
        $model = new ArtikelModel();
        $artikel = $model->orderBy('id', 'DESC')->findAll(5);

        return view('components/artikel_terbaru', ['artikel' => $artikel]);
    }
}