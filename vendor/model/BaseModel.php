<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/7
 * Time: 10:24
 */
namespace Model;
class BaseModel extends \Illuminate\Database\Eloquent\Model{

    public function scopewithonly($query, $relation, Array $columns)
    {
        return $query->with([$relation => function ($query) use ($columns){
            $query->select(array_merge(['id'], $columns));
        }]);
    }

    public function get_Transaction_obj(){
        return parent::$resolver->connection();///返回连接的实例
    }
}