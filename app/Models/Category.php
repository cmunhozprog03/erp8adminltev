<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['setor_id', 'name', 'description', 'status', 'position', 'url', 'image'];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
}
