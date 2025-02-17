@extends('layout.main')

@section("content")
<h1>上傳商品</h1>
<form action="/upload_product" method="post" enctype="multipart/form-data">
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
        <input type="file" class="form-control" id="image" name="image" required>
    </div>
    <button type="submit" class="btn btn-primary">送出</button>

@endsection