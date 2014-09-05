<?php
namespace Example;

class HomeIndexController extends SharedFirstLevelController
{
    /**
     * If you expect this controller to output a json response.
     *
     * @var boolean
     */
    public $is_json = false;

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
        \Sifo\FlashMessages::set('<strong>Installation correct!</strong> <small>(This is an example OK message.)</small>', \Sifo\FlashMessages::MSG_OK);

        // Pass to the template a random smiley:
        $rand = array_rand($smileys, 1);
        $this->assign('mood', $smileys[$rand]);

        // Note: To show the paginator, you should use the following smarty function in your template: {pagination data=$result}
        $this->setLayout('home/index.tpl');
    }

    public function getCacheDefinition()
    {
        // No caching:
        return false;

        // The language is added automatically in the cache name from the Controller.
        $cache_name = 'home';

        // Caching for the default time:
        return $cache_name;

        // Caching with custom expiration , 900 seconds.
        return array('name' => $cache_name, 'expiration' => 900);
    }
}

?>
