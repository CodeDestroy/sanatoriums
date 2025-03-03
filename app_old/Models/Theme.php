<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
class Theme extends Model
{
    use AsSource;
    protected $fillable = [
        'name',
        'description',
        'course_id',
        'chapter_id',
        'calendar_visibility',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        /* 'score',
        'max_score',
        'passed' */
        
    ];

    /* public function course()
    {
        return $this->belongsTo(Course::class);
    } */

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function chapter()
    {
        return $this->belongsTo( Chapter::class);
    }
}
