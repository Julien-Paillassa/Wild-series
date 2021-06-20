<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\Self_;

class CategoryFixtures extends Fixture
{
    const CATEGORIES = [
        'Action', //category_0
        'Aventure', //category_1
        'Animation', //category_2
        'Comédie', //category_3
        'Documentaire', //category_4
        'Fantastique', //category_5
        'Horreur', //category_6
        'Science-Fiction', //category_7
        'Manga', //category_8
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::CATEGORIES as $key => $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $manager->persist($category);
            $this->addReference('category_' . $key, $category);
        }
        $manager->flush();
    }
}