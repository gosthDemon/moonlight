<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function MyCourses(){

        return view('Docentes.myCourses');
    }
}
