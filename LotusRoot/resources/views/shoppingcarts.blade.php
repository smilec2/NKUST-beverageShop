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
                        <!-- 1 -->
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
                                        <img src="images/drink1.jpg" alt="手熬薏仁湯圖" />
                                    </div>
                                    <!-- 商品名稱 -->
                                    <h3 class="fs-6 text-darkred text-start lh-base">手熬薏仁湯</h3>
                                </a>
                            </td>
                            <!-- 規格 -->
                            <td class="align-middle">
                                <select
                                    class="form-select text-center border-1 bg-transition text-darkred rounded"
                                    aria-label="select-list">
                                    <!-- <option selected>請選擇</option> -->
                                    <option value="1">瓶</option>
                                    <option value="2" selected="">大</option>
                                    <option value="3">中</option>
                                </select>
                            </td>
                            <!-- 甜度 -->
                            <td class="align-middle">
                                <select
                                    class="form-select text-center border-1 bg-transition text-darkred rounded"
                                    aria-label="select-list">
                                    <!-- <option selected>請選擇</option> -->
                                    <option value="1" selected>固定</option>
                                    <option value="2">微</option>
                                    <option value="3">半</option>
                                    <option value="4">正常</option>
                                </select>
                            </td>
                            <!-- 數量 -->
                            <td class="align-middle">
                                <div class="d-flex flex-lg-row align-items-center">
                                    <button class="btn p-1 dash-btn" type="button">
                                        <i class="bi bi-dash-lg"></i>
                                    </button>
                                    <select
                                        class="form-select text-center border-1 bg-transition text-darkred rounded"
                                        aria-label="Default select example">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <button class="btn p-1 plus-btn" type="button">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                            </td>
                            <!-- 小計 -->
                            <td class="align-middle text-end p-3">
                                <span class="p-3" value="55">55</span>
                            </td>
                            <!-- 變更 -->
                            <td class="align-middle">
                                <div class="d-flex flex-xl-column align-items-center">
                                    <!-- 收藏 -->
                                    <button class="btn border-0" type="button" title="加入收藏商品">
                                        <i class="bi bi-heart"></i>
                                        <span class="d-none">收藏</span>
                                        <!-- 刪除商品 -->
                                        <button class="btn border-0" type="button" title="刪除商品">
                                            <i class="bi bi-trash"></i>
                                            <span class="d-none">刪除</span>
                                        </button>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- 2 -->
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
                                        <img src="images/drink1.jpg" alt="手熬薏仁湯圖" />
                                    </div>
                                    <!-- 商品名稱 -->
                                    <h3 class="fs-6 text-darkred text-start lh-base">手熬薏仁湯</h3>
                                </a>
                            </td>
                            <!-- 規格 -->
                            <td class="align-middle">
                                <select
                                    class="form-select text-center border-1 bg-transition text-darkred rounded"
                                    aria-label="select-list">
                                    <!-- <option selected>請選擇</option> -->
                                    <option value="1">瓶</option>
                                    <option value="2" selected="">大</option>
                                    <option value="3">中</option>
                                </select>
                            </td>
                            <!-- 甜度 -->
                            <td class="align-middle">
                                <select
                                    class="form-select text-center border-1 bg-transition text-darkred rounded"
                                    aria-label="select-list">
                                    <!-- <option selected>請選擇</option> -->
                                    <option value="1" selected>固定</option>
                                    <option value="2">微</option>
                                    <option value="3">半</option>
                                    <option value="4">正常</option>
                                </select>
                            </td>
                            <!-- 數量 -->
                            <td class="align-middle">
                                <div class="d-flex flex-lg-row align-items-center">
                                    <button class="btn p-1 dash-btn" type="button">
                                        <i class="bi bi-dash-lg"></i>
                                    </button>
                                    <select
                                        class="form-select text-center border-1 bg-transition text-darkred rounded"
                                        aria-label="Default select example">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <button class="btn p-1 plus-btn" type="button">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                            </td>
                            <!-- 小計 -->
                            <td class="align-middle text-end p-3">
                                <span class="p-3" value="55">55</span>
                            </td>
                            <!-- 變更 -->
                            <td class="align-middle">
                                <div class="d-flex flex-xl-column align-items-center">
                                    <!-- 收藏 -->
                                    <button class="btn border-0" type="button" title="加入收藏商品">
                                        <i class="bi bi-heart"></i>
                                        <span class="d-none">收藏</span>
                                        <!-- 刪除商品 -->
                                        <button class="btn border-0" type="button" title="刪除商品">
                                            <i class="bi bi-trash"></i>
                                            <span class="d-none">刪除</span>
                                        </button>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- 3 -->
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
                                        <img src="images/drink1.jpg" alt="手熬薏仁湯圖" />
                                    </div>
                                    <!-- 商品名稱 -->
                                    <h3 class="fs-6 text-darkred text-start lh-base">手熬薏仁湯</h3>
                                </a>
                            </td>
                            <!-- 規格 -->
                            <td class="align-middle">
                                <select
                                    class="form-select text-center border-1 bg-transition text-darkred rounded"
                                    aria-label="select-list">
                                    <!-- <option selected>請選擇</option> -->
                                    <option value="1">瓶</option>
                                    <option value="2" selected="">大</option>
                                    <option value="3">中</option>
                                </select>
                            </td>
                            <!-- 甜度 -->
                            <td class="align-middle">
                                <select
                                    class="form-select text-center border-1 bg-transition text-darkred rounded"
                                    aria-label="select-list">
                                    <!-- <option selected>請選擇</option> -->
                                    <option value="1" selected>固定</option>
                                    <option value="2">微</option>
                                    <option value="3">半</option>
                                    <option value="4">正常</option>
                                </select>
                            </td>
                            <!-- 數量 -->
                            <td class="align-middle">
                                <div class="d-flex flex-lg-row align-items-center">
                                    <button class="btn p-1 dash-btn" type="button">
                                        <i class="bi bi-dash-lg"></i>
                                    </button>
                                    <select
                                        class="form-select text-center border-1 bg-transition text-darkred rounded"
                                        aria-label="Default select example">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <button class="btn p-1 plus-btn" type="button">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                            </td>
                            <!-- 小計 -->
                            <td class="align-middle text-end p-3">
                                <span class="p-3" value="55">55</span>
                            </td>
                            <!-- 變更 -->
                            <td class="align-middle">
                                <div class="d-flex flex-xl-column align-items-center">
                                    <!-- 收藏 -->
                                    <button class="btn border-0" type="button" title="加入收藏商品">
                                        <i class="bi bi-heart"></i>
                                        <span class="d-none">收藏</span>
                                        <!-- 刪除商品 -->
                                        <button class="btn border-0" type="button" title="刪除商品">
                                            <i class="bi bi-trash"></i>
                                            <span class="d-none">刪除</span>
                                        </button>
                                    </button>
                                </div>
                            </td>
                        </tr>
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
@endsection