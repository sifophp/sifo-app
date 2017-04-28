<?php

namespace Example\Controllers\Shared;

use Sifo\Controller\Controller;
use Sifo\FlashMessages;

class SystemMessagesModule extends Controller
{
    public function build()
    {
        $this->setLayout('shared/system_messages.tpl');

        $this->assign('info_messages', FlashMessages::get(FlashMessages::MSG_INFO));
        $this->assign('ok_messages', FlashMessages::get(FlashMessages::MSG_OK));
        $this->assign('warning_messages', FlashMessages::get(FlashMessages::MSG_WARNING));
        $this->assign('ko_messages', FlashMessages::get(FlashMessages::MSG_KO));
    }
}
