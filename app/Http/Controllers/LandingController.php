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

    public function contentList($category)
    {
        $list = Content::where('slug', $category)->first();
        if (empty($list)) {
            abort(404);
        }
        $pages = Page::whereIn('category_id', $list->list)->where('published', 1)->whereNull('deleted_at')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        if ($list->template == 'Galeri') {

            return view('landing.list-gallery', compact('list', 'pages'));
        }

        return view('landing.list-content', compact('list', 'pages'));
    }

    public function show($category, $slug)
    {
        $cat = Content::where('slug', $category)->first();
        if (empty($cat)) {
            abort(404);
        }

        $pages = Page::whereIn('category_id', $cat->list)->where('published', 1)
            ->whereNull('deleted_at')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        if (empty($pages)) {
            abort(404);
        }

        $page = Page::whereIn('category_id', $cat->list)->where('published', 1)->where('slug', $slug)
            ->whereNull('deleted_at')
            ->first();

        if (empty($page)) {
            abort(404);
        }

        if ($cat->template == 'Galeri') {
            return view('landing.gallery', compact('cat', 'pages', 'page'));
        }

        return view('landing.content', compact('cat', 'pages', 'page'));
    }
}
