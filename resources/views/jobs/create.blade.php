<!DOCTYPE html>
<html>
<head>
    <title>AIJobMatch - Create Job</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { color: #333; text-align: center; }
        form { display: flex; flex-direction: column; gap: 10px; }
        label { font-weight: bold; }
        input, textarea { padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        button { padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .back { text-align: center; margin-top: 20px; }
        .back a { padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px; }
        .back a:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <h1>Create New Job</h1>
    <form method="POST" action="{{ route('jobs.store') }}">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
        <label for="company">Company</label>
        <input type="text" name="company" id="company" required>
       

        <button type="submit">Create Job</button>
    </form>
    <div class="back">
        <a href="{{ route('jobs.index') }}">Back to Jobs</a>
    </div>
</body>
</html>
