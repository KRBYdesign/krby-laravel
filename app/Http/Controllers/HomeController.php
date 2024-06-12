<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() : View
    {
        SEOTools::setTitle('Home');
        $data = json_decode(Storage::get('public/index_data.json'), true);

        return view('index', compact('data'));
    }
}
