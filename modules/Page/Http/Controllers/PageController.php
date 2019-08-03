<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Page\Http\Requests\Store;
use Modules\Page\Http\Requests\Update;
use Modules\Page\Models\Page;
use Modules\Page\TableView\IndexTableView;

class PageController extends Controller
{
    public function index()
    {
        $items = Page::autoSort()->latest()->search(request('search'))->paginate();

        return (IndexTableView::make($items))->view('page::index');
    }

    public function create()
    {
        return view('page::create');
    }

    public function store(Store $request)
    {
        Page::create($request->all());

        return redirect()->route('page.index')->withSuccess('Page saved');
    }

    public function show(Page $page)
    {
        return view('page::show', compact('page'));
    }

    public function edit(Page $page)
    {
        return view('page::edit', compact('page'));
    }

    public function update(Update $request, Page $page)
    {
        $page->update($request->all());

        return redirect()->back()->withSuccess('Page saved');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('page.index')->withSuccess('Page deleted');
    }
}
