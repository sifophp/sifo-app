<?php

namespace Example\Controllers\Home;

use Example\Controllers\Shared\FirstLevelController;
use Sifo\FlashMessages;

class HomeController extends FirstLevelController
{
    /**
     * Because this class is extending from SharedFirstLevelController instead of Controller,
     * some modules are executed in first place, like: head, header or footer.
     *
     * See template for inclusion.
     */
    public function buildCommon()
    {
        $smileys = array(
            ':-)',
            ':-(',
            '¬¬',
            'xD',
            ':_(',
            ':-0',
            '=)'
        );

        // Set a system message
        FlashMessages::set('<strong>Installation correct!</strong> <small>(This is an example OK message.)</small>', FlashMessages::MSG_OK);

        // Pass to the template a random smiley:
        $rand = array_rand($smileys, 1);
        $this->assign('mood', $smileys[$rand]);

        // Note: To show the paginator, you should use the following smarty function in your template: {pagination data=$result}
        $this->setLayout('home/index.tpl');
    }

    public function getCacheDefinition()
    {
        return false;
    }
}
