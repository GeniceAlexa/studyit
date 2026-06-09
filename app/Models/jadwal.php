<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwals';
    protected $primaryKey = 'id_jadwal';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'title',
        'date',
        'start_time',
        'end_time',
        'type'
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}