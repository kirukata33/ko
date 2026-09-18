<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['name' => 'Dian Pratama', 'role' => 'Direktur Operasional, Nexora', 'quote' => 'Sejak menggunakan solusi dari KONSIT, proses operasional kami jadi jauh lebih rapi. Tim tidak lagi kewalahan menangani permintaan yang terus bertambah.'],
            ['name' => 'Rina Wulandari', 'role' => 'Head of IT, Vantar Group', 'quote' => 'Implementasinya cepat dan tim KONSIT selalu responsif menjawab kebutuhan kami. Dashboard yang mereka bangun benar-benar membantu pengambilan keputusan harian.'],
            ['name' => 'Ahmad Fauzi', 'role' => 'CEO, Brightlane', 'quote' => 'Yang saya suka dari KONSIT adalah pendekatannya yang disesuaikan kebutuhan kami, bukan solusi template. Hasilnya jauh lebih pas dengan proses bisnis kami.'],
        ];

        foreach ($items as $i => $item) {
            Testimonial::create($item + ['sort_order' => $i]);
        }
    }
}
