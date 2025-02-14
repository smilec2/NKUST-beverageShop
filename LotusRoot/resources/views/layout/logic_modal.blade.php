<!-- 註冊 -->
<div
    class="modal fade"
    id="exampleModalRegister"
    tabindex="-1"
    aria-labelledby="exampleModalRegisterLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5 text-darkred" id="exampleModalRegisterLabel">
                    會員註冊
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="text-center justify-content-center">
                <div class="modal-body h3 py-4 text-darkred">會員註冊</div>
                <div class="modal-body">
                    <form action="#" method="post" class="px-3">
                        <div class="mb-3">
                            <input
                                class="form-control"
                                type="text"
                                name="username"
                                placeholder="請輸入使用者名稱"
                                required />
                        </div>
                        <div class="mb-3">
                            <input
                                class="form-control"
                                type="email"
                                name="email"
                                placeholder="請輸入電子郵件"
                                required />
                        </div>
                        <div class="mb-3">
                            <input
                                class="form-control"
                                type="tel"
                                name="mobile_phone"
                                placeholder="請輸入行動電話"
                                pattern="[0-9]{2}[0-9]{2}[0-9]{3}[0-9]{3}"
                                required />
                        </div>
                        <div class="mb-3">
                            <input
                                class="form-control"
                                type="text"
                                name="detailed_address"
                                placeholder="請輸入詳細地址"
                                required />
                        </div>
                        <div class="mb-3">
                            <input
                                class="form-control"
                                type="text"
                                name="account"
                                placeholder="請輸入帳號"
                                required />
                        </div>
                        <div class="mb-3">
                            <input
                                class="form-control"
                                type="password"
                                name="password"
                                placeholder="請輸入密碼"
                                required />
                        </div>
                        <div class="mb-3">
                            <input
                                class="form-control"
                                type="password"
                                name="confirm_password"
                                placeholder="請再次輸入密碼"
                                required />
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">註冊</button>
                            <button class="btn btn-secondary" type="reset">清除</button>
                        </div>
                    </form>
                    <div class="mt-4">
                        已經有帳號了嗎？
                        <a
                            id="btn-switch-login"
                            href="javascript:;"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal"
                            data-bs-dismiss="modal">
                            我要登入
                        </a>
                    </div>
                    <div class="position-relative my-4 text-center">
                        <hr />
                        <span
                            class="position-absolute top-50 start-50 translate-middle bg-white px-2">
                            使用其他帳號註冊
                        </span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-3 py-2">
                        <a href="###" data-platform="Google">
                            <img class="rounded-circle btn btn-light" src="assets/images/Google.svg" />
                        </a>
                        <a href="###" data-platform="facebook">
                            <img class="rounded-circle btn btn-light" src="assets/images/fb.svg" />
                        </a>
                        <a href="###" data-platform="Line">
                            <img class="rounded-circle btn btn-light" src="assets/images/Line.svg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>