<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'project_name',
        'project_slug',
        'project_header_image',
        'project_image',
        'project_author',
        'project_description',
        'project_location',
        'project_date',
        'project_start_time',
        'project_registration_deadline',
        'contact_person_name',
        'contact_person_phone',
        'is_done'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
