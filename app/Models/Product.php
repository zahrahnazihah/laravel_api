<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tblproducts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'deskripsi',
        'foto',
        'harga',
    ];
}