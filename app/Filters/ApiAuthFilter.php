<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\Http\RequestInterface;
use CodeIgniter\Http\ResponseInterface;
use Config\Services;

class ApiAuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Ambil Authorization Header
        $authHeader = $request->getServer('HTTP_AUTHORIZATION');

        if (!$authHeader) {
            $response = Services::response();
            $response->setStatusCode(401);

            return $response->setJSON([
                'status'   => 401,
                'error'    => 401,
                'messages' => 'Akses Ditolak. Token tidak ditemukan pada request!'
            ]);
        }

        // Ambil token setelah kata Bearer
        $token = null;

        if (preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            $token = $matches[1];
        }

        // Validasi token sederhana
        if (!$token || empty($token)) {
            $response = Services::response();
            $response->setStatusCode(401);

            return $response->setJSON([
                'status'   => 401,
                'error'    => 401,
                'messages' => 'Sesi Token tidak valid atau kedaluwarsa!'
            ]);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak digunakan
    }
}