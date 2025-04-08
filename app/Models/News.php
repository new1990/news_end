<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // 一括代入を許可するカラム（省略するとすべて許可されない）
    protected $fillable = [
        'title',
        'content',
        'author',
        'published_at',
    ];
}
