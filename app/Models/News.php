<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'news_category_id',
        'news_name',
        'news_slug',
        'news_header_image',
        'news_image',
        'news_image_source',
        'news_body',
        'news_uploader',
        'news_author'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class);
    }
}
