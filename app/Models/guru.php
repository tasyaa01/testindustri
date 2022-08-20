<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    public $fillable = [ 'nip', 'nama', 'mapel', 'id_murid'];
    use HasFactory;

    public function murid()
    {
        // data dari model 'murid' bisa dimiliki
        // oleh model 'Guru' melalui 'id_murid'
        return $this->belongsTo(Murid::class, 'id_murid');
    }
}
