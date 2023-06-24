<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Nama tabel yang terkait dengan model

    protected $fillable = [
        'name',
    ];

    public function reseps()
    {
        return $this->hasMany(Resep::class, 'id_categories');
    }
}
