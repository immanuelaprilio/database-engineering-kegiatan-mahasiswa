<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $admin = 'Immanuel Aprilio';

        $mahasiswa = [
            [
                'nama' => 'Andi Saputra',
                'nim' => '22101101',
                'prodi' => 'Informatika',
                'status' => 'Aktif'
            ],
            [
                'nama' => 'Budi Santoso',
                'nim' => '22101102',
                'prodi' => 'Sistem Informasi',
                'status' => 'Cuti'
            ],
            [
                'nama' => 'Citra Dewi',
                'nim' => '22101103',
                'prodi' => 'Informatika',
                'status' => 'Nonaktif'
            ]
        ];

        return view('dashboard', [
            'admin' => $admin,
            'mahasiswa' => $mahasiswa,
            'totalMahasiswa' => count($mahasiswa),
            'mahasiswaAktif' => 1,
            'mahasiswaCuti' => 1,
            'mahasiswaNonaktif' => 1
        ]);
    }
}
