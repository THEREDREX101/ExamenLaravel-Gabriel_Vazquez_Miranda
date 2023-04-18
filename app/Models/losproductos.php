<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class losproductos extends Model
{
    protected $fillable = ['nombre', 'marca', 'precio', 'cantidad'];
}
?>