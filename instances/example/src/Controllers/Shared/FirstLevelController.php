<?php

namespace Example\Controllers\Shared;

use Sifo\Controller\Controller;
use Sifo\Exception\Http\Forbidden;

abstract class FirstLevelController extends Controller
{
    abstract public function buildCommon();

    public function build()
    {
        // Common actions go here:
        if ($this->requiresAuth())
        {
            if (!$this->isLogged())
            {
                throw new Forbidden('Authentication needed first.');
            }
        }

        // Common modules to all parent controllers.
        $this->addModule('head', HeadModule::class);
        $this->addModule('system_messages', SystemMessagesModule::class);
        $this->addModule('header', HeaderModule::class);
        $this->addModule('footer', FooterModule::class);

        // Then execute children (may overwrite values)
        return $this->buildCommon();
    }

    /**
     * Determines if a class requires authentication before being executed.
     *
     * @param string $classname Optional parameter. Name of the class you want to check. Leave unset to use executing class.
     *
     * @return boolean
     */
    protected function requiresAuth($classname = null)
    {
        if (null === $classname)
        {
            $classname = get_class($this);
        }

        // Reimplement this in every child instance.
        return false;
    }

    /**
     * Determines whether the user is correctly logged in.
     *
     * @return boolean
     */
    protected function isLogged()
    {
        return true;
    }
}
