<!DOCTYPE html>
<html>
<head>
    <title>AIJobMatch - Job Listings</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { color: #333; text-align: center; }
        .job { border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 4px; }
        .job h3 { margin: 0 0 10px; color: #007bff; }
        .job p { margin: 5px 0; }
        .actions { margin-top: 10px; }
        .actions a, .actions form { display: inline-block; margin-right: 10px; }
        .actions a { padding: 8px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px; }
        .actions a:hover { background-color: #0056b3; }
        .actions button { padding: 8px 15px; background-color: #dc3545; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .actions button:hover { background-color: #c82333; }
        .create { text-align: center; margin-bottom: 20px; }
        .create a { padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px; }
        .create a:hover { background-color: #0056b3; }
        .back { text-align: center; margin-top: 20px; }
        .back a { padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px; }
        .back a:hover { background-color: #0056b3; }
        .success { color: green; text-align: center; }
    </style>
</head>
<body>
    <h1>Deon's Job Listings</h1>
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif
    <div class="create" style="display: inline-block; font-size: 12px; padding: 4px 8px;">
    <a href="{{ route('jobs.create') }}">Create New Job</a>
</div>

    @forelse ($jobs as $job)
        <div class="job">
            <h3>{{ $job->title }}</h3>
            <p><strong>Company:</strong> {{ $job->company }}</p>
        
            <p>{{ $job->description }}</p>
            <div class="actions">
                <a href="{{ route('jobs.edit', $job) }}">Edit</a>
                <form method="POST" action="{{ route('jobs.destroy', $job) }}" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    @empty
        <p>No jobs available.</p>
    @endforelse
    <div class="back">
        <a href="{{ route('home') }}">Back to Home</a>
    </div>
</body>
</html>