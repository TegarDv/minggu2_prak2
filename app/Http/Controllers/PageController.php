<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexLaravel(){
        return 'Selamat Datang';
    }
    public function AboutUser(){
        return '[2031710134] Tegar Dwi Vantoro';
    }
    public function ArticleClass($id){
        return 'Selamat Datang'.$id;
    }
}
