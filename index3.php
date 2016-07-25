<?php
    /**
     * Created by PhpStorm.
     * User: sunke
     * Date: 2016/7/22
     * Time: 14:28
     */

    declare(ticks = 1); #没执行一次低级语句检查一次该进程是否有未处理的信号
    pcntl_signal(SIGINT, function () {
        exit("有未处理的信号被触发");
    });#ctrl+c 关闭后会触发
    pcntl_alarm(1);
    for ($i = 1 ; $i < 1000000 ; $i++) {
        echo $i;
        sleep(1);
    }