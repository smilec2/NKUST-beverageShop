<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
</head>
<body>
    <h1>所有商品</h1>
    @foreach ($products as $product)
    <ul>
        <li>商品名稱：{{$product->product_name}}</li>
        <li>商品描述：{{$product->description}}</li>
        <li>價格：{{$product->price}}</li>
    </ul>
    @endforeach
    
</body>
</html>