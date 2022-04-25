<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagePath extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'img_path'];

    public function product(){
        return $this->belongsTo(Product::Class);
    }
}