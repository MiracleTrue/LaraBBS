必备插件

-.安装 Debugbar
使用 Composer 安装：
composer require "barryvdh/laravel-debugbar:~3.1" --dev

生成配置文件，存放位置 config/debugbar.php：
php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"

打开 config/debugbar.php，将 enabled 的值设置为：
'enabled' => env('APP_DEBUG', false),


-.导航的 Active 状态
composer require "hieu-le/active:~3.5"
函数:
function active_class($condition, $activeClass = 'active', $inactiveClass = '')
使用:
{{ active_class((if_route('category.show') && if_route_param('category', 1))) }}


-. 安装 HTMLPurifier for Laravel 5 ( XSS攻击 用户提交数据过滤器)
使用 Composer 安装：
composer require "mews/purifier:~2.0"
命令行下运行
php artisan vendor:publish --provider="Mews\Purifier\PurifierServiceProvider"


-.图片验证码扩展包 mews/captcha
使用 Composer 安装：
composer require "mews/captcha:~2.0"
运行以下命令生成配置文件 config/captcha.php：
php artisan vendor:publish --provider='Mews\Captcha\CaptchaServiceProvider'


-.安装 Guzzle HTTP 请求依赖包
composer require "guzzlehttp/guzzle:~6.3"


-.安装 PinYin 基于 CC-CEDICT 词典的中文转拼音工具，是一套优质的汉字转拼音解决方案。
composer require "overtrue/pinyin:~3.0"




