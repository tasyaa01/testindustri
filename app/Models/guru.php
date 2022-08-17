<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;

    public function guru()
    {
        // data dari model 'murid' bisa dimiliki
        // oleh model 'Guru' melalui 'id_murid'
        return $this->belongsTo(Guru::class, 'id_murid');
    }
}
