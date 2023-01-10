<?php 

namespace System\Traits;

trait View 
{
    protected function View($dir , $vars = null)
    {
        $dir = str_replace('.' , '/' , $dir);
        if($vars)
        extract($vars);
        $path = realpath(dirname(__FILE__) . "/../../application/view/".$dir.".php");
        if(file_exists($path))
        {
            return require_once($path);
        }
        else
        echo "this view [".$dir."] not exist!!!";

    }
}