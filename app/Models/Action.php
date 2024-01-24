<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'action_icon',
        'action_name',
        'action_description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
