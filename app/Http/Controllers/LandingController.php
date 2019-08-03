<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class LandingController extends BaseController
{
    public function index()
    {
        return view('landing.index');
    }
}
