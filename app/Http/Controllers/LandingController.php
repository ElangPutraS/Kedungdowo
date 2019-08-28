<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Modules\Category\Models\Category;
use Modules\Content\Models\Content;
use Modules\Page\Models\Page;

class LandingController extends BaseController
{
    public function index()
    {
        $content = Content::all();

        return view('landing.index', compact('content'));
    }
}
