@extends('layout.main')
@section("content")
<!-- 主要內容 -->
<article id="cart-list-page" class="py-7">
    <div class="container">
        <!-- 區塊標題 -->
        <div class="text-center section-title mb-5">
            <h2>我的購物車</h2>
        </div>
        <!-- 內容 -->
        <div class="col col-xl-10 mx-auto">
            <form action="" method="post" id="cart-list-form">
                <table class="table text-center">
                    <thead class="text-center">
                        <tr>
                            <!-- <tr class="bgc-lotus-a"> -->
                            <th><span class="d-none">選取</span></th>
                            <th scope="col" class="col-7">商品資料</th>
                            <th scope="col" class="col-1">規格</th>
                            <th scope="col" class="col-2">甜度</th>
                            <th scope="col" class="col-2">數量</th>
                            <th scope="col" class="col-1">小計</th>
                            <th scope="col" class="col-1">變更</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- 商品 -->

                        @foreach($cartsInfos as $item)
                        <tr>
                            <!-- 選取 -->
                            <td class="align-middle">
                                <div
                                    class="form-check d-flex align-items-center justify-content-center">
                                    <input
                                        name="product-check"
                                        class="form-check-input"
                                        type="checkbox"
                                        value="1"
                                        id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <span class="d-none">選取</span>
                                    </label>
                                </div>
                            </td>
                            <!-- 品名 -->
                            <td class="align-middle">
                                <a
                                    class="d-flex align-items-center"
                                    href="#"
                                    title="前往商品詳細說明頁">
                                    <!-- 商品圖 -->
                                    <div class="col-xl-3 col-md-3 col-4 me-2">
                                        <img src="{{ asset('storage/' . $item['productPic']) }}" alt="手熬薏仁湯圖" />
                                    </div>
                                    <!-- 商品名稱 -->
                                    <h3 class="fs-6 text-darkred text-start lh-base">{{ $item["productName"] }}</h3>
                                </a>
                            </td>
                            <!-- 規格 -->
                            <td class="align-middle">
                                <select
                                    class="form-select text-center border-1 bg-transition text-darkred rounded size-selector"
                                    aria-label="select-list" data-id="{{ $item['cartId'] }}">
                                    <!-- <option selected>請選擇</option> -->
                                <option value="1" @if($item['size'] == 1) selected @endif>瓶</option>
                                <option value="2" @if($item['size'] == 2) selected @endif>大</option>
                                <option value="3" @if($item['size'] == 3) selected @endif>中</option>
                                </select>
                            </td>
                            <!-- 甜度 -->
                            <td class="align-middle">
                                <select class="form-select text-center border-1 bg-transition text-darkred rounded sugar-selector"
                                        aria-label="select-list"
                                        @if ($item['sugar'] == 0) disabled @endif
                                        data-id="{{ $item['cartId'] }}">
                                    <!-- <option selected>請選擇</option> -->
                                    @if ($item['sugar'] == 0)<option value="0" @if($item['sugar'] == 0) selected @endif>固定</option>
                                    @else
                                    <option value="4" @if($item['sugar'] == 1) selected @endif>無糖</option>
                                    <option value="1" @if($item['sugar'] == 1) selected @endif>微</option>
                                    <option value="2" @if($item['sugar'] == 2) selected @endif>半</option>
                                    <option value="3" @if($item['sugar'] == 3) selected @endif>正常</option>
                                    @endif
                                </select>
                            </td>
                            <!-- 數量 -->
                            <td class="align-middle">
                                <div class="d-flex flex-lg-row align-items-center">
                                    <button class="btn p-1 dash-btn" type="button">
                                        <i class="bi bi-dash-lg"></i>
                                    </button>
                                    <select class="form-select text-center border-1 bg-transition text-darkred rounded quantity-selector"
                                            aria-label="Default select example" data-id="{{ $item['cartId'] }}">
                                        <option value="1" @if($item['quantity'] == 1) selected @endif>1</option>
                                        <option value="2" @if($item['quantity'] == 2) selected @endif>2</option>
                                        <option value="3" @if($item['quantity'] == 3) selected @endif>3</option>
                                    </select>
                                    <button class="btn p-1 plus-btn" type="button">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                            </td>
                            <!-- 小計 -->
                            <td class="align-middle text-end p-3">
                                <span class="p-3" value="55">{{$item["price"]}}</span>
                            </td>
                            <!-- 變更 -->
                            <td class="align-middle">
                                <div class="d-flex flex-xl-column align-items-center">
                                    <!-- 收藏 -->
                                    <button class="btn border-0" type="button" title="加入收藏商品">
                                        <i class="bi bi-heart"></i>
                                        <span class="d-none">收藏</span>
                                        <!-- 刪除商品 -->

                                        <button class="btn border-0 remove-cart" data-id="{{ $item['cartId'] }}" title="移除購物車">
                                            <i class="bi bi-trash"></i>
                                            <span class="d-none">刪除</span>
                                        </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- 結帳 -->
                <div
                    class="d-flex align-items-center justify-content-between bgc-lotus-a p-md-3 p-3">
                    <div class="col-4">
                        <input
                            name="product-check-all"
                            class="form-check-input me-2"
                            type="checkbox"
                            value=""
                            id="product-check-all" />
                        <label class="text-darkred" for="product-check-all">全選 </label>
                    </div>
                    <div>
                        <span class="text-darkred">已選 <span id="selected-count">0</span> 項商品
                        </span>
                        <span class="text-darkred me-3">，結帳金額</span>
                        <span class="text-darkred fs-4 card-money-text">165</span>
                    </div>
                </div>
                <!-- 結帳btn -->
                <div class="text-end mt-4">
                    <button type="submit" class="btn btn-pearl text-darkred">結帳</button>
                </div>
            </form>
        </div>
    </div>
