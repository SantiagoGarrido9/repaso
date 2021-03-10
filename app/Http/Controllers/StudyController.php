<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function index()
    {
        return "Estamos en index";
    } 

    public function hello($name,$surname)
    {
        echo "Hola $name $surname";
    } 
}
