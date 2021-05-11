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
        $this->sendSms();
        $this->sendEmail();

    }


    /*
     * 发送邮件
     */
    public function sendEmail(){
        echo '发送邮件处理';
    }

    /*
    * 发送短信
    */
    public function sendSms(){
        echo '发送短信处理';
    }

}
