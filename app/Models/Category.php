<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];

    public function name(): Attribute
    {
        return new Attribute(
            get:fn($value) => strtoupper($value),
            set:fn($value) => ucfirst(strtolower($value)),
        );
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
