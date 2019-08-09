<?php

namespace Modules\Category\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Category\Models\Category;

class CategoryController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = Category::with('parentRecursive')->where('id', $request->parent)->first();

        if ($request->has('parent')) {
            while (true) {
                if (! empty($data->parentRecursive)) {
                    $data = $data->parentRecursive;
                } else {
                    break;
                }
            }
        }

        return response()->json(['data' => $data]);
    }
}
