<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Vebinar extends Model
{
    use HasFactory;
    use AsSource;

    protected $fillable = ['room_name', 'start_date_time', 'event_id'];

    public function userTokens()
    {
        return $this->hasMany(UserVebinarToken::class);
    }
    public function events()
    {
        return $this->belongsTo(Event::class);
    }
}

