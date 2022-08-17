<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    use HasFactory;

    public function guru()
    {
        // data dari model 'siswa' bisa memiliki banyak data
        // dari model 'Siswa' melalui id_murid
        return $this->hasMany(Siswa::class, 'id_murid');
    }
}
