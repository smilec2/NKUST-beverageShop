@extends('layout.main')

@section("content")

<article id="edit-product-admin-page" class="py-7">
    <div class="container">
        <div class="text-center section-title mb-5">
            <h2>更改完成123</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="px-4 py-3 text-darkred h5">
                    
                    {{ csrf_field() }}
                    @if (session()->has('user_id'))
                        <form action="{{ route('editProfilePost') }}" method="post" enctype="multipart/form-data" class="p-3">
						@csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">使用者名稱</label>
                                <input type="text" class="form-control" id="username" name="username" 
                                       value="{{ old('username', $user->name ?? '') }}" required />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">電子郵件</label>
                                <input type="email" class="form-control" id="email" name="email" 
                                       value="{{ old('email', $user->email ?? '') }}" required />
                            </div>
                            <div class="mb-3">
                                <label for="mobile_phone" class="form-label">行動電話</label>
                                <input type="tel" class="form-control" id="mobile_phone" name="mobile_phone" 
                                       value="{{ old('mobile_phone', $user->phone_number ?? '') }}" required />
                            </div>
							<div class="mb-3">
							<label for="detailed_address" class="form-label">舊密碼</label>
							<input
								type="password"
								class="form-control"
								id="password"
								name="password"
								required />
						</div>
						<div class="mb-3">
							<label for="detailed_address" class="form-label">新密碼</label>
							<input
								type="password"
								class="form-control"
								id="password"
								name="dpassword"
								required />
						</div>
							<button type="submit" class="btn btn-danger">送出</button>
							<button type="reset" class="btn btn-secondary">清除</button>
                        </form>
                    @else
                        <p>請先登入</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</article>
<script>
    document.getElementById("editProfileForm").addEventListener("submit", function(event) {
        event.preventDefault(); // 阻止表單提交，改用 AJAX

        fetch("{{ route('editProfilePost') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                username: document.getElementById("username").value
            })
        })
        .then(response => response.json())
        .then(data => {
            alert("更新成功！");
            console.log(data); // 顯示伺服器回應
        })
        .catch(error => console.error("錯誤:", error));
    });
</script>

@endsection


