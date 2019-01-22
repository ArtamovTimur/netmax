<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BinaryTree extends Model
{
    private $leg = 1;
    public $data = [];

    public function __construct($uid, $parent_id)
    {
//        $this->getLeg($uid);
//        $this->add($uid, $parent_id);

    }

    public function add($uid, $parent_id)
    {
        return DB::table('binary_trees')
            ->insert([
                'uid' => $uid,
                'parent_user_id' => $parent_id,
                'leg' => $this->leg,
                'hash' => str_random(20)
            ]);
    }

    public function getLeg($uid)
    {
        $left = DB::table('binary_trees')
            ->where('uid', '=', $uid)
            ->where('leg', '=', 1)
            ->get()->count();
        $right = DB::table('binary_trees')
            ->where('uid', '=', $uid)
            ->where('leg', '=', 2)
            ->get()->count();
        if($left > $right){
            $this->leg = 2;
        }elseif($right > $left) {
            $this->leg = 1;
        }
    }
    public function go()
    {
        $data = self::getUserChilds(19);
        $this->getChilds($data);
        var_dump($this->data);
    }
    public static function getUserChilds($uid)
    {
        return DB::table('binary_trees')
            ->where('parent_user_id', '=', $uid)
            ->get();
    }

    public function getChilds($arr){

        if(!empty($arr)){
            for($i = 0; $i <= count($arr)-1; $i++){
                $this->data[] = self::getUserChilds($arr[$i]->parent_user_id);
                self::getChilds($this->data);
            }
        }

    }
}
