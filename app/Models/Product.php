<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table      = 'products';
    protected $primaryKey = 'id';
    protected $fillable
                          = ['title', 'price', 'gallery_image_id', 'feature_image_path', 'content', 'desc',
                             'product_tags', 'category_id', 'user_id'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(CategoryProduct::class);
    }

}
