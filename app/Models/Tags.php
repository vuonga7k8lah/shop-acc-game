<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tags extends Model
{
    use HasFactory;
    protected $fillable=['name','product_id'];
    protected $table = 'product_tags';
    protected $primaryKey = 'id';

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

}
