<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'url',
        'content',
        // 'slug',
        'image',
        'type_id',
        'topic_id',
        'user_id',
    ];


    public function projectTopics()
    {
        return $this->belongsToMany(Topic::class);
    }



    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function topic()
    {
        return $this->belongsTo(Type::class, 'topic_id');
    }

    public function user()
    {
        return $this->belongsTo(USer::class, 'user_id');
    }
    
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
