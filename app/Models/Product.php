<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug; // Import trait
use Spatie\Sluggable\SlugOptions; // Import class

class Product extends Model implements HasMedia
{
    use InteractsWithMedia, HasSlug;
    protected $table = 'products';

    protected $fillable = [
        'id_category',
        'name_product',
        'description',
        'price',
        'stock',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(CategoryProduct::class, 'id_category');
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('product_images');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name_product')
            ->saveSlugsTo('slug');
    }
}
