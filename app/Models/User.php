<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['role', 'name', 'email', 'password'];
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}