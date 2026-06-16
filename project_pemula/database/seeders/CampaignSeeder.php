<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::create([
            'title' => 'Bantu Korban banjir',
            'description' => 'donasi untuk korban banjir',
            'target_donation' => 10000000,
            'collected_donation' => 5000000,
            'deadline' => '2026-12-31',
        ]);

        Campaign::create([
            'title' => 'Bantu Korban gempa',
            'description' => 'donasi untuk korban gempa',
            'target_donation' => 10000000,
            'collected_donation' => 5000000,
            'deadline' => '2026-12-31',
        ]);

        Campaign::create([
            'title' => 'Bantu Korban jiwah',
            'description' => 'donasi untuk korban jiwah',
            'target_donation' => 10000000,
            'collected_donation' => 5000000,
            'deadline' => '2026-12-31',
        ]);
    }
}
