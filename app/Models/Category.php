<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model {
    use HasFactory;
    protected $table='categories';

    public function article(){
        return $this->hasMany(Article::class);
    }
}
