<?php

namespace Example;

use Sifo\Controller\Controller;

class HomeOldController extends Controller
{
    public function build()
    {
        $this->setLayout('empty.tpl');
        $model = new HomeIndexModel();

        $example_content = "<p>This is an alternative home controller</p>";
        $example_content .= "<p>" . $model->getData() . "</p>";

        $this->assign('content', $example_content);
    }

}
