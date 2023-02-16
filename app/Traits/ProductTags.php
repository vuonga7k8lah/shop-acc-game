<?php

namespace App\Traits;

use App\Models\Tags;

trait ProductTags
{
    public function handleCreateTags($tag, $product_id)
    {
        return Tags::query()->firstOrCreate([
            'name'       => $tag,
            'product_id' => $product_id
        ])->id;
    }
}
