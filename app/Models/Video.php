<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function Categories()
    {
        return $this->belongsTo(Categories::class, 'id_category');
    }

    public function Resep()
    {
        return $this->belongsTo(Resep::class, 'id_resep');
    }

    public function Video()
    {
        return $this->belongsTo(Video::class, 'id_resep');
    }
}
