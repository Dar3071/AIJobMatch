<?php
use App\Models\User;
$users = User::all();
?>
<h1>Users</h1>
<p>Users count: {{ $users->count() }}</p>
<ul>
@foreach ($users as $user)
    <li>{{ $user->email }} ({{ $user->role }})</li>
@endforeach
</ul>