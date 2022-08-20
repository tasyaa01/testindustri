<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    public $fillable = [ 'nis', 'nama', 'kelas', 'jurusan'];
    use HasFactory;
}
