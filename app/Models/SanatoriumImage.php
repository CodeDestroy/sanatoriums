<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class SanatoriumImage extends Model
{
    use HasFactory;

    protected $fillable = ['sanatorium_id', 'image_path'];

    public function sanatorium()
    {
        return $this->belongsTo(Sanatorium::class);
    }
}
