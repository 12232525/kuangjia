<?php
ini_set('date.timezone','Asia/Shanghai');
require 'model.php';
require 'export.php';
$export=new export();
$datas=\Model\S_info::orderBy("created_at","desc")->get();
if($datas){
    $datas=$datas->toArray();
}else{
    $datas=[];
}
$export->exports($datas);




?>