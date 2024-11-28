<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'description', 'main_image', 'gallery_images'];

    protected $casts = [
        'gallery_images' => 'array', // Gallery images disimpan sebagai array JSON
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function specifications()
    {
        return $this->hasMany(Specification::class);
    }
}
