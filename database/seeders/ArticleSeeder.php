<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['tag' => 'Keamanan Siber', 'title' => 'Cara Melindungi Data Bisnis dari Serangan Ransomware', 'published_at' => '2026-09-12'],
            ['tag' => 'Manajemen SDM', 'title' => 'Strategi Talent Management di Era Kerja Hybrid', 'published_at' => '2026-09-09'],
            ['tag' => 'Kepatuhan', 'title' => 'Panduan Singkat Sertifikasi ISO untuk Perusahaan Manufaktur', 'published_at' => '2026-09-05'],
        ];

        foreach ($items as $item) {
            Article::create($item + [
                'slug' => Str::slug($item['title']).'-'.Str::random(5),
                'is_published' => true,
            ]);
        }
    }
}
