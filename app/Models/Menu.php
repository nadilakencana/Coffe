<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $guarded = [];
    protected $timestamp = true;

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori','id');
    }
}