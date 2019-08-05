<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Routing\Controller;
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
        return view('category::create');
    }

    public function store(Store $request)
    {
        Category::create($request->all());

        return redirect()->route('category.index')->withSuccess('Category saved');
    }

    public function show(Category $category)
    {
        return view('category::show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('category::edit', compact('category'));
    }

    public function update(Update $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->back()->withSuccess('Category saved');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')->withSuccess('Category deleted');
    }
}