</article>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".remove-cart").forEach(button => {
            button.addEventListener("click", function (event) {
                event.preventDefault(); // Prevent default form submission

                let cartId = this.getAttribute("data-id");

                if (!confirm("確定要將此商品移除購物車嗎？")) {
                    return; // Stop if the user cancels
                }

                fetch(`{{ route('cart.destroy', ':cartId') }}`.replace(':cartId', cartId), {
                    method: "DELETE",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                        "Content-Type": "application/json"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert("商品已移除購物車");
                        location.reload(); // Reload page to update cart
                    } else {
                        alert("移除失敗，請重試");
                    }
                })
                .catch(error => console.error("Error:", error));
            });
        });
    });

    //更改大小杯時，更新購物車
    document.querySelectorAll(".size-selector").forEach(selector => {
        selector.addEventListener("change", function () {
            //取得商品id
            let cartId = this.getAttribute("data-id");
            //取得size大小
            let selectedOption = this.options[this.selectedIndex];
            let cup_size = selectedOption.value; //0:瓶裝 1:大杯 2:中杯
            console.log(cartId, cup_size);
            const formData = {
                cartId: cartId,
                cup_size: cup_size,
            };

            fetch(`{{ route('cart.update') }}`,{
                method: "put",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    location.reload(); // Reload page to update cart
                } else {
                    alert("更新失敗，請重試");
                }
            })  
        });
    });

    //更改數量時，更新購物車
    document.querySelectorAll(".quantity-selector").forEach(selector => {
        selector.addEventListener("change", function () {
            //取得商品id
            let cartId = this.getAttribute("data-id");
            //取得size大小
            let selectedOption = this.options[this.selectedIndex];
            let quantity = selectedOption.value; 
            console.log(cartId, quantity);
            const formData = {
                cartId: cartId,
                quantity: quantity,
            };

            fetch(`{{ route('cart.update') }}`,{
                method: "put",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    location.reload(); // Reload page to update cart
                } else {
                    alert("更新失敗，請重試");
                }
            })  
        });
    });

    //更改甜度時，更新購物車
    document.querySelectorAll(".sugar-selector").forEach(selector => {
        selector.addEventListener("change", function () {
            //取得商品id
            let cartId = this.getAttribute("data-id");
            //取得size大小
            let selectedOption = this.options[this.selectedIndex];
            let sugar = selectedOption.value; 
            console.log(cartId, sugar);
            const formData = {
                cartId: cartId,
                sugar_level: sugar,
            };

            fetch(`{{ route('cart.update') }}`,{
                method: "put",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    location.reload(); // Reload page to update cart
                } else {
                    alert("更新失敗，請重試");
                }
            })  
        });
    });
    

</script>
@endsection
