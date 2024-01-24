<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'publication_category_name',
        'publication_category_slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
}
