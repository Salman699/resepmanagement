<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resep extends Model
{
    use HasFactory;

    public function Category()
    {
        return $this->belongsTo(Categories::class, 'id_category');
    }
}
