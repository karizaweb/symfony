<?php

namespace Actu\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Actu\ArticleBundle\Entity\Articles;
use Actu\ArticleBundle\Form\Type\ArticlesType;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ActuArticle/Default/index.html.twig');
    }

    public function createAction()
    {
        // Instance de l'entité
        $articles = new Articles;

        // Creation du formulaire à partir du FormType
        $form = $this->createForm(ArticlesType::class, $articles);

        // Generation de la vue du formulaire
        $form = $form->createView();

        // Envois du formulaire
        return $this->render('@ActuArticle/Default/create.html.twig',[
            "form" => $form
        ]);
    }

    public function retrieveAction()
    {
        return $this->render('@ActuArticle/Default/retrieve.html.twig');
    }

    public function updateAction()
    {
        return $this->render('@ActuArticle/Default/update.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('@ActuArticle/Default/delete.html.twig');
    }
}
