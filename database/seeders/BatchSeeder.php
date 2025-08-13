<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Batch;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batches = [
            ['year_start' => 2020, 'year_end' => 2021],
            ['year_start' => 2021, 'year_end' => 2022],
            ['year_start' => 2022, 'year_end' => 2023],
            ['year_start' => 2023, 'year_end' => 2024],
            ['year_start' => 2024, 'year_end' => 2025],
        ];

        DB::table('batches')->truncate();

        foreach ($batches as $batch) {
            Batch::create($batch);
        }
    }
}
