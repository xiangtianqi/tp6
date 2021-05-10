<?php
declare (strict_types = 1);

namespace app\listener;

class UserLogin
{
    /**
     * 事件监听处理
     *
     * @return mixed
     */
    public function handle($event)
    {
        //
        echo '事件监听'.PHP_EOL;
    }
}
