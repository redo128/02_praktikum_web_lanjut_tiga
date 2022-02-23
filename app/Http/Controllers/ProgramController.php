<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function pro1(){
        return redirect("https://www.educastudio.com/category/marbel-edu-games");
    }
    public function pro2(){
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }
    public function pro3(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    }
    public function pro4(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    }
}
