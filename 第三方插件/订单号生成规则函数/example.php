<?php
/**
 * Created by PhpStorm.
 * User: YUXIANG
 * Date: 2018/3/2
 * Time: 9:29
 */


/**
 * 订单号生成四种方式
 * @param
 * @return mixed
 */
$danhao = date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);///2018030257818
$danhao = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);//2018030250555510
//生成24位唯一订单号码，格式：YYYY-MMDD-HHII-SS-NNNN,NNNN-CC，其中：YYYY=年份，MM=月份，DD=日期，HH=24格式小时，II=分，SS=秒，NNNNNNNN=随机数，CC=检查码



$order_date = date('Y-m-d');

//订单号码主体（YYYYMMDDHHIISSNNNNNNNN）

$order_id_main = date('YmdHis') . rand(10000000,99999999);

//订单号码主体长度

$order_id_len = strlen($order_id_main);

$order_id_sum = 0;

for($i=0; $i<$order_id_len; $i++){

    $order_id_sum += (int)(substr($order_id_main,$i,1));

}

//唯一订单号码（YYYYMMDDHHIISSNNNNNNNNCC）

$order_id = $order_id_main . str_pad((100 - $order_id_sum % 100) % 100,2,'0',STR_PAD_LEFT);//"201803020924287144653326"

$yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
$orderSn = $yCode[intval(date('Y')) - 2011] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));//H302540073666551