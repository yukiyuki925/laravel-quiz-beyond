<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * カテゴリー新規登録画面表示
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * カテゴリー新規登録処理
     */
    public function store(StoreCategoryRequest $request)
    {
        // 必須バリデーション
        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        // 保存処理
        $category = new Category();
        $category->name = $validate['name'];
        $category->description = $validate['description'];
        $category->save();
        return redirect()->route('admin.top');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}