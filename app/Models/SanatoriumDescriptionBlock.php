<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class SanatoriumDescriptionBlock extends Model
{
     use HasFactory;

    protected $fillable = ['sanatorium_id', 'title', 'content'];

    public function sanatorium()
    {
        return $this->belongsTo(Sanatorium::class);
    }
}
