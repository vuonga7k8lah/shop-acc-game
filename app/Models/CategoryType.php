<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryType extends Model
{
    use HasFactory;

    protected $table      = 'category_types';
    protected $primaryKey = 'id';
    protected $fillable   = ['category_type_name', 'image', 'desc'];

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
