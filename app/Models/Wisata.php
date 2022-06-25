<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'link',
        'deskripsi',
    ];
    public function childs()
    {
        return $this->hasMany(Wisata::class, 'wisata_id', 'id');
    }
}
