<?php

namespace Database\Seeders;

use App\Models\Camera;
use Illuminate\Database\Seeder;

class CameraSeeder extends Seeder
{
    public function run(): void
    {
        $cameras = [
            ['brand' => 'Canon', 'model' => 'EOS R6 Mark II', 'rent_price' => 350000, 'image' => 'canon-r6.svg', 'description' => 'Kamera mirrorless full-frame untuk foto acara, portrait, dan video. Autofokus cepat membantu menangkap momen bergerak.', 'type' => 'Mirrorless'],
            ['brand' => 'Sony', 'model' => 'Alpha A7 III', 'rent_price' => 300000, 'image' => 'sony-a7.svg', 'description' => 'Kamera full-frame serbaguna dengan performa baik untuk pemotretan low-light dan produksi video.', 'type' => 'Mirrorless'],
            ['brand' => 'Fujifilm', 'model' => 'X-T5', 'rent_price' => 275000, 'image' => 'fuji-xt5.svg', 'description' => 'Kamera APS-C bergaya klasik dengan resolusi tinggi, cocok untuk perjalanan dan street photography.', 'type' => 'Mirrorless'],
            ['brand' => 'Nikon', 'model' => 'D850', 'rent_price' => 325000, 'image' => 'nikon-d850.svg', 'description' => 'DSLR resolusi tinggi untuk kebutuhan studio, landscape, dan dokumentasi acara.', 'type' => 'DSLR'],
            ['brand' => 'Canon', 'model' => 'EOS 90D', 'rent_price' => 200000, 'image' => 'canon-90d.svg', 'description' => 'DSLR serbaguna dengan layar sentuh putar, nyaman untuk foto maupun pembuatan konten.', 'type' => 'DSLR'],
            ['brand' => 'GoPro', 'model' => 'HERO12 Black', 'rent_price' => 150000, 'image' => 'gopro-hero12.svg', 'description' => 'Action camera ringkas yang tahan untuk aktivitas luar ruang dan merekam sudut pandang orang pertama.', 'type' => 'Action Camera'],
            ['brand' => 'Panasonic', 'model' => 'Lumix S5 II', 'rent_price' => 325000, 'image' => 'panasonic-s5ii.svg', 'description' => 'Kamera full-frame hybrid dengan stabilisasi gambar, cocok untuk foto perjalanan dan produksi video.', 'type' => 'Mirrorless'],
            ['brand' => 'Nikon', 'model' => 'Z6 III', 'rent_price' => 375000, 'image' => 'nikon-z6iii.svg', 'description' => 'Mirrorless full-frame untuk menangkap aksi, portrait, dan video dengan respons cepat.', 'type' => 'Mirrorless'],
            ['brand' => 'DJI', 'model' => 'Osmo Action 4', 'rent_price' => 175000, 'image' => 'dji-action4.svg', 'description' => 'Action camera ringkas dengan bodi tangguh untuk merekam kegiatan luar ruang dan olahraga.', 'type' => 'Action Camera'],
            ['brand' => 'Blackmagic', 'model' => 'Pocket Cinema Camera 6K', 'rent_price' => 400000, 'image' => 'blackmagic-6k.svg', 'description' => 'Kamera sinema digital untuk produksi film pendek, iklan, dan proyek video kreatif.', 'type' => 'Cinema Camera'],
            ['brand' => 'Canon', 'model' => 'EOS R5 Mark II', 'rent_price' => 450000, 'image' => 'canon-r5ii.svg', 'description' => 'Mirrorless full-frame resolusi tinggi untuk foto detail dan produksi video profesional.', 'type' => 'Mirrorless'],
            ['brand' => 'Sony', 'model' => 'FX3 Cinema Line', 'rent_price' => 500000, 'image' => 'sony-fx3.svg', 'description' => 'Kamera sinema ringkas untuk produksi video, dokumenter, dan film pendek.', 'type' => 'Cinema Camera'],
            ['brand' => 'Panasonic', 'model' => 'Lumix GH7', 'rent_price' => 375000, 'image' => 'panasonic-gh7.svg', 'description' => 'Kamera hybrid Micro Four Thirds untuk produksi video dan pembuatan konten.', 'type' => 'Cinema Camera'],
            ['brand' => 'Nikon', 'model' => 'Z8', 'rent_price' => 425000, 'image' => 'nikon-z8.svg', 'description' => 'Mirrorless full-frame untuk fotografi resolusi tinggi dan perekaman video.', 'type' => 'Mirrorless'],
            ['brand' => 'Fujifilm', 'model' => 'X-S20', 'rent_price' => 225000, 'image' => 'fuji-xs20.svg', 'description' => 'Kamera mirrorless APS-C yang ringkas untuk perjalanan, portrait, dan konten harian.', 'type' => 'Mirrorless'],
            ['brand' => 'OM System', 'model' => 'OM-1 Mark II', 'rent_price' => 300000, 'image' => 'om-1ii.svg', 'description' => 'Kamera mirrorless tangguh untuk fotografi alam dan kegiatan luar ruang.', 'type' => 'Mirrorless'],
            ['brand' => 'DJI', 'model' => 'Osmo Pocket 3', 'rent_price' => 150000, 'image' => 'dji-pocket3.svg', 'description' => 'Kamera saku dengan gimbal terintegrasi untuk vlog dan video perjalanan yang stabil.', 'type' => 'Action Camera'],
            ['brand' => 'Insta360', 'model' => 'X4', 'rent_price' => 225000, 'image' => 'insta360-x4.svg', 'description' => 'Kamera 360 derajat untuk merekam pengalaman dan sudut pandang yang menyeluruh.', 'type' => '360 Camera'],
            ['brand' => 'Canon', 'model' => 'XA75', 'rent_price' => 350000, 'image' => 'canon-xa75.svg', 'description' => 'Camcorder untuk dokumentasi acara, wawancara, dan rekaman video berdurasi panjang.', 'type' => 'Camcorder'],
            ['brand' => 'Blackmagic', 'model' => 'URSA Mini Pro 12K', 'rent_price' => 900000, 'image' => 'blackmagic-ursa12k.svg', 'description' => 'Kamera sinema untuk kebutuhan produksi film dan proyek video berskala besar.', 'type' => 'Cinema Camera'],
        ];

        foreach ($cameras as $camera) {
            Camera::updateOrCreate(
                ['brand' => $camera['brand'], 'model' => $camera['model']],
                $camera,
            );
        }
    }
}

