<?php

namespace Modules\Content\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Content\Http\Requests\Store;
use Modules\Content\Http\Requests\Update;
use Modules\Content\Models\Content;
use Modules\Content\TableView\IndexTableView;

class ContentController extends Controller
{
    public function index()
    {
        $items = Content::autoSort()->latest()->search(request('search'))->paginate();

        return (IndexTableView::make($items))->view('content::index');
    }

    public function create()
    {
        return view('content::create');
    }

    public function store(Store $request)
    {
        Content::create($request->all());

        return redirect()->route('content.index')->withSuccess('Content saved');
    }

    public function show(Content $content)
    {
        return view('content::show', compact('content'));
    }

    public function edit(Content $content)
    {
        return view('content::edit', compact('content'));
    }

    public function update(Update $request, Content $content)
    {
        $content->update($request->all());

        return redirect()->back()->withSuccess('Content saved');
    }

    public function destroy(Content $content)
    {
        $content->delete();

        return redirect()->route('content.index')->withSuccess('Content deleted');
    }
}
