<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TheJourneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed Categories for The Journey platform
        \DB::table('categories')->insert([
            ['name' => 'Sustainable Tourism', 'slug' => 'sustainable-tourism', 'status' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Culture', 'slug' => 'culture', 'status' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Entertainment', 'slug' => 'entertainment', 'status' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Seed Clubs for Moroccan cities
        \DB::table('clubs')->insert([
            [
                'name' => 'Tanger Cultural Explorer', 
                'slug' => 'tanger-cultural-explorer', 
                'city' => 'Tanger',
                'description' => 'A community of cultural enthusiasts exploring the rich heritage of Tangier through guided tours, workshops, and cultural exchanges.',
                'member_count' => 45,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Casablanca Sustainable Living', 
                'slug' => 'casablanca-sustainable-living', 
                'city' => 'Casablanca',
                'description' => 'Promoting eco-friendly practices and sustainable tourism in Casablanca. Join us for clean-up initiatives, tree planting, and green workshops.',
                'member_count' => 67,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Marrakech Arts & Crafts', 
                'slug' => 'marrakech-arts-crafts', 
                'city' => 'Marrakech',
                'description' => 'Connecting local artisans with visitors and students to preserve traditional Moroccan crafts and support local communities.',
                'member_count' => 52,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rabat Professional Network', 
                'slug' => 'rabat-professional-network', 
                'city' => 'Rabat',
                'description' => 'A networking hub for professionals and students interested in cultural tourism, sustainable development, and community impact projects.',
                'member_count' => 38,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Seed Community Impact Metrics
        \DB::table('community_impact')->insert([
            ['metric_name' => 'participants', 'display_name' => 'Participants', 'count' => 1200, 'icon' => 'fas fa-users', 'description' => 'Total number of people who have joined our community experiences', 'status' => true, 'created_at' => now(), 'updated_at' => now()],
            ['metric_name' => 'trees_planted', 'display_name' => 'Trees Planted', 'count' => 500, 'icon' => 'fas fa-tree', 'description' => 'Trees planted through our sustainable tourism and environmental initiatives', 'status' => true, 'created_at' => now(), 'updated_at' => now()],
            ['metric_name' => 'cultural_collaborations', 'display_name' => 'Cultural Collaborations', 'count' => 50, 'icon' => 'fas fa-handshake', 'description' => 'Partnerships with local artisans, cultural centers, and community organizations', 'status' => true, 'created_at' => now(), 'updated_at' => now()],
            ['metric_name' => 'community_projects', 'display_name' => 'Community Projects', 'count' => 10, 'icon' => 'fas fa-project-diagram', 'description' => 'Ongoing and completed projects that benefit local communities', 'status' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Update General Settings for The Journey branding
        \DB::table('general_settings')->updateOrInsert(
            ['id' => 1],
            [
                'site_name' => 'The Journey',
                'cur_text' => 'MAD',
                'cur_sym' => 'DH',
                'active_template' => 'default',
                'force_ssl' => true,
                'mail_config' => '{}',
                'sms_config' => '{}',
                'global_shortcodes' => '{}',
                'socialite_credentials' => '{}',
                'agency_socialite_credentials' => '{}',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
