<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\ClientException;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test()
    {

//        $sms = app('easysms');
//        try
//        {
//            $result = $sms->send('18600982820', [
//                'template' => 'SMS_123736619',
//                'data' => [
//                    'date' => now('Asia/Shanghai')->toDateTimeString(),
//                    'order_sn' => 123456489489
//                ],
//            ]);
//            dd($result);
//        } catch (ClientException $exception)
//        {
//            dd($exception);
//            $response = $exception->getResponse();
//            $result = json_decode($response->getBody()->getContents(), true);
//            dd($result);
//        }

        $sms = app('easysms');
        try {
            $sms->send(18600982820, [
                'content'  => '【Dima商城】您的验证码是6666。如非本人操作，请忽略本短信',
            ]);
        } catch (\Exception $exception) {
            dd($exception->getExceptions());
            dd($exception->getResults());
        }

    }
}
