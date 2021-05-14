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
        Cache::set('name','xd');
      return  Cache::get('name');
    }
}
