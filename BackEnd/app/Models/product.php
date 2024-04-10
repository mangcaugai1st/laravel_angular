<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Seeders\category;


class product extends Model
{
    use HasFactory;
    protected $fillable =
        [
            'id',
            'product_name',
            'product_price',
            'product_image',
            'category_id',
            'updated_at',
            'created_at',
            'product_description'
        ];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
