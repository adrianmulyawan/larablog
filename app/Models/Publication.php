<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'publication_category_id',
        'publication_name',
        'publication_slug',
        'publication_body',
        'publication_header_image',
        'publication_image',
        'publication_author',
        'publication_uploader',
        'publication_url_download'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function publicationCategory()
    {
        return $this->belongsTo(PublicationCategory::class);
    }
}
