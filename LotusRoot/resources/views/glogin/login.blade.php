<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <meta name="referrer"
          content="strict-origin-when-cross-origin">
    <meta name="Cross-Origin-Opener-Policy"
          content="same-origin-allow-popups">

    <title>JWT Login</title>

    <script src="https://accounts.google.com/gsi/client"
            async
            defer></script>
</head>

<body>
    <script>
        function handleCredentialResponse(response) {
            console.log("Encoded JWT ID: " + response.credential);

            const params = new URLSearchParams({
                Token: response.credential,
            });
            const url = new URL('http://localhost:8080/api/login/auth/google/jwt');

            url.search = params;

            // 使用 fetch 函數發送 GET 請求
            fetch(url.href)
                .then(response => {
                    // 檢查回應的狀態碼
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    // 將回應解析為 JSON
                    return response.json();
                })
                .then(data => {
                    // 將 JSON 資料輸出到控制台
                    console.log(data);
                    console.log('Welcome.');
                })
                .catch(error => {
                    // 捕獲錯誤並輸出到控制台
                    console.error('There was a problem with the fetch operation:', error);
                });
        }

        window.onload = function() {
            google.accounts.id.initialize({
                client_id: 'your-client-id',
                callback: handleCredentialResponse
            });
            google.accounts.id.renderButton(
                document.getElementById("buttonDiv"), {
                    theme: "outline",
                    size: "large"
                }
            );
            google.accounts.id.prompt();
        }
    </script>
    <div id="buttonDiv"></div>
</body>

</html>