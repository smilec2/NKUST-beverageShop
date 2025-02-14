<!-- 登入表單 -->
<div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5 text-darkred" id="exampleModalLabel">
                    請先登入
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="text-center justify-content-center">
                <div class="modal-body h3 py-4 text-darkred">會員登入</div>
                <div class="modal-body">
                    <form action="#" method="post" class="px-3">
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
                        <div class="form-check">
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input
                                        class="form-check-input is-invalid ms-3"
                                        type="checkbox"
                                        value="記住我"
                                        id="rememberMe"
                                        aria-describedby="rememberMeFeedback" />
                                    <label class="form-check-label" for="rememberMe"> 記住我 </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input is-invalid ms-3"
                                        type="checkbox"
                                        value="保持登入"
                                        id="stayLoggedIn"
                                        aria-describedby="stayLoggedInFeedback" />
                                    <label class="form-check-label" for="stayLoggedIn"> 保持登入 </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input is-invalid ms-3"
                                        type="checkbox"
                                        value="忘記密碼"
                                        id="forgotPassword"
                                        aria-describedby="forgotPasswordFeedback" />
                                    <label class="form-check-label" for="forgotPassword">
                                        忘記密碼
                                    </label>
                                </div>
                            </div>
                            <div class="mb-4 mt-3">
                                <button class="btn btn-primary" type="submit">登入</button>
                                <button class="btn btn-primary" type="reset">清除</button>
                            </div>
                            <div class="mt-4 text-darkred">
                                還沒有帳號嗎？
                                <a
                                    id="btn-switch-register"
                                    href="javascript:;"
                                    data-bs-toggle="modal"
                                    data-bs-target="#exampleModalRegister"
                                    >我要註冊</a
                                >
                            </div>
                        </div>
                    </form>
                    <div class="position-relative my-4 text-center">
                        <hr />
                        <span
                            class="position-absolute top-50 start-50 translate-middle bg-white px-2 text-darkred">
                            使用其他帳號登入
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