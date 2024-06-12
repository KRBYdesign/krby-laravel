<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class ErrorController extends Controller
{
    public function error404()
    {
        return view('errors.404');
    }
}
