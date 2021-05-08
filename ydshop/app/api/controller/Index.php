<?php
declare (strict_types = 1);

namespace app\api\controller;
use app\BaseController;
class Index extends  BaseController
{
    public function index()
    {
        echo $action = $this->request->action().PHP_EOL;
        echo $path = $this->app->getBasePath();
    }
}
