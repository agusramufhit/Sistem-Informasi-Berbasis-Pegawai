<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPengguna extends Model
{
    protected $table = "data_pengguna";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'name_id', 'alamat_id', 'jabatan_id', 'no_hp', 'ktp'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id');
    }

    public function jabatan() {
        return $this->belongsTo(Jabatan::class, 'id');
    }

    public function jeniskelamin() {
        return $this->belongsTo(Jeniskelamin::class, 'id');
    }
}
