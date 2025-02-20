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
                <table class="table table-hover text-center">
                    <thead class="text-center">
                        <tr>
                            <!-- <tr class="bgc-lotus-a"> -->
                            <th><span class="d-none">選取</span></th>
                            <th scope="col" class="col-7">商品資料</th>
                            <th scope="col" class="col-1">規格</th>
                            <th scope="col" class="col-2">數量</th>
                            <th scope="col" class="col-1">小計</th>
                            <th scope="col" class="col-1">變更</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- 選取 -->
                            <td class="align-middle">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
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
                            <!-- 數量 -->
                            <td class="align-middle">
                                <div class="d-flex allign-items-center">
                                    <button class="btn dash-btn" type="button">
                                        <i class="bi bi-dash-lg"></i>
                                    </button>
                                    <select
                                        class="form-select text-center border-1 bg-transition text-darkred rounded"
                                        aria-label="Default select example">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <button class="btn plus-btn" type="button">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                            </td>
                            <!-- 小計 -->
                            <td class="align-middle">
                                <span value="55">55</span>
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
                        <tr>
                            <!-- 選取 -->
                            <td class="align-middle">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
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
                            <!-- 數量 -->
                            <td class="align-middle">
                                <div class="d-flex allign-items-center">
                                    <button class="btn dash-btn" type="button">
                                        <i class="bi bi-dash-lg"></i>
                                    </button>
                                    <select
                                        class="form-select text-center border-1 bg-transition text-darkred rounded"
                                        aria-label="Default select example">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <button class="btn plus-btn" type="button">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                            </td>
                            <!-- 小計 -->
                            <td class="align-middle">
                                <span value="55">55</span>
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
                        <tr>
                            <!-- 選取 -->
                            <td class="align-middle">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
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
                            <!-- 數量 -->
                            <td class="align-middle">
                                <div class="d-flex allign-items-center">
                                    <button class="btn dash-btn" type="button">
                                        <i class="bi bi-dash-lg"></i>
                                    </button>
                                    <select
                                        class="form-select text-center border-1 bg-transition text-darkred rounded"
                                        aria-label="Default select example">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <button class="btn plus-btn" type="button">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                            </td>
                            <!-- 小計 -->
                            <td class="align-middle">
                                <span value="55">55</span>
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
                <div class="text-end bgc-lotus-a p-3">
                    <span class="text-darkred me-3">結帳金額</span>
                    <span class="text-darkred fs-4 card-money-text">165</span>
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
