<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    use HasFactory;

    protected $table = 'blog_categories';

    public function blogs()
    {
        return $this->belongsTo(Blog::class);
    }
}
