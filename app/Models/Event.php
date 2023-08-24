<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','date', 'location', 'description', 'image'
    ];

    public function comment_posts()
    {
        return $this->hasMany(CommentPost::class);
    }

    public function event_users()
    {
        return $this->hasMany(Eventuser ::class);
    }

}
