

<!-- 註冊表單 -->

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
                    <form id="registerForm" class="px-3">
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

        //點擊註冊按鈕，送出資料時
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // 防止表單自動提交

            //把表單裡的資料取出來
            const formData = {
                name: nameInput.value,
                email: emailInput.value,
                phone_number: phoneNumberInput.value,
                password: passwordInput.value,
                password_confirmation: confirmPasswordInput.value,  
            };
            //用fetch API 送出資料
            //模擬表單送出資料 post方法，按鈕也可以用這個方法
            const signUpURL = "{{route('user.signup')}}"

            fetch(signUpURL, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content, // 確保發送 CSRF token
                },
                body: JSON.stringify(formData), // 把表單資料轉換成 JSON 格式
            })
            //取得http response
            //這裡已經跟後端去溝通了
            .then(response => response.json())
            //取得後端回傳的資料
            .then(data => {
                // 清空錯誤訊息
                clearErrors();
                // 註冊成功就彈出顯示成功訊息
                if (data.success) {
                    alert("註冊成功！");
                    $('#ModalRegister').modal('hide');
                } else {
                    //失敗就顯示錯誤訊息
                    //data.errors 裝的是後端回傳的錯誤訊息 errors，是一個array
                    displayErrors(data.errors);
                }
            })
            //如果是server端發生錯誤，就會進到這個catch
            .catch(error => {
                console.error("錯誤:", error);
                alert("註冊發生錯誤，請稍後再試！");
            });
        });

        // 顯示錯誤訊息
        function displayErrors(errors) {
            //用迴圈取得每一個錯誤訊息
            for (const field in errors) {
                //取得錯誤訊息的元素<div class = error-name></div>"">
                const errorElement = document.getElementById(`error-${field}`);
                //如果有這個元素就把錯誤訊息放進去
                if (errorElement) {
                    //如果錯誤訊息不止一條，用<br>分開
                    const formattedErrors = errors[field].split(",").join('<br>');
                    errorElement.innerHTML = formattedErrors;
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