<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'catagory_id', 'slug', 'excerpt', 'body'];

    protected $guarded = ['id'];

    public function catagory() {
        return $this->belongsTo(Catagory::class);

    }
}

