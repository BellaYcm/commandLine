<?php
    /**
     * Created by PhpStorm.
     * User: sunke
     * Date: 2016/7/20
     * Time: 17:06
     */
    $t = token_get_all("<?php \$a=123;echo \$a; ?>");
    var_dump($t);