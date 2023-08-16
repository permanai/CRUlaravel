<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ujianprak069 extends Model
{
    use HasFactory;
    protected $table="ujianprak069";
    protected $fillable=['nama_produk','harga_produk','foto'];
}
