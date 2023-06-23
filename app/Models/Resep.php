<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resep extends Model
{
    use HasFactory;

    protected $table = 'reseps'; // Nama tabel yang terkait dengan model

    protected $fillable = [
        'title', 'resep', 'images', 'id_categories'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'id_categories');
    }
}
