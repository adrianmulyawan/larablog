<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'organization_name',
        'organization_description',
        'organization_motto',
        'organization_logo',
        'organization_address',
        'organization_contact'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
