<?php
/**
 * Created by PhpStorm.
 * User: kanni
 * Date: 11/27/13
 * Time: 10:07 PM
 */

namespace Butenko\HomeBundle\Service;

use Symfony\Component\HttpFoundation\Session\Session;

class MyAnotherService
{
    private $session;

    public function setSession(Session $session)
    {
        $this->session = $session;
    }

    public function getSession()
    {
        return $this->session;
    }
} 