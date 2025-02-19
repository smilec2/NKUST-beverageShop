

<!-- 註冊表單 -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="modal fade" id="ModalRegister" tabindex="-1" aria-labelledby="ModalRegisterLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5 text-darkred" id="ModalRegisterLabel">會員註冊</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="text-center justify-content-center">
                <div class="modal-body h3 py-4 text-darkred">會員註冊</div>
                <div class="modal-body">
                    <form id="registerForm" action="/user/auth/signup" method="POST" class="px-3">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control" type="text" id="name" name="name" placeholder="請輸入使用者名稱" required />
                            <div class="text-danger small" id="error-name"></div>
                        </div>

                        <div class="mb-3">
                            <input class="form-control" type="email" id="email" name="email" placeholder="請輸入電子郵件" required />
                            <div class="text-danger small" id="error-email"></div>
                        </div>

                        <div class="mb-3">
                            <input class="form-control" type="tel" id="phone_number" name="phone_number" placeholder="請輸入行動電話" required />
                            <div class="text-danger small" id="error-phone_number"></div>
                        </div>

                        <div class="mb-3">
                            <input class="form-control" type="password" id="password" name="password" placeholder="請輸入密碼" required />
                            <div class="text-danger small" id="error-password"></div>
                        </div>

                        <div class="mb-3">
                            <input class="form-control" type="password" id="confirm_password" name="confirm_password" placeholder="請再次輸入密碼" required />
                            <div class="text-danger small" id="error-confirm_password"></div>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">註冊</button>
                            <button class="btn btn-secondary" type="reset">清除</button>
                        </div>
                    </form>
                    <div class="mt-4">
                        已經有帳號了嗎？
                        <a id="btn-switch-login" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-dismiss="modal">
                            我要登入
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("registerForm");
        const nameInput = document.getElementById("name");
        const emailInput = document.getElementById("email");
        const phoneNumberInput = document.getElementById("phone_number");
        const passwordInput = document.getElementById("password");
        const confirmPasswordInput = document.getElementById("confirm_password");

        form.addEventListener("submit", function(event) {
            event.preventDefault(); // 防止表單自動提交

            const formData = {
                name: nameInput.value,
                email: emailInput.value,
                phone_number: phoneNumberInput.value,
                password: passwordInput.value,
                password_confirmation: confirmPasswordInput.value,  // 確保這個欄位有傳送
            };

            // console.log(formData);  // 確認輸出的formData

            fetch("/user/auth/signup", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content, // 確保發送 CSRF token
                },
                body: JSON.stringify(formData), // 把表單資料轉換成 JSON 格式
            })
            .then(response => response.json())
            .then(data => {
                // 清空錯誤訊息
                clearErrors();

                if (data.success) {
                    alert("註冊成功！");
                    // 關閉彈出視窗
                    $('#ModalRegister').modal('hide');
                } else {
                    // 顯示錯誤訊息
                    displayErrors(data.errors);
                }
            })
            .catch(error => {
                console.error("錯誤:", error);
                alert("註冊發生錯誤，請稍後再試！");
            });
        });

        // 顯示錯誤訊息
        function displayErrors(errors) {
            for (const field in errors) {
                const errorElement = document.getElementById(`error-${field}`);
                if (errorElement) {
                    errorElement.innerText = errors[field].join(', ');
                }
            }
        }

        // 清空錯誤訊息
        function clearErrors() {
            document.querySelectorAll('.text-danger.small').forEach(element => {
                element.innerText = '';
            });
        }
    });
</script>