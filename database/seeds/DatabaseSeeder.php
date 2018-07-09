<?php

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
        $this->call(ExperienceSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(WorkSeeder::class);
    }
}
