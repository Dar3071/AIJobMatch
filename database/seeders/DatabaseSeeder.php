<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Skill;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'role' => 'job_seeker',
            'name' => 'Test Seeker',
            'email' => 'seeker@test.com',
            'password' => bcrypt('password')
        ]);
        User::create([
            'role' => 'employer',
            'name' => 'Test Employer',
            'email' => 'employer@test.com',
            'password' => bcrypt('password')
        ]);
        Skill::create(['name' => 'Python']);
        Skill::create(['name' => 'PHP']);
    }
}