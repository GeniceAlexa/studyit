<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $primaryKey = 'id_user';
    protected $fillable = ['name', 'email', 'password'];

    // Menghubungkan ke pivot table
    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'room_members', 'id_user', 'id_rooms')
                    ->withPivot('role');
    }
}