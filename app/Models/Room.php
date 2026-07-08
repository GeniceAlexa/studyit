<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $primaryKey = 'id_rooms';

    protected $fillable = [
        'name',
        'created_by',
        'max_members'
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by', 'id_user');
    }

    public function members()
    {
        return $this->belongsToMany(
            User::class,
            'room_members',
            'id_rooms',
            'id_user'
        );
    }

    public function messages()
    {
        return $this->hasMany(Message::class,'id_rooms','id_rooms');
    }
}