<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Major;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Major::create([
            'name' => 'Computer Science',
            'duration' => 4,
            'description' => 'A comprehensive study of algorithms, data structures, and software engineering.',
            'status' => true,
        ]);

        Major::create([
            'name' => 'Mechanical Engineering',
            'duration' => 4,
            'description' => 'Focuses on the design, analysis, and manufacturing of mechanical systems.',
            'status' => true,
        ]);

        Major::create([
            'name' => 'Business Administration',
            'duration' => 3,
            'description' => 'Covers the fundamentals of management, finance, and marketing.',
            'status' => true,
        ]);

        Major::create([
            'name' => 'Physics',
            'duration' => 3,
            'description' => 'The study of matter, energy, and the fundamental forces of nature.',
            'status' => true,
        ]);

        Major::create([
            'name' => 'Architecture',
            'duration' => 5,
            'description' => 'Design and planning of buildings and structures.',
            'status' => true,
        ]);
    }
}
