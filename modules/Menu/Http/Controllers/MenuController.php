<?php

namespace Modules\Menu\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
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
        $listTitle = Menu::all()->mapWithKeys(function ($i) {
            return [$i['id'] => $i['title']];
        })->toArray();
        $listTitle = [0 => 'Tidak Ada'] + $listTitle;

        return view('menu::create', compact('listTitle'));
    }

    public function store(Store $request)
    {
        $request->request->set('parent_id', $request->parent_id == 0 ? null : $request->parent_id);
        Menu::create($request->all());

        return redirect()->route('menu.index')->withSuccess('Menu berhasil ditambah');
    }

    public function show(Menu $menu)
    {
        return view('menu::show', compact('menu'));
    }

    public function edit(Menu $menu)
    {
        $listTitle = Menu::all()->mapWithKeys(function ($i) use ($menu) {
            if ($i['id'] != $menu->id) {
                return [$i['id'] => $i['title']];
            }

            return [$i['id'] => null];
        })->filter()->toArray();
        $listTitle = [0 => 'Tidak Ada'] + $listTitle;

        return view('menu::edit', compact('menu', 'listTitle'));
    }

    public function update(Update $request, Menu $menu)
    {
        $request->request->set('parent_id', $request->parent_id == 0 ? null : $request->parent_id);
        $menu->update($request->all());

        return redirect()->route('menu.index')->withSuccess('Menu berhasil diperbarui');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('menu.index')->withSuccess('Menu berhasil dihapus');
    }
}
