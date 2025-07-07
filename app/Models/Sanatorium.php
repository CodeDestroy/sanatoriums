<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class Sanatorium extends Model
{
    use HasFactory;
    protected $table = 'sanatoriums';
    protected $fillable = ['name', 'description', 'price', 'rating', 'region', 'address'];

    public function descriptionBlocks()
    {
        return $this->hasMany(SanatoriumDescriptionBlock::class);
    }

    public function images()
    {
        return $this->hasMany(SanatoriumImage::class);
    }
}
