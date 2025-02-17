@extends('layout.main')

@section("content")
<h1>上傳商品</h1>
<form action="/manage/product/create" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="product_name" class="form-label">商品名稱</label>
        <input type="text" class="form-control" id="product_name" name="product_name" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">商品描述</label>
        <input type="text" class="form-control" id="description" name="description" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">價格</label>
        <input type="number" class="form-control" id="price" name="price" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">圖片</label>
        <input type="file" class="form-control" id="image" name="image_url" required>
    </div>

    <div>
        <label for="category" class="form-label">分類</label>
        <select class="form-select" id="category" name="category_id" required>
            <option value="1">奶類</option>
            <option value="2">茶類</option>
            <option value="3">無咖啡因</option>
        </select>
    </div>
    <div>
        <label for="has_sugar" class="form-label">是否調整甜度</label>
        <select class="form-select" id="has_sugar" name="has_sugar" required>
            <option value= 1 >有</option>
            <option value= 0 >沒有</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">送出</button>
</form>
<!-- 顯示所有錯誤訊息 -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@endsection