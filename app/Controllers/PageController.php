<?php

namespace App\Controllers;
use App\Models\ProfileModel; 
class PageController extends BaseController 
{ 
    public function home() 
    { 
        $model = new ProfileModel(); 
        $data['profiles'] = $model->findAll();
        return view('home', $data); 
    } 

    public function about() 
    { 
        return view('about'); 
    }

    public function login() 
    { 
        return view('login'); 
    }

    public function test() 
    { 
        return view('test'); 
    }    
}
