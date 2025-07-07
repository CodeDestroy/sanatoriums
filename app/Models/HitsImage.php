<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class HitsImage extends Model
{
    use HasFactory;

    protected $fillable = ['hit_id', 'image_path'];

    public function hit()
    {
        return $this->belongsTo(Hits::class);
    }
}
