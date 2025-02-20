# 如何開啟使用本專案

1. 使用終端機下載本專案
```git clone  https://github.com/zongweichen/NKUST-beverageShop.git```

2. 使用終端機進入到本專案檔案夾
```cd NKUST-beverageShop/LotusRoot ```

3. 建立本地初始環境，在終端機輸入
```composer install ```

4. 初始化環境檔，終端機輸入
```cp .env.example .env ```

5. 設定資料庫連線
```
FILESYSTEM_DISK=public

DB_CONNECTION=mysql //輸入自己使用的資料庫
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lotusroot //輸入設定的database
DB_USERNAME=user
DB_PASSWORD=password
```

>如果是MAC使用者，需要更改檔案權限
>終端機輸入：```chmod -R 777 storage bootstrap/cache```
>這個指令會賦予這兩個資料夾「讀、寫、執行」的權限給所有人。

6. 產生專案用的 APP_KEY，終端機輸入
```php artisan key:generate```

## 注意伺服器的位置
* 使用XAMPP時，需要注意Apache設定localhost位址，需要設定成本專案public檔案夾位置
* 或者修改APP_url到Apache指定的位址
需要修改```httpd.conf```
將其修改至需求本專案的位置
```
#預設
# DocumentRoot "/Applications/XAMPP/xamppfiles/htdocs"
# <Directory "/Applications/XAMPP/xamppfiles/htdocs">
```

### 在瀏覽器輸入localhost，看到以下畫面就成功囉
![首頁](mainPage.png)