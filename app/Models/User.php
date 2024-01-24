<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'phone_number',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relationship
    public function organization()
    {
        return $this->hasOne(Organization::class);
    }

    public function actions()
    {
        return $this->hasMany(Action::class);
    }

    public function targets()
    {
        return $this->hasMany(Target::class);
    }

    public function newsCategories()
    {
        return $this->hasMany(NewsCategory::class);
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function publicationCategories()
    {
        return $this->hasMany(PublicationCategory::class);
    }

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
}
