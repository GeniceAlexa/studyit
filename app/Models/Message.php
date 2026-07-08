<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Room;

class Message extends Model
{
    protected $table = 'messages';

    protected $primaryKey = 'id_messages';

    public $timestamps = true;

    protected $fillable = [
        'id_rooms',
        'id_user',
        'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'id_rooms', 'id_rooms');
    }
}