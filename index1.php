<?php
    /**
     * Created by PhpStorm.
     * User: sunke
     * Date: 2016/7/20
     * Time: 15:37
     */
    set_time_limit(0);
    ob_end_flush();
    for ($i = 0 ; $i < 10 ; $i++) {
        echo $i;
        flush();
        sleep(1);
    }