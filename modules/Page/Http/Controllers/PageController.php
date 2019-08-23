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
        $page = Page::create($request->except('fileuploader-list-uploads', 'uploads'));
        if ($request->uploads) {
            $page->addMultipleMediaFromRequest(['uploads'])
                ->each(function ($fileAdder) {
                    $fileAdder->toMediaCollection('pages');
                });
        }

        return redirect()->route('page.index')->withSuccess('Halaman berhasil disimpan.');
    }

    public function show(Page $page)
    {
        return view('page::show', compact('page'));
    }

    public function edit(Page $page)
    {
        $page->files = $this->preloadedFiles($page);

        return view('page::edit', compact('page'));
    }

    public function update(Update $request, Page $page)
    {
        $preloadedFiles = [];
        if ($request['fileuploader-list-uploads']) {
            foreach (json_decode($request['fileuploader-list-uploads']) as $file) {
                $preloadedFiles[] = $file->file;
            }
            foreach ($page->getMedia('pages') as $file) {
                if (! in_array($file->getUrl(), $preloadedFiles)) {
                    $file->delete();
                }
            }
        }

        if ($request->uploads) {
            $page->addMultipleMediaFromRequest(['uploads'])
                ->each(function ($fileAdder) {
                    $fileAdder->toMediaCollection('pages');
                });
        }
        $request->request->set('published', $request->published ?? 0);
        $page->update($request->except('fileuploader-list-uploads', 'uploads'));

        return redirect()->route('page.index')->withSuccess('Halaman berhasil diperbarui.');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('page.index')->withSuccess('Halaman berhasil dihapus.');
    }

    /**
     * Preloaded Page Files.
     * @param $files
     * @return static
     */
    protected function preloadedFiles(Page $files)
    {
        $preloadedFiles = [];
        foreach ($files->getMedia('pages') as $file) {
            $preloadedFiles[] = [
                'name' => $file->file_name,
                'type' => $file->mime_type,
                'size' => $file->size,
                'file' => $file->getUrl(),
                'data' => [
                    'url' => $file->getUrl(),
                    'thumbnail' => $file->getUrl(),
                ],
            ];
        }

        return json_encode($preloadedFiles);
    }
}
