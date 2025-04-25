<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Job;
class JobSeeder extends Seeder
{
    public function run(): void
    {
        Job::create([
            'title' => 'Senior Laravel Developer',
            'description' => 'Build scalable web applications with Laravel.',
            'company' => 'TechCorp',
            'user_id' => 1, // Dummy user ID
        ]);
        Job::create([
            'title' => 'Frontend Engineer',
            'description' => 'Design responsive UIs with Vue.js.',
            'company' => 'WebWorks',
            'user_id' => 1,
        ]);
        Job::create([
            'title' => 'DevOps Engineer',
            'description' => 'Manage CI/CD pipelines and cloud infrastructure.',
            'company' => 'CloudNet',
            'user_id' => 1,
        ]);
    }
}