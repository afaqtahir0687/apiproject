<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jobs;
use App\Models\Comments;

class Post extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->belongsTo(Jobs::class, 'job_id');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
