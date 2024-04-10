<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected  $fillable =
        [
            'id',
            'user_name',
            'user_password',
            'role',
            'created_at',
            'updated_at'
        ];
}
