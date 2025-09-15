<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed testimonials for The Journey platform
        \DB::table('reviews')->insert([
            [
                'user_id' => null,
                'name' => 'Fatima Z.',
                'title' => 'Student',
                'review_text' => 'The Journey has completely transformed my understanding of Moroccan culture. Through their sustainable tourism workshops, I\'ve learned so much about preserving our heritage while creating meaningful experiences for visitors. The community here feels like family!',
                'rating' => 5,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => null,
                'name' => 'Youssef A.',
                'title' => 'Professional',
                'review_text' => 'As a working professional, I appreciate how The Journey connects like-minded people who care about making a positive impact. The cultural collaborations I\'ve been part of through this platform have enriched both my personal and professional life.',
                'rating' => 5,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => null,
                'name' => 'Amina K.',
                'title' => 'Local Artisan',
                'review_text' => 'Thanks to The Journey, I\'ve been able to share my traditional crafts with students and tourists who truly appreciate our culture. It\'s not just tourism - it\'s cultural exchange at its finest.',
                'rating' => 5,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => null,
                'name' => 'Omar B.',
                'title' => 'University Student',
                'review_text' => 'Being part of the Casablanca Sustainable Living club through The Journey opened my eyes to how we can protect our environment while building community. The tree planting events are my favorite!',
                'rating' => 5,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
