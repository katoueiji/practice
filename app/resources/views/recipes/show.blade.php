@extends('layouts.app')

@section('content')
<div class="container">
    <div class="recipe-detail">
        <!-- レシピ基本情報 [1] -->
        <div class="recipe-header">
            <div class="recipe-photo">
                <img src="{{ $recipe->image_path }}" alt="写真" style="max-width: 300px;"> <!-- 写真 [1] -->
            </div>
            <h2>{{ $recipe->name }}</h2> <!-- レシピ名 [1] -->
            <h5>原価: ¥{{ number_format($recipe->total_cost) }}</h5> <!-- 原価 [1] -->
        </div>

        <!-- 材料リスト [1] -->
        <div class="ingredients-section">
            <h3>材料</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>材料</th>
                        <th>原価</th>
                        <th>分量</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recipe->ingredients as $ingredient)
                    <tr>
                        <td>{{ $ingredient->name }}</td> <!-- 材料 [1] -->
                        <td>¥{{ number_format($ingredient->cost) }}</td> <!-- 原価 [1] -->
                        <td>{{ $ingredient->amount }}</td> <!-- 分量 [1] -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- 作業手順 [1] -->
        <div class="instruction-section">
            <h3>作業手順</h3>
            <p>{{ $recipe->instructions }}</p>
        </div>

        <!-- 編集ボタン [1] -->
        <div class="actions">
            <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn">編集>></a>
        </div>
    </div>
</div>
@endsection