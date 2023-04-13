<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Entry;
use App\Models\Education;
use App\Models\Topic;
// use App\Models\WorkExperience;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Type::truncate();
        Project::truncate();
        Entry::truncate();
        Education::truncate();
        Topic::truncate();
        // WorkExperience::truncate();
        
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Topic::factory()->count(4)->create();
        Project::factory()->count(4)->create();
        Entry::factory()->count(4)->create();
        Education::factory()->count(4)->create();
        // WorkExperience::factory()->count(3)->create();
    }
}
