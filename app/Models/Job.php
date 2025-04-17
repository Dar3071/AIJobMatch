<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Job extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'title', 'company', 'description'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'job_skills');
    }
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}