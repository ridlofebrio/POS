<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tugasController extends Controller
{
    public function home(){
        return view('Tugas.home');
    }
    public function productfoodbeverage(){
        return 'Ini halaman product food beverage';
    }
    public function productbeautyhealth(){
        return "Ini halaman product beauty health";
    }
    public function homecare(){
        return "Ini halaman product home care";
    }
    public function productbabykid(){
        return "Ini halaman product baby kid";
    }

    public function user($id, $name){
        return view('Tugas.user')
        ->with('name',$name)
        ->with('id',$id);
       ;
    }
    public function penjualan(){
        return view('Tugas.penjualan');
    }
}
