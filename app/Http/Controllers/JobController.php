<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Job;
use Database\Seeders\JobSeeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        if ($jobs->isEmpty()) {
            try {
                // Clear job_skills to avoid foreign key conflicts
                DB::table('job_skills')->delete();
                \Artisan::call('db:seed', ['--class' => JobSeeder::class]);
                Log::info('JobSeeder executed successfully.');
                $jobs = Job::all(); // Refresh after seeding
            } catch (\Exception $e) {
                Log::error('JobSeeder failed: ' . $e->getMessage());
                // Fallback: return empty jobs
            }
        }
        return view('jobs.index', compact('jobs'));
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'company' => 'required|string|max:255',
        ]);
        $validated['user_id'] = 1; // Dummy user ID
        Job::create($validated);
        return redirect()->route('jobs.index')->with('success', 'Job created successfully.');
    }
    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }
    public function update(Request $request, Job $job)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'company' => 'required|string|max:255',
        ]);
        $validated['user_id'] = $job->user_id; // Retain existing user_id
        $job->update($validated);
        return redirect()->route('jobs.index')->with('success', 'Job updated successfully.');
    }
    public function destroy(Job $job)
    {
        // Clear related job_skills before deleting job
        DB::table('job_skills')->where('job_id', $job->id)->delete();
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully.');
    }
}