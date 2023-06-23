<?php

namespace App\Models;

<<<<<<< HEAD
use App\Models\Categories;
=======
>>>>>>> b3b440541589a093f123d135e0380c5aabe7be56
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resep extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function Category()
    {
        return $this->belongsTo(Categories::class, 'id_category');
=======
    protected $table = 'reseps'; // Nama tabel yang terkait dengan model

    protected $fillable = [
        'title', 'resep', 'images', 'id_categories'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'id_categories');
>>>>>>> b3b440541589a093f123d135e0380c5aabe7be56
    }
}
