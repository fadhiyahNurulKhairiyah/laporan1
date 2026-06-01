<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> origin/main
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
<<<<<<< HEAD
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'stock',        // ← tambahkan ini
        'category_id',
=======
    protected $fillable = [
        'category_id',
        'name',
        'stock',
        'price'
>>>>>>> origin/main
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}