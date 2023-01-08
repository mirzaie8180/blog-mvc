<?php

namespace System\router;

class Routing
{

    private $current_route;

    public function __construct()
    {
        global $current_route;
        $this -> current_route = explode('/' , $current_route);
    }





}



