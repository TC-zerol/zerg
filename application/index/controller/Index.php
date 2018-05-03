<?php
/**
 * Created by PhpStorm.
 * User: 81088
 * Date: 2018/5/3
 * Time: 23:06
 */

namespace app\index\controller;


use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}