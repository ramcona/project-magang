<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; //1

class Post extends Model
{
    use HasFactory; //2
   
    //mendefisikan kolom yang bisa di isi data
    protected $fillable = [
        'image',
        'title',
        'content',
    ];
 
}