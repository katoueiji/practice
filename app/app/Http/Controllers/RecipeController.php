<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * レシピ一覧
     */
    public function index()
    {
        // 今はまず全件取得でOK
        $recipes = Recipe::all();

        return view('recipes.index', compact('recipes'));
    }

    /**
     * レシピ作成画面
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * レシピ保存
     */
    public function store(Request $request)
    {
        // まずは超最低限のバリデーション
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $recipe = Recipe::create($validated);

        return redirect()
            ->route('recipes.show', $recipe)
            ->with('success', 'レシピを作成しました');
    }

    /**
     * レシピ詳細
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    /**
     * レシピ編集画面
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    /**
     * レシピ更新
     */
    public function update(Request $request, Recipe $recipe)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $recipe->update($validated);

        return redirect()
            ->route('recipes.show', $recipe)
            ->with('success', 'レシピを更新しました');
    }
}
