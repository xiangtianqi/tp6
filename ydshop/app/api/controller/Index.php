<?php
declare (strict_types = 1);

namespace app\api\controller;
use app\BaseController;
use  app\service\BannerService;


class Index extends  BaseController
{
    public function index()
    {
        event('UserLogin');
        // 返回数据
        $result = [
            'banner_list'		=> BannerService::Banner(),
        ];
        return json($result);
    }

    public function admin(){
        halt('amdin');
    }
}
