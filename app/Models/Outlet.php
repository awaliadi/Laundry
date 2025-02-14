<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat'
    ];
    
    protected $table = 'outlet';

    public function outlet()
    {
        return $this->hasMany(Paket::class, 'id_outlet');
    } 
}
