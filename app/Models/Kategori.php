<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $guarded = [];
    protected $timestamp = true;

    public function menu(){
        return $this->hasMany(Menu::class,'id_kategori', 'id');
    }
}