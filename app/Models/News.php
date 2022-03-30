<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'summary', 'content', 'date', 'image', 'likes', 'views'];

    public function comments() {
        return $this->hasMany(newsComments::class);
    }
}
