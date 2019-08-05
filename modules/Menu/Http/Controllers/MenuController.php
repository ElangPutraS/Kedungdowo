<?php

namespace Modules\Menu\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Menu\Http\Requests\Store;
use Modules\Menu\Http\Requests\Update;
use Modules\Menu\Models\Menu;
use Modules\Menu\TableView\IndexTableView;

class MenuController extends Controller
{
    public function index()
    {
        $items = Menu::autoSort()->latest()->search(request('search'))->paginate();

        return (IndexTableView::make($items))->view('menu::index');
    }

    public function create()
    {
        return view('menu::create');
    }

    public function store(Store $request)
    {
        Menu::create($request->all());

        return redirect()->route('menu.index')->withSuccess('Menu saved');
    }

    public function show(Menu $menu)
    {
        return view('menu::show', compact('menu'));
    }

    public function edit(Menu $menu)
    {
        return view('menu::edit', compact('menu'));
    }

    public function update(Update $request, Menu $menu)
    {
        $menu->update($request->all());

        return redirect()->back()->withSuccess('Menu saved');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('menu.index')->withSuccess('Menu deleted');
    }
}
