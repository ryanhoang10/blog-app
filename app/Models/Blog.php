<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';
    
    public $timestamps = false;

    public function category()
    {
        return $this->hasOne(BlogCategories::class);
    }

    public function comments()
    {
        return $this->hasMany(BlogComments::class);
    }
}
