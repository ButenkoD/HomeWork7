<?php

namespace Butenko\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $result = $this->container
            ->get("my_service")
            ->simpleTask();
        $fileExists = $this->container
            ->get("my_service")
            ->returnFilesystem()
            ->exists('/var/www/index.html');

        $session = $this->container
            ->get('my_another_service')
            ->getSession();

        $metaDataBag = $session->getMetadataBag();

        return $this->render('ButenkoHomeBundle:Default:index.html.twig', array(
            'result' => $result,
            'filesystem' => $fileExists,
            'metadatabag' => $metaDataBag
        ));
    }
}
