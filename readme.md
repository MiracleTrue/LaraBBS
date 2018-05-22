必备插件

1.安装 Debugbar
使用 Composer 安装：
composer require "barryvdh/laravel-debugbar:~3.1" --dev

生成配置文件，存放位置 config/debugbar.php：
php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"

打开 config/debugbar.php，将 enabled 的值设置为：
'enabled' => env('APP_DEBUG', false),


2.导航的 Active 状态
composer require "hieu-le/active:~3.5"
函数:
function active_class($condition, $activeClass = 'active', $inactiveClass = '')
使用:
{{ active_class((if_route('category.show') && if_route_param('category', 1))) }}

3. 安装 HTMLPurifier for Laravel 5 ( XSS攻击 用户提交数据过滤器)
使用 Composer 安装：
composer require "mews/purifier:~2.0"
命令行下运行
php artisan vendor:publish --provider="Mews\Purifier\PurifierServiceProvider"




