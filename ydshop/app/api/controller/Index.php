<?php
declare (strict_types = 1);

namespace app\api\controller;
use app\BaseController;
use  app\service\BannerService;
use think\facade\View;


class Index extends  BaseController
{
    public function index()
    {
        //return download(root_path('/public/static/').'111.jpg', 'my.jpg');

         View::assign('name','ThinkPHP');
        return View::fetch('index');
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
}
