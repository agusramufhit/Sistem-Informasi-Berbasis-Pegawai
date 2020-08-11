<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jeniskelamin extends Model
{
    protected $table = "jeniskelamin";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'jeniskelamin'
    ];

    public function pegawai() {
        return $this->hasMany(Pegawai::class);
    }

    public function datapengguna() {
        return $this->hasMany(DataPengguna::class);
    }
}
