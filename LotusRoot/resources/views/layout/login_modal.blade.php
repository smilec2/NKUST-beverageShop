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
                    <form action="/user/auth/signin" method="post" class="px-3">
                        @csrf
                        <div class="mb-3">
                            <input
                                class="form-control"
                                type="text"
                                name="email"
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
									<div class="row col justify-content-center align-items-center">
										<div class="form-check col-4 col-md-auto gx-1 text-start">
											<input
												class="form-check-input is-invalid ms-3"
												type="checkbox"
												value="記住我"
												id="rememberMe"
												aria-describedby="rememberMeFeedback" />
											<label class="form-check-label" for="rememberMe"> 記住我 </label>
										</div>
										<div class="form-check col-4 col-md-3 gx-1 text-start">
											<input
												class="form-check-input is-invalid ms-3"
												type="checkbox"
												value="保持登入"
												id="stayLoggedIn"
												aria-describedby="stayLoggedInFeedback" />
											<label class="form-check-label" for="stayLoggedIn"> 保持登入 </label>
										</div>
										<div class="form-check col-4 col-md-6 gx-md-1 text-start">
											<a href="###" class="float-end">忘記密碼</a>
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // 取得表單與輸入欄位
        const form = document.querySelector("form[action='/user/auth/signin']");
        const emailInput = form.querySelector("input[name='email']");
        const passwordInput = form.querySelector("input[name='password']");
        const rememberMeInput = form.querySelector("input#rememberMe");

        // 建立錯誤訊息容器
        const errorContainer = document.createElement("div");
        form.appendChild(errorContainer);

        // 監聽表單提交事件
        form.addEventListener("submit", function (event) {
            event.preventDefault(); // 阻止表單預設提交行為

            // 取得表單輸入資料
            const formData = {
                email: emailInput.value,
                password: passwordInput.value,
                rememberMe: rememberMeInput.checked ? "on" : "off"
            };

            // 發送 AJAX 請求
            fetch("/user/auth/signin", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(formData),
            })
            .then(response => response.json()) // 解析 JSON 回應
            .then(data => {
                errorContainer.innerHTML = ""; // 清空錯誤訊息

                if (data.success) {
                    alert("登入成功！");
                    window.location.href = data.redirect_url; // 依據後端回應的網址進行跳轉
                } else {
                    displayErrors(data.errors); // 顯示錯誤訊息
                }
            })
            .catch(error => {
                console.error("請求失敗", error);
                errorContainer.innerHTML = "<p class='text-danger'>登入發生錯誤，請稍後再試。</p>";
            });
        });

        // 顯示錯誤訊息
        function displayErrors(errors) {
            errorContainer.innerHTML = ""; // 清空錯誤訊息
            for (const key in errors) {
                const errorMsg = document.createElement("p");
                errorMsg.textContent = errors[key];
                errorMsg.classList.add("text-danger", "small");
                errorContainer.appendChild(errorMsg);
            }
        }
    });
</script>

