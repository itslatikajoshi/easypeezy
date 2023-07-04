<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        #echo "My first controller";
        $names = array("Gaurav", "Latika");
        return view('home', ["names" => $names]);
    }
}
