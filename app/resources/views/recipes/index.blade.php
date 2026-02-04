{{-- レシピ一覧画面 --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>レシピ一覧</h1>

    <!-- 検索エリア [1] -->
    <div class="search-section">
        <input type="text" name="keyword" placeholder="キーワード検索">
        <input type="number" name="cost_search" placeholder="原価検索">
        <button type="submit">検索</button>
    </div>

    <!-- レシピリスト表示 [1] -->
    <div class="recipe-list">
        @foreach($recipes as $recipe)
            <div class="recipe-card" style="border: 1px solid #ccc; margin-bottom: 10px; padding: 10px;">
                <div class="recipe-photo">
                    <!-- 資料にある「写真」項目 [1] -->
                    <img src="{{ $recipe->image_path }}" alt="写真" style="width: 100px;">
                </div>
                <div class="recipe-info">
                    <h3>{{ $recipe->name }}</h3> <!-- レシピ名 [1] -->
                    <p>原価: ¥{{ number_format($recipe->total_cost) }}</p> <!-- 原価 [1] -->
                    <p>材料: {{ $recipe->ingredients_summary }}</p> <!-- 材料 [1] -->
                    <a href="{{ route('recipes.edit', $recipe->id) }}">編集>></a> <!-- 編集リンク [1] -->
                </div>
            </div>
        @endforeach
    </div>

    <!-- 無限スクロールのプレースホルダー [1] -->
    <div id="infinite-scroll-marker">
        $※↓無限スクロール$
    </div>

    <!-- ナビゲーションメニュー [1] -->
    <nav class="footer-nav">
        <ul>
            <li><a href="#">材料管理</a></li>
            <li><a href="#">レシピ作成</a></li>
            <li><a href="#">売上</a></li>
            <li><a href="#">ログアウト</a></li>
        </ul>
    </nav>
</div>
@endsection