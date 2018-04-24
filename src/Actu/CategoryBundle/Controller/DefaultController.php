<?php

namespace Actu\CategoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ActuCategory/Default/index.html.twig');
    }

    public function createAction()
    {
        return $this->render('@ActuCategory/Default/create.html.twig');
    }

    public function retrieveAction()
    {
        return $this->render('@ActuCategory/Default/retrieve.html.twig');
    }

    public function updateAction()
    {
        return $this->render('@ActuCategory/Default/update.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('@ActuCategory/Default/delete.html.twig');
    }
}

