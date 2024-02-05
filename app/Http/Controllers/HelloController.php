<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    
    function index(){
        return "Hello World  from controller";
    }

    function showUser(string $id,string $comments){
        return "User ". $id. " Comments Count: ". $comments . "From COntroller";
    }

    function helloHi(){
        return "Hello Hi";
    }
}
