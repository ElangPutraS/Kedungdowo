<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Modules\Category\Http\Requests\Store;
use Modules\Category\Http\Requests\Update;
use Modules\Category\Models\Category;
use Modules\Category\TableView\IndexTableView;

class CategoryController extends Controller
{
    public function index()
    {
        $items = Category::autoSort()->latest()->search(request('search'))->paginate();

        return (IndexTableView::make($items))->view('category::index');
    }

    public function create()
    {
        $listTitle = Category::all()->mapWithKeys(function ($i) {
            return [$i['id'] => $i['title']];
        })->toArray();
        $listTitle = [0 => 'Tidak Ada'] + $listTitle;

        return view('category::create', compact('listTitle'));
    }

    public function store(Store $request)
    {
        $slug = time() . '-' . Str::slug($request->title);
        $request->request->add(['slug' => $slug]);
        $request->request->set('parent_id', $request->parent_id == 0 ? null : $request->parent_id);
        Category::create($request->all());

        return redirect()->route('category.index')->withSuccess('Kategori berhasil disimpan.');
    }

    public function show(Category $category)
    {
        return view('category::show', compact('category'));
    }

    public function edit(Category $category)
    {
        $listTitle = Category::all()->mapWithKeys(function ($i) use ($category) {
            if ($i['id'] != $category->id) {
                return [$i['id'] => $i['title']];
            }

            return [$i['id'] => null];
        })->filter()->toArray();
        $listTitle = [0 => 'Tidak Ada'] + $listTitle;

        return view('category::edit', compact('category', 'listTitle'));
    }

    public function update(Update $request, Category $category)
    {
        if ($request->title != $category->title) {
            $slug = time() . '-' . Str::slug($request->title);
            $request->request->add(['slug' => $slug]);
        }
        $request->request->set('parent_id', $request->parent_id == 0 ? null : $request->parent_id);
        $category->update($request->all());

        return redirect()->route('category.index')->withSuccess('Kategori berhasil diperbarui.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')->withSuccess('Kategori berhasil dihapus.');
    }
}
