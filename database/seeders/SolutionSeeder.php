<?php

namespace Database\Seeders;

use App\Models\Solution;
use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['label' => 'Human Capital', 'title' => 'Human Capital Management', 'description' => 'Kelola data karyawan, absensi, payroll, dan penilaian kinerja dalam satu sistem terintegrasi — kurangi pekerjaan administratif tim HR Anda.', 'cta_text' => 'Pelajari Human Capital'],
            ['label' => 'CRM & Pelanggan', 'title' => 'CRM & Customer Experience', 'description' => 'Pantau perjalanan pelanggan dari prospek hingga after-sales, respon cepat lewat satu dashboard, dan tingkatkan loyalitas pelanggan Anda.', 'cta_text' => 'Pelajari CRM & CX'],
            ['label' => 'Infrastruktur IT', 'title' => 'Infrastruktur & Kolaborasi Tim', 'description' => 'Upgrade sistem IT dan alat kolaborasi tim Anda agar kerja lebih efisien, aman, dan bisa diakses dari mana saja.', 'cta_text' => 'Pelajari Infrastruktur IT'],
            ['label' => 'Keamanan IT', 'title' => 'IT Security', 'description' => 'Lindungi data dan sistem bisnis Anda dari ancaman siber dengan proteksi berlapis dan backup yang andal.', 'cta_text' => 'Pelajari IT Security'],
            ['label' => 'ERP & BI', 'title' => 'ERP & Business Intelligence', 'description' => 'Satukan proses keuangan, operasional, dan pengambilan keputusan lewat data real-time yang mudah dipahami.', 'cta_text' => 'Pelajari ERP & BI'],
        ];

        foreach ($items as $i => $item) {
            Solution::create($item + ['sort_order' => $i]);
        }
    }
}
