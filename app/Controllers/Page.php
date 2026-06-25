<?php
namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        $data = [
            'title'   => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ];

        return view('about', $data);
    }

    public function contact()
    {
        $data = [
            'title'   => 'Halaman Contact',
            'content' => 'Ini halaman Contact'
        ];

        return view('about', $data); // bisa pakai view yang sama
    }

    public function faqs()
    {
        echo "Ini halaman FAQ";
    }

    public function tos()
    {
        echo "Ini halaman Term of Services";
    }
}