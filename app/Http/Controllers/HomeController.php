<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() : View
    {
        SEOTools::setTitle('Home');

        return view('index');
    }
}
