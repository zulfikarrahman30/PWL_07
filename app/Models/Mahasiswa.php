<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table='mahasiswas';
    // protected $primaryKey='nim';
    protected $incerement = false;
    protected $fillable = ['nim','nama','kelas_id','jurusan','no_handphone','email','tanggal_lahir'];

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }

    public function matakuliah()
    {
    	return $this->belongsToMany(Matakuliah::class)->withPivot('nilai');
    }
}