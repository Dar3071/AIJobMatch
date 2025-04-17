<!DOCTYPE html>
<html>
<head>
    <title>Job Listings - AIJobMatch</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { color: #333; }
        .job { border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; border-radius: 5px; }
        .job h3 { margin: 0 0 10px; }
        .job p { margin: 5px 0; }
    </style>
</head>
<body>
    <h1>Job Listings</h1>
    @if ($jobs->isEmpty())
        <p>No jobs available.</p>
    @else
        @foreach ($jobs as $job)
            <div class="job">
                <h3>{{ $job->title }}</h3>
                <p><strong>Company:</strong> {{ $job->company }}</p>
                <p><strong>Description:</strong> {{ $job->description }}</p>
                <p><strong>Skills:</strong> {{ $job->skills->pluck('name')->join(', ') }}</p>
            </div>
        @endforeach
    @endif
</body>
</html>