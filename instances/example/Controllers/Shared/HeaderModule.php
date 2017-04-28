<?php

namespace Example\Controllers\Shared;

class HeaderModule extends \Sifo\Controller\Controller
{
    public function build()
    {
        $this->setLayout('shared/header.tpl');
    }
}
