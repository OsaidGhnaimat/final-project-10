<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'role_id',
        'user_name',
        'email',
        'password',
        'user_img'
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function chat(){
        return $this->hasMany(Chat::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    // public function subscription(){
    //     return $this->hasMany(Subscription::class);
    // }
     public function subscription(){
        return $this->belongsToMany(Subscription::class, 'Subscription'); 
    }
    

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
    ];
}
