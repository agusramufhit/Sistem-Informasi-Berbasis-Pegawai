<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'nip', 'alamat', 'tgllhr', 'created_at', 'Updated_at'
    ];

    public function jabatan() {
        return $this->belongsTo('App\Jabatan');
    }

    public function jeniskelamin() {
        return $this->belongsTo('App\Jeniskelamin');
    }
}
