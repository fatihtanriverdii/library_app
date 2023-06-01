<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Tablo adı ve diğer ayarlar
    protected $table = 'books';
    protected $primaryKey = 'id';
    // Diğer sütunlar ve ilişkiler

}
