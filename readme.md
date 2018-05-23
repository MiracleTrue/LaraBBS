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


-.Redis 队列驱动器依赖
composer require "predis/predis:~1.0"


-.Horizon 是 Laravel 生态圈里的一员，为 Laravel Redis 队列提供了一个漂亮的仪表板，允许我们很方便地查看和管理 Redis 队列任务执行的情况。
使用 Composer 安装：
composer require "laravel/horizon:~1.0"
安装完成后，使用 vendor:publish Artisan 命令发布相关文件：
php artisan vendor:publish --provider="Laravel\Horizon\HorizonServiceProvider"
分别是配置文件 config/horizon.php 和存放在 public/vendor/horizon 文件夹中的 CSS 、JS 等页面资源文件。
Horizon 是一个监控程序，需要常驻运行，我们可以通过以下命令启动：
php artisan horizon
安装了 Horizon 以后，我们将使用 horizon 命令来启动队列系统和任务监控，无需使用 queue:listen。


