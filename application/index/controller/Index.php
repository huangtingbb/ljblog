<?php

namespace app\index\controller;

use think\Controller;
use think\Exception;

class Index extends Controller
{
    public function initialize()
    {
        echo "<pre>";
        print_r(request());
    }

    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function test()
    {
        try{
            $user = db('user')->find();
        } catch(Exception $e){
            echo $e->getMessage();
        }

        return view('', ['user' => $user]);
    }

    public function shortUrl()
    {
        echo $this->request->url(true);
    }

    public function code62($x)
    {
        $show = '';
        while($x > 0){
            $s = $x % 62;
            if($s > 35){
                $s = chr($s + 61);
            } else if($s > 9 && $s <= 35){
                $s = chr($s + 55);
            }
            $show .= $s;
            $x = floor($x / 62);
        }
        return $show;
    }

    public function login()
    {
        return view();
    }

    public function register()
    {

        return view();
    }

    public function arr()
    {

    }

}
