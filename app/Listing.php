<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = ['namabarang' , 'kategori' , 'price' , 'qty' , 'image'];
}
