<?php
declare (strict_types = 1);

namespace app\api\controller;
use app\BaseController;
use  app\service\BannerService;
use think\facade\View;
use think\facade\Cache;
use app\validate\User;
use think\exception\ValidateException;
use think\cache\driver\Redis;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

class Index extends  BaseController
{
    public function index()
    {
        //return download(root_path('/public/static/').'111.jpg', 'my.jpg');

         //View::assign('name','ThinkPHP');
        //return View::fetch('index');
        //validate();
       /*event('UserLogin');
        // 返回数据
      $result = [
            'banner_list'		=> BannerService::Banner(),
        ];
        return json($result);*/
    }

    public function admin(){
        echo \think\facade\Route::buildUrl();
        halt('amdin');
    }


    public function test()
    {
        Cache::set('age',66);
      return  Cache::get('age');
    }

    public function sms()
    {
        AlibabaCloud::accessKeyClient('LTAI5tF2iBbrGBzbUg1644Vu', 'PXTObCa892X9qXPphw0KYRvPIbw59K')
            ->regionId('ap-northeast-1')
            ->asDefaultClient();

        try {
            $result = AlibabaCloud::rpc()
                ->product('Dysmsapi')
                // ->scheme('https') // https | http
                ->version('2017-05-25')
                ->action('SendSms')
                ->method('POST')
                ->host('dysmsapi.aliyuncs.com')
                ->options([
                    'query' => [
                        'PhoneNumbers' => "15215186296",
                        'SignName' => "阿里大于测试专用",
                        'TemplateCode' => "SMS_216828376",
                        'TemplateParam' => "{\"code\":\"123456\"}",
                    ],
                ])
                ->request();
            print_r($result->toArray());
        } catch (ClientException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
        } catch (ServerException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
        }
    }
}
