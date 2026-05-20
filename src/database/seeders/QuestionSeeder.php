<?php

namespace Database\Seeders;

use App\Models\Quizz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quizz::factory()->create([
            'title' => 'Which of these color contrast ratios defines the minimum WCAG 2.1 Level AA requirement for normal text?',
            'logo_url' => '/public/assets/icons/html.svg',
            'order' => '1',
            'correctId_answer' => '2',
            'quiiz_id' => '1'
        ]);
    }
}
