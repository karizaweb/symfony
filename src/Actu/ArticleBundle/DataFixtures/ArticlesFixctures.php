<?php

namespace Actu\ArticleBundle\DataFixtures;

// Gestionaire des fixture de Doctrine
use Doctrine\Bundle\FixturesBundle\Fixture;

// Gestionaire du Domain object de Doctrine
use Doctrine\Common\Persistence\ObjectManager;

// L'entité Articles
use Actu\ArticleBundle\Entity\Articles;

class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $articles= new Articles();

        // title
        $articles->setTitle("le titre de mon article");

        // content
        $articles->setContent("Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis filius et Danaes");
        
        $manager->persist($articles);

        $manager->flush();
        
    }
}
