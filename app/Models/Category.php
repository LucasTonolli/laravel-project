<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image'
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected static function booted(): void
    {
        static::creating(function (Category $category) {
            $category->slug = $category->name;
        });
    }
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => [
                'name' => $value,
                'slug' => Str::of($value)->slug('-')
            ] 
        );
    }
}