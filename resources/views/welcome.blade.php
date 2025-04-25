<!DOCTYPE html>
<html>
<head>
    <title>AIJobMatch DAR</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; text-align: center; }
        h1 { color: #333; }
        .links { margin-top: 20px; }
        .links a { display: inline-block; margin: 10px; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px; }
        .links a:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <h1>Welcome to Deon's AIJobMatch App</h1>
    <p>Find your dream job or post opportunities with ease.</p>
    <div class="links">
        <a href="{{ route('jobs.index') }}">Browse Jobs</a>
        <a href="#" onclick="alert('Profiles page coming soon!')">View Profiles</a>
        <a href="#" onclick="alert('More features in development!')">Other Features</a>
    </div>
</body>
</html>