<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Seeders\product;

class category extends Model
{
    use HasFactory;
    protected $fillable =
        [
            'id',
            'category_name',
            'category_thumbnail',
            'updated_at',
            'created_at'
        ];
    public function products()
    {
        return $this->hasMany(product::class);
    }
}
