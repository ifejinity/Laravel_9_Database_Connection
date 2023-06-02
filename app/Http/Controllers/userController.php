<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return "HELLO FUNCTION FROM CONTROLLER";
    }

    public function user($id){
        return view('practice')
            ->with('name', 'Jeffrey Lonzanida')
            ->with('age', 22)
            ->with('email', 'mrlonzanida08@gmail.com')
            ->with('id', $id);
    }
}
