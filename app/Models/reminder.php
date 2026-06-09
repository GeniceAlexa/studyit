<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $table = 'reminders';
    protected $primaryKey = 'id_reminder';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'title',
        'description',
        'deadline',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}