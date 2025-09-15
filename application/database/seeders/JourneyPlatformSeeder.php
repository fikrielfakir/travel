<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JourneyPlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            // Insert The Journey's three main event categories (idempotent)
            $categories = [
                ['slug' => 'sustainable-tourism', 'name' => 'Sustainable Tourism', 'status' => 1],
                ['slug' => 'culture', 'name' => 'Culture', 'status' => 1],
                ['slug' => 'entertainment', 'name' => 'Entertainment', 'status' => 1],
            ];

            foreach ($categories as $category) {
                DB::table('categories')->updateOrInsert(
                    ['slug' => $category['slug']],
                    array_merge($category, [
                        'created_at' => now(),
                        'updated_at' => now(),
                    ])
                );
            }

            // Insert initial general settings for The Journey (singleton)
            DB::table('general_settings')->updateOrInsert(
                ['id' => 1],
                [
                    'site_name' => 'The Journey',
                    'cur_text' => 'MAD',
                    'cur_sym' => 'DH',
                    'active_template' => 'default',
                    'force_ssl' => false,
                    'mail_config' => json_encode([]),
                    'sms_config' => json_encode([]),
                    'global_shortcodes' => json_encode([]),
                    'socialite_credentials' => json_encode([]),
                    'agency_socialite_credentials' => json_encode([]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );

        // Insert clubs for major Moroccan cities
        DB::table('clubs')->insert([
            [
                'name' => 'The Journey - Casablanca',
                'slug' => 'casablanca',
                'city' => 'Casablanca',
                'description' => 'Join our vibrant community in Morocco\'s economic capital for sustainable tourism, cultural events, and local entertainment.',
                'member_count' => 0,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Journey - Tangier',
                'slug' => 'tangier',
                'city' => 'Tangier',
                'description' => 'Explore the gateway between Africa and Europe with fellow travelers and locals passionate about authentic experiences.',
                'member_count' => 0,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Journey - Marrakech',
                'slug' => 'marrakech',
                'city' => 'Marrakech',
                'description' => 'Discover the heart of Morocco through sustainable tourism and cultural immersion in the Red City.',
                'member_count' => 0,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Journey - Rabat',
                'slug' => 'rabat',
                'city' => 'Rabat',
                'description' => 'Connect with like-minded individuals in Morocco\'s capital for meaningful cultural and educational experiences.',
                'member_count' => 0,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert community impact metrics
        DB::table('community_impact')->insert([
            [
                'metric_name' => 'participants',
                'display_name' => 'Participants',
                'count' => 1200,
                'icon' => 'fas fa-users',
                'description' => 'Community members who have joined our events and activities',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'metric_name' => 'trees_planted',
                'display_name' => 'Trees Planted',
                'count' => 500,
                'icon' => 'fas fa-tree',
                'description' => 'Trees planted through our sustainable tourism initiatives',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'metric_name' => 'cultural_collaborations',
                'display_name' => 'Cultural Collaborations',
                'count' => 50,
                'icon' => 'fas fa-handshake',
                'description' => 'Partnerships with local cultural organizations and artisans',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'metric_name' => 'community_projects',
                'display_name' => 'Community Projects',
                'count' => 10,
                'icon' => 'fas fa-hands-helping',
                'description' => 'Local community development projects we\'ve supported',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
