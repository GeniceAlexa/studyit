<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriFile extends Model
{
    protected $table = 'files';
    protected $primaryKey = 'id_file';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'id_rooms',
        'title',
        'file_path'
    ];

    public function uploader()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}