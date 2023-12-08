<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prueba;

class HomeController extends Controller
{
    public function __invoke()
    {
        $all = Prueba::get();
        return $all;
    }
}
