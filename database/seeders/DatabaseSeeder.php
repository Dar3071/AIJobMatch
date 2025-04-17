<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Skill;
use App\Models\Profile;
use App\Models\Job;
use App\Models\Application;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Users
        $seeker = User::firstOrCreate(
            ['email' => 'seeker@test.com'],
            [
                'role' => 'job_seeker',
                'name' => 'Test Seeker',
                'password' => bcrypt('password'),
            ]
        );
        $employer = User::firstOrCreate(
            ['email' => 'employer@test.com'],
            [
                'role' => 'employer',
                'name' => 'Test Employer',
                'password' => bcrypt('password'),
            ]
        );
        // Skills
        $python = Skill::firstOrCreate(['name' => 'Python']);
        $php = Skill::firstOrCreate(['name' => 'PHP']);
        // Profile
        $profile = Profile::firstOrCreate(
            ['user_id' => $seeker->id],
            [
                'bio' => 'Experienced developer with AI skills',
                'resume' => 'resume.pdf',
            ]
        );
        $profile->skills()->sync([$python->id, $php->id]);
        // Job
        $job = Job::firstOrCreate(
            [
                'user_id' => $employer->id,
                'title' => 'PHP Developer',
            ],
            [
                'company' => 'Tech Corp',
                'description' => 'Build web applications with Laravel',
            ]
        );
        $job->skills()->sync([$php->id]);
        // Application
        Application::firstOrCreate(
            [
                'user_id' => $seeker->id,
                'job_id' => $job->id,
            ],
            [
                'status' => 'pending',
            ]
        );
    }
}