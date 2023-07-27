# Laravel 筆記

## 基本流程

- 建立Model、Controller、migration
- 設定migration(建立資料欄位)
- 將migration推上資料庫(migrate)
- 設定路由routes/web.php
- 設定Controller
- 設定頁面views

## laravel 常用指令

```bash
# 執行開發伺服器
php artisan serve

# migrate
php artisan migrate
php artisan migrate:status
php artisan migrate:rollback
php aritsan migrate:reset

# migration
# 建立migration
php artisan make:migration create_posts_table

# controller
# 建立controller
php artisan make:controller PostController
php artisan make:controller PostController --resource

# model
# 建立model(首字大寫並且單數)
php artisan make:model Post

php artisan make:model Post -mcr

# m:migration , c:controller, r:resource

# route
php artisan route:list
```
## Laravel 9 安裝 starter kit 疑難排解

### VITE 問題
#### step 1
```bash=
npm install --save-dev vite laravel-vite-plugin
npm install --save-dev @vitejs/plugin-vue
```
#### step 2
修改package.json，將scripts內的dev改成vite

```json=
"scripts": {
    "dev": "vite", 
}
```

### step 3
重新執行 run dev
```bash=
npm run dev
```