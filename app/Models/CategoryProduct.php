<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug; // Import trait
use Spatie\Sluggable\SlugOptions; // Import class

class CategoryProduct extends Model
{
    use HasSlug; // Gunakan trait di sini
    protected $table = "category_products";

    protected $fillable = ['name_category','slug'];

    public function products()
    {
        return $this->hasMany(Product::class, 'id_category');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name_category')
            ->saveSlugsTo('slug');
    }
}
