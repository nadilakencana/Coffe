<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Kategori;

class MenuController extends Controller
{


    public function menu(){
        $menu = Menu::all();
        $category = Kategori::all();
        return view('dashboard.content',compact('menu', 'category'));
    }

    public function createData(){
        return view('dashboard.create');
    }
}