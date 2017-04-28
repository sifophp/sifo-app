<?php

namespace Example\Controllers\Shared;

use Sifo\Controller\Controller;

class FooterModule extends Controller
{
    public function build()
    {
        $this->setLayout('shared/footer.tpl');
    }
}
