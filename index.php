<?php
    /**
     * Created by PhpStorm.
     * User: sunke
     * Date: 2016/7/15
     * Time: 16:37
     */
    $a = "123";
    $b=&$a;
    $b=234;
    var_dump($a);