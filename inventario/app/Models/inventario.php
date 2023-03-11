<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    use HasFactory;

    protected $table='inventario';
    protected $primarykey='id';
    protected $fillable=[
         'img',
         'name',
         'description',
         'price',
         'amout'
    ];
}
