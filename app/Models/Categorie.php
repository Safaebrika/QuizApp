<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        // Other fillable fields in your Categorie model
        'title',
        'description',
        'image'
    ];
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
