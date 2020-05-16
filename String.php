<?php
    $en_str = "Hello World";
    $cn_str = "你好世界";
    $num = "1234567890";
    echo "原字符串为:<br>".$en_str."<br>".$cn_str."<br>";
    echo "翻转字符串为:<br>".strrev($en_str)."<br>";
    echo "中文截取：<br>".mb_substr($cn_str,1,2,'utf-8')."<br>";
    echo "字符串分割:<br>";
    print_r(explode(" ",$en_str));
    echo "<br>";
    echo "字符串数组合并:<br>".implode("+",explode(" ",$en_str))."<br>";
    echo "数字逗号隔开:<br>".number_format($num)."<br>";
?>