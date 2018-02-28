<?php
function  ncPriceCalculate($n1,$symbol,$n2,$scale = '2'){
    $res = "";
    switch ($symbol){
        case "+"://加法
            $res = bcadd($n1,$n2,$scale);break;
        case "-"://减法
            $res = bcsub($n1,$n2,$scale);break;
        case "*"://乘法
            $res = bcmul($n1,$n2,$scale);break;
        case "/"://除法
            $res = bcdiv($n1,$n2,$scale);break;
        case "%"://求余、取模
            $res = bcmod($n1,$n2,$scale);break;
        default:
            $res = "";break;
    }
    return $res;
}
/**
 * 格式化一个数字为2位小数
 * @param
 * @return mixed
 */
function ncPriceFormat($price) {
    $price_format= number_format($price,2,'.','');
    return $price_format;
}
?>