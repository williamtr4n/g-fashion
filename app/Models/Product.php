<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'slug','price','category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function image_paths(){
        return $this->hasMany(ImagePath::Class);
    }
}