<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Siapkan data dinamis yang akan dikirim ke tampilan
    $data = [
        'hero_title' => 'Revolusi Pertanian Digital',
        'judul_halaman' => 'Sistem Informasi Petani Milenial',
        'deskripsi' => 'Platform cerdas untuk memantau cuaca, harga pasar, dan edukasi tanam bagi para petani muda masa kini.',
        'program_unggulan' => [
            'Pelatihan Hidroponik Skala Rumah Tangga',
            'Sistem Monitoring Suhu & Kelembaban Tanah',
            'Distribusi Hasil Panen ke Pasar Modern',
            'Pendanaan Bibit & Pupuk'
        ]
    ];

    // Kirim data ke file view 'home.blade.php'
    return view('home', $data);
});