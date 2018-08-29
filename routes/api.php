<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

$api = app('Dingo\Api\Routing\Router');


$api->version('v1', [
    'namespace' => 'App\Http\Controllers\Api',
    'middleware' => ['serializer:array', 'bindings']
], function ($api) {

    $api->group([
        'middleware' => 'api.throttle',
        'limit' => config('api.rate_limits.sign.limit'),
        'expires' => config('api.rate_limits.sign.expires'),
    ], function ($api) {
        /*游客可以访问的接口*/

        // 短信验证码
        $api->post('verificationCodes', 'VerificationCodesController@store')->name('api.verificationCodes.store');
        // 用户注册
        $api->post('users', 'UsersController@store')->name('api.users.store');
        // 图片验证码
        $api->post('captchas', 'CaptchasController@store')->name('api.captchas.store');

        // 登录
        $api->post('authorizations', 'AuthorizationsController@store')->name('api.authorizations.store');/*登录授权token*/
        $api->put('authorizations/current', 'AuthorizationsController@update')->name('api.authorizations.update');/*刷新授权token*/
        $api->delete('authorizations/current', 'AuthorizationsController@destroy')->name('api.authorizations.destroy');/*删除授权token*/

        // 话题分类
        $api->get('categories', 'CategoriesController@index')->name('api.categories.index');/*获取话题分类*/

        // 话题
        $api->get('topics', 'TopicsController@index')->name('api.topics.index');/*获取话题列表*/
        $api->get('users/{user}/topics', 'TopicsController@userIndex')->name('api.users.topics.index');/*获取某用户话题列表*/
        $api->get('topics/{topic}', 'TopicsController@show')->name('api.topics.show');/*获取话题详情*/


        /*需要 token 验证的接口*/
        $api->group(['middleware' => 'api.auth'], function ($api) {
            // 用户
            $api->get('user', 'UsersController@me')->name('api.user.show');/*当前登录用户信息*/
            $api->patch('user', 'UsersController@update')->name('api.user.update');/*编辑登录用户信息*/

            // 图片资源
            $api->post('images', 'ImagesController@store')->name('api.images.store');/*用户上传图片*/

            // 话题
            $api->post('topics', 'TopicsController@store')->name('api.topics.store');/*发布话题*/
            $api->patch('topics/{topic}', 'TopicsController@update')->name('api.topics.update');/*编辑话题*/
            $api->delete('topics/{topic}', 'TopicsController@destroy')->name('api.topics.destroy');/*删除话题*/
            $api->post('topics/{topic}/replies', 'RepliesController@store')->name('api.topics.replies.store');/*话题回复*/
            $api->delete('topics/{topic}/replies/{reply}', 'RepliesController@destroy')->name('api.topics.replies.destroy');/*话题删除回复*/


        });
    });


    //获取当前版本号
    $api->get('version', function () {
        return response('this is version v1');
    });
});




//
//$api->version('v1', function ($api) {
//
//    // 短信验证码
//    $api->post('verificationCodes', 'VerificationCodesController@store')->name('api.verificationCodes.store');
//
//
//
//    $api->get('version', function () {
//        return response('this is version v1');
//    });
//});
//
//$api->version('v2', function ($api) {
//    $api->get('version', function () {
//        return response('this is version v2');
//    });
//});
