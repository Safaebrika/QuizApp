<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
    'question',
    'category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Categorie::class , 'category_id' );
    }

    // Chaque question peut avoir plusieurs options.
    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
