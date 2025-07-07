<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class Hits extends Model
{
    use HasFactory;
    protected $table = 'hits';
    /* $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price_old', 10, 2)->nullable();
            $table->decimal('price_new', 10, 2)->nullable();
            $table->date('date_start')->nullable();
            $table->integer('days')->nullable()->default(1);
            $table->foreignId('sanatorium_id')->constrained('sanatoriums')->onDelete('cascade');
            $table->timestamps(); */
    protected $fillable = ['name', 'description', 'price_old', 'price_new', 'date_start', 'days', 'sanatorium_id'];



    public function images()
    {
        return $this->hasMany(HitsImage::class, 'hit_id');
    }
}
