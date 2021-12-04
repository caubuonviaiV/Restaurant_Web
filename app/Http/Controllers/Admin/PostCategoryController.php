<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostCategory\PostCategoryRequest;
use App\Http\Services\PostCategory\PostCategoryService;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    protected $postcategoryService;

    public function __construct(PostCategoryService $postcategoryService)
    {
        $this->postcategoryService = $postcategoryService;
    }

    public function create()
    {
        return view('admin.PostCategory.add', [
            'title' => 'Thêm Danh Mục Mới'
        ]);
    }

    public function store(PostCategoryRequest $request)
    {
        $this->postcategoryService->create($request);

        return redirect('/admin/postcategories/list');
    }

    public function index()
    {
        return view('admin.postCategory.list', [
            'title' => 'Danh Sách Danh Mục bài viết',
            'postcategories' => $this->postcategoryService->getAll()
        ]);
    }

    public function show(PostCategory $postcategory)
    {
        return view('admin.PostCategory.edit', [
            'title' => 'Chỉnh Sửa Danh Mục: ' . $postcategory->title,
            'postcategory' => $postcategory
        ]);
    }

    public function update(PostCategory $PostCategory, PostCategoryRequest $request)
    {
        $this->postcategoryService->update($request, $PostCategory);
        return redirect('/admin/postcategories/list');
    }

    public function destroy(Request $request) {
        $result = $this->postcategoryService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công danh mục'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
