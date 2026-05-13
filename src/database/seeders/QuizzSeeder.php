<?php

namespace Database\Seeders;

use App\Models\Quizz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quizz::factory()->create([
            'title' => 'HTML',
            'logo_url' => '/public/assets/icons/html.svg'
        ]);

        Quizz::factory()->create([
            'title' => 'CSS',
            'logo_url' => '/public/assets/icons/css.svg'
        ]);

        Quizz::factory()->create([
            'title' => 'JavaScript',
            'logo_url' => '/public/assets/icons/js.svg'
        ]);

        Quizz::factory()->create([
            'title' => 'Accessibility',
            'logo_url' => '/public/assets/icons/accessibility.svg'
        ]);
    }
}
