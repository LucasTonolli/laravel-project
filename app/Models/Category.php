<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'image'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function produts()
    {
        return $this->hasMany(Product::class);
    }

}
