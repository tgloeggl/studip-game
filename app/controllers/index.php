<?php

class IndexController extends StudipController
{
    public function __construct($dispatcher)
    {
        parent::__construct($dispatcher);

        $this->plugin = $dispatcher->plugin;
    }

    function index_action()
    {

    }
}
