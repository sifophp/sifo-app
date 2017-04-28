<?php

namespace Example\Controllers\Shared;

use Sifo\Metadata;

class HeadModule extends \Sifo\Controller\Controller
{

    protected $css_groups = array('default', 'print');
    protected $js_groups = array('default');

    public function build()
    {
        $this->setLayout('shared/head.tpl');

        $params = $this->getParams();
        $this->assign('path', $params['path']);

        if (null == Metadata::get())
        {
            Metadata::setKey('default');
        }

        $this->assign('metadata', Metadata::get());
    }
}
